<p align="center">
	<img src="logo-T.png" width="40%"/>
	<img src="https:https://enginelandteam.github.io/dist/assets/image/EL-10.png" width="400">
</p>

# ALEX ROQE - COMPOSER - WEBPACK - BOOTSTRAP

## GLOBAL

<!-- Acciones -->

### Acciones

**NPM**

**Instalacion y Configuracion Global de Npm**

-   npm install -g _[paquete]@[version]_

-   npm set init.author.name _@Nombre de usuario_
-   npm set init.author.email _Email de usuario_
-   npm set init.author.url _Url de Usuario_
-   npm set init.license _Licencia_

**Cuenta de Npmjs.com**

-   npm adduser _usuario y password_

**Flags**

**_Alias_**

-   -i, add, install _Instalacion_
-   -g, --global _Instalacion global_

**_Adicionales_** _(modificadores para package.json)_

-   -S, -s, --save _opcion por defecto, registrado en dependecies_
-   -E, -e, --save-exact _registra la version exacta_
-   -B, -b, --save-bundle _en paquete, se registra en bundleDependecies_
-   -D, -d, --save-dev _en desarrollo, registrado en devDependecies_
-   -P, -p, --save-prod _produccion, registrado en dependecies_
-   -O, -o, --save-optional _opcional, registrado en optionalDependecies_
-   --no-save _no guarda registro alguno_

**_Instalacion_**

-   npm install [dir] _Instalacion desde directorio local o archivo comprimido_
-   npm install [url] _Instalacion desde un repositorio remoto_
-   npm install [paquete] _Instala paquete con latest por defecto_
-   npm install [paquete]@[version] _Instala paquete con su propia version_
-   npm install [@dev][paquete]@[version] _Instala desde el registro del desarrollador del paquete_
-   npm uninstall [paquete] _Desinstala el paquete_
-   @latest _Ultima actualizacion del paquete_

**GIT**

**_Configuracion Global de Git_**

-   git config --global user.name _@Nombre de usuario_
-   git config --global user.email _Email de usuario_
-   git config --global core.editor _Editor de git_
-   git config --list _Visualizamos la configuracion de git_

<!-- Acciones -->

<!-- Command -->

### Commands GLOBAL

```
NPM
npm install -g npm@latest
npm set init.author.name "@T3am."
npm set init.author.email "EngineLandTeam@gmail.com"
npm set init.author.url "https://EngineLand.dev"
npm set init.license "MIT"
npm adduser

GIT
git config --global user.name "@T3am."
git config --global user.email "EngineLandTeam@gmail.com"
git config --global core.editor "code --wait"
```

<!-- Command -->

---

## WEBPACK

<!-- Dependecias -->

### Dependencias

**_Core_**

-   @babel/core _nucleo de babel_
-   webpack _nucleo de webpack_
-   bootstrap _nucleo de bootstrap_
-   tailwindcss _nucleo de tailwindcss_
-   node-sass _nucleo y compilador de sass_
-   svelte _nucleo de svelte_

**_Loader_**

-   svelte-loader _reconoce e interpreta extenciones de svelte_
-   babel-loader _reconoce e interpreta codigo generado en babel_
-   eslint-loader _reconoce e verifica que nuestra sintaxis este correcta_
-   html-loader _reconoce e interpreta codigo html_
-   json-loader _reconoce e interpreta codigo json_
-   css-loader _reconoce e interpreta codigo css_
-   sass-loader _reconoce e interpreta codigo sass a css_
-   style-loader _inserta estilos en nuestro MAIN declarado_
-   @fortawesome/fontawesome-free _font awesome_
-   file-loader _reconoce e interpreta archivos de imagenes, fuentes, etc_
-   image-webpack-loader \_\_

**_Plugin_**

-   @babel/preset-env \_\_

-   webpack-cli _interfaz de linea de comandos de WebPack_
-   webpack-dev-server _servidor de desarrollo on live de WebPack_

-   html-webpack-plugin _copia archivos html de src a dist_

**_Xtras_**

-   mini-css-extract-plugin _inserta vinculo de css en el html_
-   optimize-css-assets-webpack-plugin _optimiza el tamaño de los archivos css_
-   copy-webpack-plugin _copia archivos entre carpetas_
-   babel-minify-webpack-plugin _minifica los archivos generados por babel_
-   clean-webpack-plugin _limpia codigo no utilizado en dist/_

<!-- Acciones -->

<!-- Command -->

### Commands

<!-- Command -->

---

## COMPOSER

<!-- Dependecias -->

### Dependencias

**WEBPACK**

**_Core_**

-   laravel/ui _User Inteface_

-   doctrine/dbal _Mejoras en Migraciones_
-   barryvdh/laravel-debugbar --dev _Debugger_
-   caouecs/laravel-lang _Pack de Idiomas_

-   laravelcollective/html _Mejora implementacion de Forms y Html_

**_Auth_**

-   php artisan ui bootstrap _Scaffolding basado en Bootstrap_
-   php artisan ui vue _Scaffolding basado en Vue_
-   php artisan ui react _Scaffolding basado en React_

-   php artisan ui bootstrap --auth _Scaffolding & Inteface visual basada en Bootstrap_
-   php artisan ui vue --auth _Scaffolding & Inteface visual basada en Vue_
-   php artisan ui react --auth _Scaffolding & Inteface visual basada en React_

**_Xtras_**

-   composer require spatie/laravel-permission _Autenticacion, roles y permisos_
-   composer require intervention/image _Opcion de imagen avanzadas_
-   composer require jenssegers/date _Fechas en español_
-   composer require maatwebsite/excel _Excel y otros formatos._
-   composer require barryvdh/laravel-dompdf _Pdf_
-   composer require yajra/laravel-datatables-oracle _Datatables_

**_Providers & Aliases_**

/_ Providers _/
/_ Al3xRoqe _/
Spatie\Permission\PermissionServiceProvider::class,
Intervention\Image\ImageServiceProvider::class,
Jenssegers\Date\DateServiceProvider::class,
Maatwebsite\Excel\ExcelServiceProvider::class,
Barryvdh\DomPDF\ServiceProvider::class,
Yajra\DataTables\DataTablesServiceProvider::class,
/_ Al3xRoqe _/

/_ Aliases _/
/_ Al3xRoqe _/
'Image' => Intervention\Image\Facades\Image::class,
'Date' => Jenssegers\Date\Date::class,
'Excel' => Maatwebsite\Excel\Facades\Excel::class,
'PDF' => Barryvdh\DomPDF\Facade::class,
'DataTables' => Yajra\DataTables\Facades\DataTables::class,
/_ Al3xRoqe _/

**_Vendor_**

-   php artisan vendor:publish --provider="Barryvdh\Debugbar\ServiceProvider" _Config de Debugbar_
-   php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider" --tag="migrations" _Migrations de Permission_
-   php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider" --tag="config" _Config de Permission_

-   php artisan vendor:publish --provider="Intervention\Image\ImageServiceProviderLaravel5" _Config de Image_
-   php artisan vendor:publish --provider="Maatwebsite\Excel\ExcelServiceProvider" _Config de Excel_
-   php artisan vendor:publish --provider="Yajra\DataTables\DataTablesServiceProvider" _Config de Datatable_

<!-- Acciones -->

<!-- Command -->

### Commands

```
composer require laravel/ui

composer require doctrine/dbal
composer require barryvdh/laravel-debugbar --dev
composer require caouecs/laravel-lang

composer require laravelcollective/html

composer require spatie/laravel-permission
composer require intervention/image
composer require jenssegers/date
composer require maatwebsite/excel
composer require barryvdh/laravel-dompdf
composer require yajra/laravel-datatables-oracle

**_Auth_**

php artisan ui bootstrap
php artisan ui vue
php artisan ui react

php artisan ui bootstrap --auth
php artisan ui vue --auth
php artisan ui react --auth

**_Vendor_**

php artisan vendor:publish --provider="Barryvdh\Debugbar\ServiceProvider"
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider" --tag="migrations"
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider" --tag="config"
php artisan vendor:publish --provider="Intervention\Image\ImageServiceProviderLaravel5"
php artisan vendor:publish --provider="Maatwebsite\Excel\ExcelServiceProvider"
php artisan vendor:publish --provider="Yajra\DataTables\DataTablesServiceProvider"
```

<!-- Command -->

---

<p align="center">
	<img src="T-21.png" width="70%"/>
</p>
