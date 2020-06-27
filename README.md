## Instalación
Es necesario PHP >= 7.2.0 ( Laravel Framework 6 )

`git clone https://github.com/deploycode/gradiweb-test.git`

`cd gradiweb-test`

`composer install`

crear una copia del archivo `.env.example` y renombrar como `.env`

`php artisan key:generate`

crear una base de datos por ejemplo: `gabrielrodriguez_db`

Configurar el apartado de base de datos del `.env` por ejemplo

<pre>
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=gabrielrodriguez_db
DB_USERNAME=root
DB_PASSWORD=
</pre>

Ejecutar el comando `php artisan migrate --seed`

Ejecutar el servidor de laravel `php artisan serve`

## Consideraciones
Se pueden registar nuevos usuarios en `/register`, no obstante un seeder creará un usuario adminsitrador por defecto:
<pre>
email: admin@mail.com
password: password
</pre>


Un factory registrará 10 productos random durante la migración

<p align="center"><img src="https://raw.githubusercontent.com/deploycode/gradiweb-test/develop/public/uploads/Captura.PNG" width="500"></p>


Para ejecutar el factory de productos  `php artisan migrate:refresh --seed`, esta acción eliminará los datos existentes en bd y creará 10 nuevos productos y el usuario por defecto

En sistema Windows el factory puede tener inconvenientes de permisos sobre el directorio /tmp para la carga de las imágenes random, el factory atrapará la excepción y creará todos los productos con un imagen `default.png` 


<p align="center"><img src="https://raw.githubusercontent.com/deploycode/gradiweb-test/develop/public/uploads/Capture.PNG" width="500"></p>






