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
