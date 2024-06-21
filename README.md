<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

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

## Tabla Libro
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

y con todo este procedimiento el crud de libros y autores estara listo.

