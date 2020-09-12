# Reglas de programación
## Controladores
- **NUNCA** haga `echo` en un controlador.
- Los controladores que controlan un recurso **DEBEN** usar el nombre plural del recurso.
    ~~~php
    class PostsController
    {

    }
    ~~~
- **INTENTAR** mantener los controladores simples y ceñirse a las palabras clave CRUD predeterminadas:
    1. Indexar.
    2. Crear.
    3. Almacenar.
    4. Mostrar.
    5. Editar.
    6. Actualizar.
    7. Destruir.
## Modelos
- Los modelos **DEBEN** llamarse como su controlador respectivo, solo que en singular.
## Vistas
- **TODA** vista **DEBE** extender del layout master.
- **TODA** vista **DEBE** ser blade.
- **NUNCA** habra y cierre php dentro de las vistas.
- Los archivos de vista **DEBEN** usar `camelCase`.
    ~~~
    resources/
        views/
            openSource.blade.php
    ~~~
## Rutas
- **TODA** ruta **DEBE** estar asociada a un controlador.
- Las *url* de cara al público **DEBEN** usar `kebab-case`.
    ~~~
    https://spatie.be/open-source
    ~~~
- Los nombres de las rutas **DEBEN** usar `camelCase`.
    ~~~php
    Route::get('open-source', 'OpenSourceController@index')->name('openSource');
    ~~~
- Los verbos http **DEBEN** ir primero al definir una ruta.
    ~~~html
    <a href="{{ route('openSource') }}">
        Open Source
    </a>
    ~~~
    ~~~php
    <?php
    // All http verbs come first
    Route::get('open-source', 'OpenSourceController@index')->name('openSource');
    ~~~
- Los parámetros de la ruta **DEBEN** usar `camelCase`.
    ~~~php
    Route::get('news/{newsItem}', 'NewsItemsController@index');
    ~~~
- Una *url* de ruta **NO DEBE** comenzar con `/` **A MENOS** que la *url* sea una cadena vacía.
## Validación
- Al usar múltiples reglas para un campo en una solicitud de formulario, evite usar `|`, usar siempre notación de arreglos.
~~~php
    public function rules()
    {
        return ['email' => ['required', 'email'],
        ];
    }
~~~