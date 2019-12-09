# AyR-Materias-Primer-Semestre
Aplicación para la consulta de las materias de primer semestre de la universidad que sirve de apoyo a la inscripción de materias.

## Requisitos:

- PHP >= 7.3.9
- Microsoft Drivers for PHP for SQL Server o (MySQL)

## Desarrollo:

- Es necesario configurar el archivo .env con los datos de conexión a la BD.
- Ejecutar el siguiente comando para instalar las dependencias PHP que estarán en el directorio */vendor* con composer.
  ```sh
  composer install
  ```
- Ejecutar el siguiente comando para instalar las dependencias de JS con npm.
  ```sh
  npm install
  ```
- Ejecutar el siguiente comando para generar el key de la aplicación.
  ```sh
  php artisan key:generate
  ```
- Ejecutar el siguiente comando para generar la estructura de la base de datos y la data.
  ```sh
  php artisan migrate --seed
  ```

## Despliegue PROD:

- La implementación para realizar el despliegue en producción se indica en el siguiente link:  *https://laravel.com/docs/6.x/deployment*
