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
