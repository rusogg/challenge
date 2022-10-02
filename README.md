<h1 align="center">Challenge GreenFlame</h1>

## Índice

[Versiones](#Versiones)

[Requerimientos](#Requerimientos)

[Paso a Paso](#Paso-a-Paso)



<h2>Versiones</h2>

* Laravel 9
* Php 8.1


<h2>Requerimientos</h2>

- ** [Xampp con php 8.1](https://www.apachefriends.org/es/index.html) **
- ** [Composer](https://getcomposer.org/download/) **
- ** [Node](https://nodejs.org/en/download/) **



<h2>Paso a Paso</h2>

* 1 Crearemos una carpeta en la ruta que instalamos el XAMPP, carpeta htdocs, llamada proyectosLaravel por ejemplo.
* 2 Descargaremos o clonaremos este repositorio en la carpeta recien creada.
* 3 Debemos arrancar el Apache y MySql desde el controlPanel de XAMPP.
* 4 Dirigirnos a http://localhost/phpmyadmin/ y crear la base de datos Laravel.
* 5 Abrir una terminal de comandos, ejecutar la linea ¨cd (aca va la ruta donde habiamos clonado o descargado el repo)¨.
* 6 Ejecutar la linea ¨composer install¨.
* 7 Dentro de la carpeta del proyecto duplicar el archivo ¨.env.example¨ y renombrarlo a ¨.env¨.
* 8 Volver a la terminal de comandos y ejecutar la siguiente ¨php artisan key:generate¨.
* 9 Ejecutar el comando ¨php artisan migrate:refresh --seed¨ para importar la base de datos con sus respectivos SEEDS.
* 10 Ejecutar el comando ¨npm install¨ para instalar dependencias.
* 11 Por ultimo ejecutar el comando ¨npm run dev¨ y abrir otra terminal de comandos en la misma direccion y ejecutar ¨php artisan serve¨.
* 12 Dirigirse a http://127.0.0.1:8000/ y usar las credenciales de administrador correspondientes.
