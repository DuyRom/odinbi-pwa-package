# Description
Installable Odinbi PWA for laravel. Edit based on codexshaper/laravel-pwa

| Lavel PWA version      | Laravel version   |
| ---                     | ---               |
| 1.0                     | ^5.6, ^6.0, ^7.0  |
| 1.1                     | ^8.0              |

## Requirements
It only suppoorts HTTPS and localhost (both HTTP and HTTPS)

## Download
```
composer require odinbi/pwa
```
## Config  - Add OdinbiPackageServiceProvider to config/app
```

Odinbi\Pwa\OdinbiPackageServiceProvider::class,

```
## Publish config (database, migration, asset, view)
```
php artisan vendor:publish --tag="odb.pwa"

```
## Database migrate
```
php artisan migrate --path=database/migrations/2022_05_26_070051_create_pwa_settings_table.php

```

## Routes
```
Use link: host/pwa/store to create new pwa_setings (Route name: pwa.store)
Ex: https://odinbi.app/pwa/store
Run php artisan to show routes list


```

## Use: Add below code before closing head tag

```
{{ pwa_meta() }}
```

## NOTE: You need to do 'php artisan storage:link' to create storage symbolic link
