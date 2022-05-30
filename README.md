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
## Config
```
-- config/octane.php
Odinbi\Pwa\OdinbiPackageServiceProvider::class,

```

## Use: Add below code before closing head tag

```
{{ pwa_meta() }}
```

OR

```
@PWA
```
