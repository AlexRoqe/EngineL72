#	Engine - Bootstrap - Laravel 7.2.*

##	Inicio de Repositorio

<!-- Acciones -->
###	Acciones
-	Instalamos laravel con composer
-	Generamos Key
-	Inicializamos git
<!-- Acciones -->

<!-- Command -->
###	Command
```
laravel new EngineL72
php artisan key:generate

git init
git add .
git commit -m "Inicio de Repositorio"
```
<!-- Command -->

--------------------

##	Adaptacion

<!-- Acciones -->
###	Acciones
-	Generamos scaffolding de autenticacion
-	Modificamos nombre de archivos en database.migrations

		APP_NAME="EngineL72"
		DB_DATABASE=enginel72

		2020_01_01_000000_create_users_table.php
		2020_01_01_000000_create_password_resets_table.php
		2020_01_01_000000_create_failed_jobs_table.php

-	Modificamos todos los vinculos de App\ a App\Models\
-	Movemos todos los modelos de App\ a App\Models\

		app/Http/Controllers/Auth/RegisterController
		app/Models/User
		config/Auth
		database/factories/UserFactory

-	Modificamos todos los vinculos de name a username

		database/migrations/2020_01_01_000000_create_users_table
		app/Http/Controllers/Auth/RegisterController
		app/Models/User
		resources/views/auth/register.blade
		resources/views/layouts/app.blade

-	Modificamos la Zona Horaria en Config\app

		'timezone' => 'America/New_York',
	    'locale' => 'es',
	    'fallback_locale' => 'es',

-	Incluimos nuestras opciones de almacenamiento en config\filesystems

        /* Al3x Roqe */
	    'boucher' => [
	        'driver' => 'local',
	        'root' => storage_path('app/iboucher'),
	        'url' => env('APP_URL').'/storage',
	        'visibility' => 'public',
	    ],

	    'publico' => [
	        'driver' => 'local',
	        'root' => public_path('app/img'),
	    ],
	    /* Al3x Roqe */

-	Incluimos en Providers/RouteServiceProvider

	    public const DASHBOARD = '/area/dashboard';

-	Modificamos vinculo de RouteServiceProvider::HOME a DASHBOARD en

        App/Http/Controllers/Auth/ConfirmPasswordController
        App/Http/Controllers/Auth/LoginController
        App/Http/Controllers/Auth/RegisterController
        App/Http/Controllers/Auth/ResetPasswordController
        App/Http/Controllers/Auth/VerificationController
        App/Http/Middleware/RedirectAutenticated

-	Movemos y remonbramos la vista home a area/Dashboard
-	Renombramos vista welcome a home
-	Incluimos en resources/views/home.blade
	{{ config('app.name', 'EngineL72') }}

-	Modificamos EXTENDS de vistas a CORE

        resources/views/auth/passwords/confirm.blade
        resources/views/auth/passwords/email.blade
        resources/views/auth/passwords/reset.blade
        resources/views/auth/login.blade
        resources/views/auth/register.blade
        resources/views/auth/verify.blade
        resources/views/area/dashboard.blade

<!-- Acciones -->

<!-- Command -->
###	Command
```
composer require laravel/ui
npm install
npm run dev
php artisan ui bootstrap --auth

git add .
git commit -m "Adaptacion"
```
<!-- Command -->

--------------------

#####	Configuraciones Basicas

<!-- Acciones -->
####	Acciones
-	Creamos seeder y incluimos valores en UsersTableSeeder
-	Incluimos el seeder en DatabaseSeeder

-	Instalamos paquetes
-	Registramos en config.app

		/* Providers */
		/* Al3x Roqe */
		Barryvdh\Debugbar\ServiceProvider::class,
		/* Al3x Roqe */

		/* Aliases */
		/* Al3x Roqe */
		'Debugbar' => Barryvdh\Debugbar\Facade::class,
		/* Al3x Roqe */

-	Modificamos webpack.mix

		/* Laravel Lang */
		mix.copyDirectory('vendor/caouecs/laravel-lang/src/es', 'resources/lang/es');
		/* Laravel Lang */

-	Creamos y adaptamos el controlador GlobalController
-	Creamos y adaptamos el controlador Admin/DashboardController
-	Eliminamos HomeController

-	Modificamos route Web
<!-- Acciones -->

<!-- Command -->
####	Command
```
php artisan make:controller GlobalController
php artisan make:controller Admin/DashboardController
php artisan make:seeder UsersTableSeeder

php artisan migrate:refresh --seed
*_php artisan migrate:fresh --seed_*
*_php artisan migrate --seed_*

composer require doctrine/dbal								*_Mejoras en Migraciones_*
composer require barryvdh/laravel-debugbar --dev            *_Debuger_*
composer require caouecs/laravel-lang                       *_Idiomas_*

php artisan vendor:publish --provider="Barryvdh\Debugbar\ServiceProvider"

git add .
git commit -m "Configuraciones Basicas"


git remote add origin https://github.com/Al3xRoqe/EngineL72.git
git push origin master
```
<!-- Command -->

--------------------
#####	MINIFICACION

<!-- Acciones -->
####	Acciones

-	Conservamos solo archivos necesarios

<!-- Acciones -->

<!-- Command -->
####	Command
```
git add .
git commit -m "Minificacion"
git remote add origin https://github.com/DevCoreGlobalTeam/SoulBMin.git
git push origin master
```
<!-- Command -->

--------------------

![EngineLand!](https:https://enginelandteam.github.io/dist/assets/image/T-21.png)

## TEAM

Somos un grupo de trabajo con gente joven de todo el orbe, abierta al mundo y a sus requerimientos, dispuestos a elaborar cuanto su imaginación nos exija, tenemos en nuestro Equipo personas con la imaginación mas loca. y la predispocición a cumplir todas sus espectativas.
