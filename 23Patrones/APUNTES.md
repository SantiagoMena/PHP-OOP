# 23 Patrones de diseño en PHP

## Patrones de construcción

Los patrones de construcción tienen la vocación de abstraer los mecanismos de creación de objetos. Un sistema que utilice estos patrones se vuelve independiente de la forma en que se crean los objetos, en particular, de los mecanismos de instanciación de las clases concretas.

Estos patrones encapsulan el uso de clases concretas y favorecen el uso de las interfaces en las relaciones entre objetos, aumentando las capacidades de abstración en el diseño global del sistema.

### Abastract Factory

El objetivo del patrón `Abstract Factory` es la creación de objetos agrupados en familias sin tener que conocer las clases concretas destinadas a la creación de estos objetos.

Ejemplo:

    El sistema de venta de vehículos gestiona vehículos que funcionan con gasolina y vehículos que eléctricos. Esta gestión está delegada en el objeto `Catálogo` encargada de crear tales objetos.

    Para cada producto, disponemos de una clase abstracta, de una subclase concreta derivando una versión del producto que funciona con gasolina y de una subclase concreta derivando una versión del producto que funciona con electricidad. Por ejemplo para el objeto `Scooter` exiten una clase abstracta `Scooter` y dos subclases concretas `ScooterElectricidad`y `ScooterGasolina`.

    El objeto `Cátalogo`puede utilizar estas subclases concretas para instanciar los productos. No obstante si fuera necesario incluir nuevas clases de familias de vehículos (diésel o mixto gasolina-eléctrico), las modificaciones a realizar en el objeto Cátalogo pueden ser bastante pesadas.

    El patrón `Abstract Factory` resuelve este problema introduciendo una interfaz `FabricaVehiculo` que contiene la firma de los métodos para definir cada producto. El tipo devuelto por estos métodos está constituido por una de las clases abstractas del producto. De este modo el objeto `Catálogo` no necesita conocer las subclases concretas y permanece desacoplado de las familias de producto.

    Se incluye una subclase de implementación de `FabricaVehiculo`por cada familia de producto, a saber las subclases `FabricaVehiculoElectricidad` y `FabricaVehiculoGasolina`. Dicha subclase implementa las operaciones de creación de vehículos apropiado para la familia a ala que está asociada.

    El objeto `Catalogo` recibe como parametro una instancia que responde a la interfaz `FabricaVehiculo`, es decir o bien una instancia de `FabricaVehiculoElectricidad`, o bien una instancia de `FabricaVehiculoGasolina`. Con dicha instancia, el catálogo puede crear y manipular los vehiculos sin tener que conocer las familias de vehículos y las clases concretas.

### Builder

El objetivo del patron `Builder` es abstraer la construcción de objetos complejos de su implementación, de modo que un cliente pueda crear objetos complejos sin tener que preocuparse de las diferencias de su implementación.

Ejemplo:

    Durante la compra del vehículo, el vendedor crea todo un conjunto de documentos que contienen en especial la solicitud de pedido y la solicitud de matriculación del cliente. Es posible construir estos documentos en formato HTML o en formato PDF, según la elección del cliente. En el primer caso, el cliente provee una instancia de la clase `ConstructorDocumentacionVehiculoHtml` y, en el segundo caso, una instancia de la clase `ConstructorDocumentacionVehiculoPdf`. El vendedor realiza, a continuación la solicitud de creación de cada documento mediante esta instancia.

    De este modo el vendedor genera la documentación con ayuda de los métodos `construyeSolicitudPedido` y `construyeSolicitudMatriculación`.

    El vendedor puede crear las solicitudes de pedido y las solicitudes de matriculación sin conocer las subclases de `ConstructorDocumentacionVehiculo`ni las de `Documentación`.

    Las relaciones de dependencia entre el cliente y las subclases de `ConstructorDocumentacionVehiculo` se explican por el hecho de que el cliente crea una instancia de estas subclases.

### Factory Method

El objetivo del patrón `Factory Method` es proveer un método abstracto de creación de un objeto delegando en las subclases concretas su creación efectiva.

Ejemplo:

    Vamos a centrarnos en los clientes y sus pedidos. La clase `Cliente` implementa el método `crearPedido` que debe crear el pedido. Ciertos clientes solicitan un vehículo pagando al contado y otros clientes utilizan el crédito. En función de la naturaliza del cliente, el método `crearPedido`debe crear una instancia cde clase `PedidoContado` o una instancia de la clase `PedidoCredito. Para realizar estas alternativas, el método `crearPedido` es abstracto. Ambos tipos de cliente se distinguen mediante dos subclases concretas de la  clase abstracta Cliente:

    - La clase concreta `ClienteContado` cuyo método `crearPedido` crea una instancia de la clase `PedidoContado`
    - La clase concreta `ClienteCredito` cuyo método `crearPedido` crea una instancia de la clase `PedidoCredito`.

Dominios de uso:

El patrón se utiliza en los casos siguientes:

- Una clase que solo conoce los objetos con los que tiene relaciones.
- Una clase que quiere transmitir a sus subclases las elecciones de instanciación aprovechando un mecanismo de polimorfismo.

### Prototype

El objetivo de este patrón es la creación de nuevos objetos mediante la duplicación de objetos existentes llamados prototipos que disponen la capacidad de clonación.

Ejemplo:

    Durante la compra de un vehículo, un cliente debe recibir una documentación compuesta por un número concreto de documentos tales como el certificado de cesión, la solicitud de matriculación o incluso la orden de pedido. Existen otros tipos de documentos que pueden incluirse o excluirse a esta documentación en función de las necesidades de gestión o de cambios de reglamentación. Introducimos una clase `Documentacion` cuyas instancias son documentaciones compuestas por diversos documentos obligatorios. Para cada tipo de documento, incluimos su clase correspondiente.

    Creamos un modelo de documentación que consiste en una instancia particular de la clase `Documentacion` y que contiene los distintos documentos necesarios, documentos en blanco. Llamamos a esta documentación "documentación en blanco". De este modo definimos a nivel de las instancias, y no a nivel de las clases, el contenido preciso de la documentación que debe recibir un cliente. Incluir o excluir un documento de la documentación en blanco no supone ninguna modificación a su clase.

    Una vez presentada la documentación en blanco, recurrimos al proceso de clonación para crear las nuevas documentaciones. cada nueva documentación se crea duplicando todos los documentos de la documentación en blanco.

    Esta técnica basada en objetos que poseen la capacidad de clonación utiliza el patron `Prototype`, y los documentos constituyen distintos prototipos.

    La clase `Documento` es una clase abstracta conocida por la clase `Documentacion`. Sus subclases corresponden a los distintos tipos de documentos. Incluyen un método `duplica` que permite clonar una instancia existente para obtener una nueva.

    La clase `Documentacion` también es abstracta. Posee dos subclases concretas:
    
    - La clase `DocumentacionEnBlanco`, que posee una única instancia que contiene todos los documentos necesarios (documentos en blanco). Esta instancia se manipula mediante los métodos `agrega` y `elimina`.
    - La clase `DocumentacionCliente`, cuyo conjunto de documentos se crea solicitando a la única instancia de la clase `DocumentacionEnBlanco` la lista de documentos en blanco y agregándolos uno a uno tras haberlos clonado.

Dominios de uso:
El patron `Prototype` se utiliza en los dominios siguientes:

- Un sistema de objetos debe crear instancias sin conocer la jerarquía de clases que las describe.
- Un sistema de objetos debe crear instancias de clases dinámicamente.
- El sistema de objetos debe permanecer simple y no incluir una jerarquía paralela de la clase de fabricación.

### Singleton

El patrón `Singleton` tiene como objetivo asegurar que una clase solo posee una instancia y proporcionar mediante un método de clase único que devuelva esta instancia.

En ciertos casos es útil gestionar clases que posean una única instancia. En el marco de patrones de construcción, podemos citar el caso de una fabrica de productos (patrón Abstract Factory) del que solo es necesario crear una instancia.

Ejemplo:

    En el sistema de venta online de vehículos, debemos gestionar clases que poseen una sola instancia.

    El sistema de documentación que debe entregarse al cliente tras la compra de un vehículo (como el certificado de cesión, la solicitud de matriculación y la orden de pedido) utiliza la clase DocumentaciónEnBlanco que solo posee una instancia.

    También cuando se genera un nuevo Comercial se implementa una única instancia de la clase, haciendo el método constructor privado, para que solo pueda ser instanciada mediante el método `getInstance`.

## Patrones de estructuración

El objetivo de los patrones de estructuración es facilitar la independencia de la interfaz de un objeto o de un conjunto de objetos respecto a de su implementación. En el caso de un conjunto de objetos, se trata también de hacer que esta interfaz sea independiente de la jerarquía de clases y de la composición de los objetos.

Proporcionando interfaces, los patrones de estructuración encapsulan la composición de objetos, aumentan el nivel de abstracción del sistema de forma similar a como los patrones de creación encapsulan la creación de objetos. Los patrones de estructuración ponen de relieve las interfaces.

La encapsulación de la composición no se realiza estructurando el objeto en sí mismo sino transfiriendo esta estructuración a un segundo objeto. Este queda íntimamente ligado al primero. Esta transferencia de estructuración significa que el primer objeto posee la interfaz de cara a los clientes y administra la relación con el segundo objeto que gestiona la composición y no tiene ninguna interfaz con los clientes externos.

Esta realización ofrece otra mejora que es la flexibilidad en la composición, la cual puede modificarse de manera dinámica. En efecto, es sencillo sustituir un objeto por otro sie,pre que sea de la misma clase o que respete la misma interfaz. Los patrones `Composite`, `Decorator`, y `Bridge` son un buen ejemplo de este mecanismo.

### Adapter

El objetivo del patron `Adapter` es convertirse en la interfaz de una clase existente en la interfaz esperada por los clientes también existentes de modo que puedan trabajar de manera conjunta. Se trata de conferir a una clase existente una nueva interfaz para responder a las necesidades de los clientes.

Ejemplo:

    El servidor web del sistema de venta de vehículos crea y administra los documentos destinados a los clientes. La interfaz `Documento`se ha definido para realizar esta gestión, contiene tres métodos `setContenido`, `dibuja` e `imprime`. Se ha realizado una primera clase de implementación de esta interfaz: Los objetos clientes de esta interfaz y esta clase cliente ya se han diseñado.

    Por otr lado, la agregación de documentos PDF supone un problema, pues se trata de documentos más complejos de construir y de administrar que los documentos HTML. Para ello se ha escogido un producto del mercado, aunque su interfaz no se corresponde con la interfaz `Documento`. El componente `ComponentePdf` su interfaz incluye más métodos y la nomenclatura es diferente.

    El patron `Adapter`proporciona una solución que consiste en crear la clase `DocumentoPdf` que implementa la interfaz `Documento` y posee una asociación con `ComponentePdf`. La implementación de los tres métodos de la interfaz `Documento` consiste en delegar correctamente las llamadas al componente PDF.

### Bridge

El objetivo del patrón `Bridge` es separar el aspecto de implementación de un objeto de su aspecto de representación y de interfaz.

De este modo, por un lado la implementación puede encapsularse por completo y por otro lado la implementación y la representación pueden evolucionar de manera independiente y sin que ninguna suponga restricción alguna sobre la otra.

Ejemplo:

    Para realizar la solicitud de matriculación de un vehículo de ocasión, conviene precisa sobre esta solicitud cierta información importante como el número de placa existente. El sistema muestra un formulario para solicitar esta información.
    
    Existen dos implementaciones de los formularios:
    - Formularios HTML
    - Formularios QT

    La solución del patron `Bridge` consiste en separar aquellos aspectos de representación de los de la implementación y en crear dos jerarquías de clases.

    Las instancias de la clase `FormularioMatriculacion` mantienen el vínculo implementación hacia una instancia que responde a la interface `FormularioInterfaz`.

    La implementación de `FormularioMatriculacion` está basada en el uso de los métodos descritos en `FormularioInterfaz`.

    En cuanto a la clase `FormularioMatriculacion`, ahora es abstracta y existe una subclase concreta para cada país (`FormularioMatriculacionEspaña` y `FormularioMatriculacionPortugal`)

Dominios de aplicación:

- Para evitar que exista un vinculo demasiado fuerte entre la representación y su implementación, en especial cuando la implementación se selecciona en el curso de ejecución de la aplicación.
- Para los cambios de la implementación de los objetos que no tengan impacto en las interacciones entre objetos y sus clientes.
- Para permitir que la representación de los objetos y a su implementación conservar la capacidad de extensión mediante la creación de nuevas subclases.
- Para evitar la jerarquía de clases.

### Composite

El objetivo del patrón `Composite` es ofrecer un marco de diseño de una composición de objetos de profundidad variable, diseño que estará basado en un árbol.

Por otro lado, esta composición está encapsulada con respecto a los clientes de los objetos que pueden interactuar sin tener que conocer la profundidad de la composición.

Ejemplo:

    En nuestro sistema de ventas de vehículos, queremos representar las empresas cliente, en especial para conocer el número de vehículos de los que disponen y proporcionarles ofertas de mantenimiento para su parque de vehículos.

    Las empresas que posean filiales solicitan ofertas de mantenimiento que tengan en cuenta el parque de vehículos de sus filiales.

    Una solución inmediata consiste en procesar de forma diferente a las empresas sin filiales y las que posean filiales. No obstante esta diferencia en el procesado entre ambos tipos de empresa vuelve a la aplicación más compleja y dependiente de la composición interna de las empresas cliente.

    El patrón Composite resuelve este problema unificando ambos tipos de empresa y utilizando la composición recursiva. Esta composición recursiva es necesaria puesto que una empresa puede tener filiales que posean, ellas mismas, otras filiales. Se trata de una composición de árbol (tomamos la hipótesis de la ausencia de una filial común entre dos empresas).

    La clase `Empresa` posee tres métodos públicos de los cuales solo uno es concreto y los otros dos son abstractos. El método concreto es el método `agregarVehiculo` que no depende de la composición en filiales de la empresa. En cuanto a los otros dos métodos, se implementan en las subclases concretas (`agregarFilial` solo tiene una implementación vacía en `EmpresaSinFilial`.

Dominios de aplicación

- Es necesario representar jerarquías de composición en un sistema
- Los clientes de una composición deben ignorar si se comunican con objetos compuestos o no.

### Decorator

El objetivo del patrón `Decorator` es agregar dinámicamente funcionalidades sumplementarias a un objeto. Esta agregación de funcionalidades no modifica la interfaz del objeto y es transparente de cara a los clientes.

El patrón `Decorator` constituye una alternativa respecto a la creación de una subclase para enriquecer el objeto.

Ejemplo

    El sistema de venta de vehículos dispone de una clase `VistaCatalogo` que muestra, bajo el formato de un catálogo electrónico, los vehículos disponibles en una página web.

    Queremos a continuación, visualizar datos suplementarios para los vehículos "de alta gama", a saber la información técnica ligada al modelo. Para agregar esta funcionalidad, podemos crear una subclase de visualización especifica para los vehículos "de alta gama". Ahoram queremos mostrar el logotipo de la marca en los vehículos "de gamas media y alta". Conviene crear una nueva subclase para estos vehículos, súperclase de la clase de vehículos "de alta gama" lo cual se vuelve rápidamente complejo.

    El patrón `Decorator` proporciona otro enfoque que consiste en agregar un nuevo objeto llamado decorador que se constituye por el objeto inicial y que lo referencia. Este decorador posee la misma interfaz, lo cual vuelve a la sustitución transparente de cara a los clientes. En nuestro caso, el método `visualiza`lo interpreta el decorador, que solicita al objeto inicial su visualización y la enriquece con información complementaria.

### Facade

El objetivo del patrón `Facade`es agrupar las interfaces de un conjunto de objetos en una interfaz unificada volviendo a este conjunto más fácil de usar por parte del cliente.

El patrón `Facade` encapsula la interfaz de cada objeto como interfaz de bajo nivel en una interfaz única de nivel más elevado. La construcción de la interfaz unificada puede necesitar implementar métodos destinados a componer las interfaces de bajo nivel.

Ejemplo:

    Queremos ofrecer la posibilidad de acceder al sistema de venta de vehículos como servicio web. El sistema está arquitecturizado bajo la forma de un conjunto de componentes que poseen su propia interfaz como:
    
    - El componente `Catalogo`
    - El componente `GestionDocumento`

    Es posible dar acceso al conjunto de la interfaz de estos componentes a los clientes del web.
    El patrón `Facade` resuelve este problema proporcionando una interfaz unificada más sencilla y con un nivel de abstracción más elevado. Una clase se encarga de implementar esta interfaz unificada utilizando los componentes del sistema.