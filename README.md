<p align="center"><a href="https://www.instagram.com/harom_dev/" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


## PROCESO DE EJECUCIÓN DEL CRUD EN LARAVEL

Habilitar la Extensión ZIP en PHP
//extension=zip

Ejecuta el comando "composer install" para instalar todas las dependencias de PHP que requiere Laravel.
Crear una Copia del Archivo .env.example: Ejecutando el comando "cp .env.example .env"
Generar la Clave de la Aplicación: Ejecutando el comando "php artisan key:generate"


## CREAMOS LAS TABLAS DE LA BASE DE DATOS 

## Tabla Autor:
php artisan make:migration create_autor_table --create=autor

Abre el archivo de migración recién creado en el directorio database/migrations. 
Define la estructura de la tabla dentro del método up:
$table->id('idAutor');
$table->string('nombre');
$table->string('apellidoPaterno');
$table->string('apellidoMaterno');
$table->string('estado');
$table->timestamps();

## Tabla Libro:
php artisan make:migration create_autor_table --create=libro

$table->id('idLibro');
$table->string('titulo');
$table->string('descripcion');
$table->string('numPagina');
$table->string('estado');
$table->timestamps();

## Ejecutar la Migración:
php artisan migrate

Ejecutar el Servidor de Desarrollo: 
php artisan serve


