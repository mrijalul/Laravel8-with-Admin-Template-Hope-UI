# Laravel 8 Login Register with Admin Template Hope UI

Live Demo Admin Template Hope UI Only : https://templates.iqonic.design/hope-ui/html/dist/dashboard/

Package :

1. https://packagist.org/packages/laravel/ui
2. https://packagist.org/packages/laravelcollective/html

First Step :

```
git clone git@github.com:mrijalul/Laravel-8-with-Hope-UI.git
```

OR

```
git clone https://github.com/mrijalul/Laravel-8-with-Hope-UI.git
```

run

```
composer install
```

run

```
npm install
```

run

```
npm run prod
```

run

```
php artisan migrate
```

gunakan <i>Route::currentRouteName()</i> untuk mengenali menu active, cukup menggunakan name pada route

```
contoh : class="nav-link {{ (strpos(Route::currentRouteName(), 'dashboard') == 0) ? 'active' : '' }}"
```

dalam project ini menggunakan font awesome v6

```
https://fontawesome.com/v6/search?o=r&m=free
```
