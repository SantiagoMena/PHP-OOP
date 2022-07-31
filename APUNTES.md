# PHP - Programación Orientada a Objetos

## Clases, objetos, atributos y métodos

### ¿Qué es un objeto?

Es la instancia de una clase, la cual tiene tiene atributos propios y comportamientos (métodos).

`$person1 = new Person('Duilio','Palacios');`

### ¿Qué es una Clase?

Es la abastrción de un objeto, es la definición de la forma general de un objeto.

- Las clases están definidas por **propiedades** (que son las variables dentro de la clase) y **métodos** (que son las funciones dentro de la clase). Para acceder a los métodos y propiedades dentro de la clase se usa la variable `$this`

- Las clases cuentan con un método constructor, este metodo se encarga de recibir valores para asignarlos a sus propiedades.

`function __construct($firstName, $lastName) { $this->firstName = $firstName; ... }`

- Las clases se instancian con la palabra reservada `new` la cual creará una instancia de la clase y creará un obejto de esta.

`$person1 = new Person('Duilio','Palacios');`

## Encapsulamiento

Al proceso de proteger y ocultar información dentro de una clase se le denomina **encapsulamiento**.

>El encapsulamiento de datos previene que el desarrollador haga cambios inesperados al sistema, como también ocultar la información para que no pueda ser modificada o vista por otras clases

### Visibilidad

>La visibilidad de una propiedad, un método o (a partir de PHP 7.1.0) una constante se puede definir anteponiendo a su declaración una de las palabras reservadas public, protected o private.

- public

  >A los miembros de clase declarados como 'public' se puede acceder desde donde sea

- protected

  >A los miembros declarados como 'protected', solo desde la misma clase, mediante clases heredadas o desde la clase padre

- private

  >A los miembros declarados como 'private' únicamente se puede acceder desde la clase que los definió.

### Setter

Los setters son funciones que asignan valores a las variables de un objeto.

### Getter

Los getters son funciones que retornan los valores de las variables de un objeto.

