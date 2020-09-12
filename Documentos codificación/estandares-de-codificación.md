# Guía estandares de codificación
## Descripción
- Los archivos **DEBEN** usar solo las etiquetas `<?php` y `<?=`.
- Los nombres de las clases **DEBEN** ser declarados en notación `StudlyCaps`.
- Las constantes de clase **DEBEN** ser declaradas en mayúsculas con separadores de subrayado.
- Los nombres de los métodos **DEBEN** ser declarados en notación `camelCase`.
## Archivos
### Etiquetas
- El codigo en *PHP* solo **DEBE** usar etiquetas largas `<?php ?>` o etiquetas cortas `<?= ?>`; **NO DEBE** usar las otras variaciones de las etiquetas. 
- La etiqueta de cierre **DEBE** ser omitida de los archivos que sólo contienen *PHP*.
### Lineas
- **NO DEBE** haber un límite duro en la longitud de las líneas.
- El límite suave de longitud de la línea **DEBE** ser de 120 caracteres.
- Las líneas **NO DEBEN** ser más largas que 80 caracteres; Las lineas más largas que eso **DEBEN** ser divididas en múltiples líneas subsiguientes.
- No debe haber más de una declaración por linea.
### Palabras clave y Verdadero/Falso/Nulo
- Las palabras clave de *php* **DEBEN** estan en minúsculas.
- Las constantes de *PHP* `true`, `false` y `null` **DEBEN** esatr en minúscula.
### Codificación de caracteres
El código *PHP* **DEBE** usar sólo UTF-8 sin BOM.
## Nombres de clases 
- Los nombres de las clases **DEBEN** ser declarados en notación `StudlyCaps`.
- Cada clase debe estar en un archivo por si misma.
- El código escrito para *PHP 5.3* y después **DEBE** usar escpacios de nombres formales.
~~~php
<?php
// PHP 5.3 y posterior:
namespace Producto\Tipo;

class Foo
{
}
~~~
## Constantes de clase y métodos.
### Extends and implements
Las palabras clave `extends` y `implements` deben estar declaradas en la misma linea que el nombre de la clase.
### Constantes
Las constantes de clases **DEBEN** ser declaradas en mayúsculas con separadores de subrayado. Por ejemplo:
~~~php
<?php
// PHP 5.3 and later:
namespace Producto\Tipo;

class Foo
{
    const CONSTANTE = '1000';
}
~~~
### Metodos
- Los métodos **DEBEN** ser declarados en notación `camelCase`.
- La visibilidad debe ser declarada en todos los métodos.
### Argumentos
- En la lista de argumentos, **NO DEBE** haber un espacio antes de cada coma, y **DEBE** haber un espacio despues de cada coma.
- Los argumentos del método con valores por defecto **DEBEN** ir al final de la lista de argumentos.
## Estructuras de control
Las reglas generales de estilo para las estructuras de control son las siguientes:
- **DEBE** haber un espacio después de la palabra clave de la estructura de control.
- **NO DEBE** haber un espacio después del paréntesis de apertura.
- **NO DEBE** haber un espacio antes del paréntesis de cierre.
- **DEBE** haber un espacio entre el paréntesis de cierre y la abrazadera de apertura.
- La estructura del cuerpo **DEBE** ser indentada solo una vez.
#### `if`, `elseif`, `else`
~~~php
<?php
if ($expr1) {
    // if body
} elseif ($expr2) {
    // elseif body
} else {
    // else body;
~~~
#### `switch`, `case`
~~~php
<?php
switch ($expr) {
    case 0:
    case 1:
    default:
        echo 'Default case';
        break;
~~~
#### `while`, `do while`
`while`
~~~php
<?php
while ($expr) {
    // structure body
}
~~~
`do while`
~~~php
<?php
do {
    // structure body;
} while ($expr);
~~~
#### `for`
`for`
~~~php
<?php
<?php
for ($i = 0; $i < 10; $i++) {
    // for body
}
~~~
#### `foreach`
`foreach`
~~~php
<?php
foreach ($iterable as $key => $value) {
    // foreach body
}
~~~
#### `try`, `catch`
`try catch`
~~~php
<?php
try {
    // try body
} catch (FirstExceptionType $e) {
    // catch body
} catch (OtherExceptionType $e) {
    // catch body
}
~~~