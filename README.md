Ejercicio de Introducción a YII 2.
Resuelto en clase (17/04/2014)

Enunciado:

La agencia Empleos TICS comenzará a hacer inscripciones a búsquedas laborales y desea hacerlo online. Para esto necesita un sistema que le permita:

- Listar rubros.
- Ver por rubro las ofertas de trabajo asociadas (se sugiere hacer un link).
- Permitir la inscripción de un postulante
- Asociar un postulante a una oferta laboral.
- Mostrar las inscripciones asociadas a una búsqueda laboral.


INSTALACIÓN

###Descargar el framework de http://www.yiiframework.com/download/

###Descomprimirlo en una carpeta pública del apache.

###Descargar los fuentes del presente repositorio y pisar el proyecto base.

BASE DE DATOS

Crear una Base de datos Mysql usando el script que se encuentra en la carpeta /data del proyecto.

Editar el archivo config/db.php

return [
	'class' => 'yii\db\Connection',
	'dsn' => 'mysql:host=localhost;dbname=empleostics',
	'username' => 'root',
	'password' => '',
	'charset' => 'utf8',
];