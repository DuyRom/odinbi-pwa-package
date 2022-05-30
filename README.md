# Description
Installable PWA for laravel. Implement PWA in your laravel website within 5 mins.

| Lravel PWA version      | Laravel version   |
| ---                     | ---               |
| 1.0                     | ^5.6, ^6.0, ^7.0  |
| 1.1                     | ^8.0              |

## Requirements
It only suppoorts HTTPS and localhost (both HTTP and HTTPS)

## Download
```
composer require odinbi/pwa
```


## Use: Add below code before closing head tag

```
{{ pwa_meta() }}
```

OR

```
@PWA
```
