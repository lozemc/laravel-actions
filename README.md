# Laravel Action Command

## Installation

To get started with Laravel Action Command, simply require the package
via [Composer](https://packagist.org/packages/lozemc/laravel-actions):

```bash
composer require lozemc/laravel-actions
```
<br><br>
### Installation for Laravel 10.x

Next, add the following line to the $commands array in your `/app/Console/Kernel.php` file:

```php
protected $commands = [
    
    // ...

    \App\Console\Commands\ActionMakeCommand::class,
];
```

If the protected $commands array does not exist, you will need to add it.
<br><br><br>
### Installation for Laravel 11.x

Then add the following line to the returned array in `/bootstrap/providers.php`:
```php
return [

    // ...

    \Lozemc\Actions\Providers\MakeActionProvider::class,
];
```
<br>

## Usage

Once installed and configured, you can use the artisan command to create a new action:

```bash
php artisan make:action UpdatePostAction
```

This will generate a new action class named `UpdatePostAction` in the `App\Actions` namespace. You can then implement
your business logic within this action class.

### Other
- [Laravel Service Command](https://github.com/lozemc/laravel-services)
