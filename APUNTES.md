# PHP - Programación Orientada a Objetos

## ¿Qué es un objeto?

Es la instancia de una clase, la cual tiene tiene atributos propios y comportamientos (métodos).

`$person1 = new Person('Duilio','Palacios');`

## ¿Qué es una Clase?

Es la abastrción de un objeto, es la definición de la forma general de un objeto.

- Las clases están definidas por propiedades (que son las variables dentro de la clase) y métodos (que son las funciones dentro de la clase). Para acceder a los métodos y propiedades dentro de la clase se usa la variable `$this`

- Las clases cuentan con un método constructor, este metodo se encarga de recibir valores para asignarlos a sus propiedades.

`function __construct($firstName, $lastName) { $this->firstName = $firstName; ... }`

- Las clases se instancian con la palabra reservada `new` la cual creará una instancia de la clase y creará un obejto de esta.

`$person1 = new Person('Duilio','Palacios');`