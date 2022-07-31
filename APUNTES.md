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

## Herencia

La herencia en programación orientada a objetos, permite tener clases que extiendan de otras, heredando así sus propiedades y métodos no privados.

- Una clase solo puede heredar propiedades y métodos que no sean privados, (visibilidad protected y public)

### Clases Abastractas

>PHP 5 introduce clases y métodos abstractos. Las clases definidas como abstractas no se pueden instanciar y cualquier clase que contiene al menos un método abstracto debe ser definida como tal. Los métodos definidos como abstractos simplemente declaran la firma del método, pero no pueden definir la implementación.

- Todos los metodos definidos en la clase abstractas deben ser declarados en la clase que extiende a esta;
- además, estos métodos deben ser definidos con la misma (o con una menos restrictiva) visibilidad;
- las firmas de los métodos tienen que coincidir, es decir, la declaración de tipos y el número de argumentos requeridos deben ser los mismos.
- Esto también se aplica a los constructores a partir de PHP 5.4.

**PHP no permite herencia multiple**

## Interacción entre objetos

>Una característica muy importante de la programación orientada a objetos es la capacidad que los objetos tienen para interactuar con otros

- Usando la `parent::` podemos acceder a las caracteristicas de la clase padre de la cual extiende una clase determinada.

