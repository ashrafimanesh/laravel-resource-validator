# LaravelCrud
Handle Laravel post, put requests with validate dynamic rules

Requirements
------------
php:>=5.5.9

Quick Installation
------------------
Begin by installing the package through Composer.

```
composer require ashrafi/laravel-crud
```

Add service provider to config/app.php providers list

```php
Ashrafi\CrudActions\ServiceProvider::class,
```

call domain.com/CrudActions/create route for test
