## Instalacion

1. Clonar el proyecto de github.com/lithos1998/prueba_tecnica_crm

2. Configurar .env

	En este caso el archivo .env viene listo para ejecutarse de forma local

	DB_CONNECTION=mysql
	DB_HOST=127.0.0.1
	DB_PORT=3306
	DB_DATABASE=crm_db 
	DB_USERNAME=root
	DB_PASSWORD=

3. Ejecutar migraciones y seeders

	php artisan migrate
	php artisan db:seed

4. Opcional

	En la raíz del proyecto se incluye un archivo.slq listo para importar con una base de datos ya cargada y con un usuario de prueba listo para loguear. 
	
	mail: admin@prueba.com
	contraseña: prueba123

Desarrollado por Carlos Riveros carlosriveros1998@gmail.com


