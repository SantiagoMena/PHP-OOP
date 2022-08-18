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

- Usando la palabra clave `parent` y el operador de resolución de ámbito `::` podemos acceder a las caracteristicas de la clase padre de la cual extiende una clase determinada.

### Principio Tell don’t ask

> En vez de pedirle a un objeto información sobre sus datos y luego con ellos tomar decisiones que alteren el mismo objeto ... ***Lo mejor es decirle al objeto lo que quieres que haga***, y dejar que sea responsabilidad del propio objeto cambiar su estado

## Interfaces y Polimorfismo

>La palabra polimorfismo significa «múltiples formas» y en programación orientada a objetos puede tener varios significados, por ejemplo la habilidad que tiene un método dentro de un objeto con interactuar con diferentes objetos de diferentes clases de la misma forma pero con resultados diferentes. Esto se logra cuando creamos clases que tienen la misma interfaz (es decir los mismos métodos públicos) pero se comportan de manera diferente.

## Autocarga de clases

>En PHP 5 esto ya no es necesario. La función spl_autoload_register() registra cualquier número de autocargadores, posibilitando que las clases e interfaces sean cargadas automáticamente si no están definidas actualmente. Al registrar autocargadores, a PHP se le da una última oportunidad de cargar las clases o interfaces antes de que falle por un error.

**Nota:**
>La autocarga no está disponible si se utiliza PHP en el modo interactivo CLI.

## PSR-1

- Los ficheros deben tener codificación UTF-8 sin bom.
- Los nombres de las clases deben utilizar la notación StudlyCaps (MyNameSpace/MiClase
- El nombre de las constantes debe estar en mayúsculas.
- Los nombres de los métodos deben declararse en notación camelCase (getUserOrders()).

## Operador use

Con el operador `use` se pueden importar clases.

## Alias

Con el operador `as` se puede asignar un alias a las importaciones de clases, otorgando un alias como nombre de clase importada.

## Composer

### init

Con el comando `composer init` se inicializa el proyecto de symfony generando el archivo `composer.json`

### psr-4

Composer cuenta con la opción `psr-4` en el parametro autoload del archivo `composer.json` para la autocarga archivos usando la recomendación PSR-4.
https://www.php-fig.org/psr/

### files

Composer cuenta con la opción `files` en el parametro autoload del archivo `composer.json` para la autocarga archivos especificos indicados en una matriz.

### dump-autoload

Cada vez que se modifique algo en el archivo `composer.json` se correr el comando `composer dump-autoload` para generar los archivos de autoload.

## Patron Factory

>En OOP, factory se refiere a un objeto o método que tiene por objetivo crear o instancias otros objetos.

## Patron Value Object

>Los value objects nos permiten agrupar grupos de valores que tienen sentido juntos pero no tienen sentido separados.

Ejemplo:

- Dinero: new Money(50, 'USD'); // cantidad y tipo de moneda
- Coordenadas: new Coordinates('38.898648N', '77.037692W'); // latitud y longitud
- Fecha: new Date(2016, 07, 21); //año, mes, día

## La palabra reservada 'static'

- >Declarar propiedades o métodos de clases como estáticos los hacen accesibles sin la necesidad de instanciar la clase.

- >Una propiedad declarada como static no puede ser accedida con un objeto de clase instanciado (aunque un método estático sí lo puede hacer).

### Métodos estáticos

- >Debido a que los métodos estáticos se pueden invocar sin tener creada una instancia del objeto, la seudovariable $this no está disponible dentro de los métodos declarados como estáticos

>**Advertencia
En PHP 7, llamar a métodos no estáticos de forma estática está obsoleto y generará una advertencia E_DEPRECATED. El soporte para las llamadas a métodos no estáticos de forma estática podría ser eliminado en el futuro.**

### Propiedades estáticas

- >No se puede acceder a las propiedades estáticas a través del objeto utilizando el operador flecha (->).

- >Como cualquier otra variable estática de PHP, las propiedades estáticas sólo pueden ser inicializadas utilizando un string literal o una constante; las expresiones no están permitidas. Por tanto, **se puede inicializar una propiedad estática con enteros o arrays (por ejemplo), pero no se puede hacer con otra variable**, con el valor de devolución de una función, o con un objeto.

### Named constructors

Para crear un constructor semántico sólo tienes que crear un método estático que cree y retorne una nueva instancia de una clase. Un named constructor es a su vez un método factory.

### Fluent interfaces

Para crear interfaces fluidas sólo tienes que recordar retornar $this luego de cada función. Las interfaces fluidas suelen usarse para métodos que modifican el estado de un objeto (como un setter).

### Facades

- Una facade permite implementar los principios de Open-Closed y Dependency inversion, haciendo uso de interfaces para la interacción entre objetos y la configuración por medio de funciones estaticas de estos objetos.

- >El principio SOLID: Open-closed (principio abierto/cerrado) establece que las clases u otra entidad de software deben estar abiertas para su extensión y cerradas para su modificación.

- >El principio SOLID Dependency inversion (principio de inversión de la dependencia) nos indica que debemos depender de abstracciones en vez de implementaciones concretas.

### Constantes

Para declarar constantes en una clase se usa el operador `const` y se puede acceder a estas con `static::CONST_NAME`. Se usan para evitar número o cadenas magicas (constantes explicitas en el código).

## Métodos mágicos

### __get($name)

Se usa para retornar el valor de un atributo sobreescribiendo la función al momento de usar `$objeto->atributo;`

### __set($name, $value)

Se usa para asignar valor a un atributo sobreescribiendo la función al momento de usar `$objeto->atributo = $valor;`

### __isset($name)

Se usa para verificar si está creado un atributo sobreescribiendo la función al momento de usar `isset($objeto->atributo)`

### __unset($name)

Se usa para eliminar un atributo sobreescribiendo la función al momento de usar `unset($objeto->atributo)`

### __call(string $metodo, array $args)

>Es el método mágico de PHP que se invocará cuando se intenta llamar a un método que no está definido en el objeto.

### __callStatic(string $metodo, array $args)

>Es el método mágico que se invocará cuando se intenta llamar a un inaccesible o no disponible método en el contexto de una clase, es decir, estamos llamando un método estático que no existe en la clase

### __toString()

>Se usa para que la clase pueda decidir qué comportamiento tendrá cuando sea usada como si fuera una cadena o transformada en una cadena.

### __invoke()

>El método __invoke() es llamado cuando un script intenta llamar a un objeto como si fuera una función.

### __sleep()

### __wakeup()

