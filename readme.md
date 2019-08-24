# Ownable
[![Latest Version on Github](https://img.shields.io/github/release/dillingham/ownable.svg?style=flat-square)](https://packagist.org/packages/dillingham/ownable)
[![Total Downloads](https://img.shields.io/packagist/dt/dillingham/ownable.svg?style=flat-square)](https://packagist.org/packages/dillingham/ownable) [![Twitter Follow](https://img.shields.io/twitter/follow/dillinghammm?color=%231da1f1&label=Twitter&logo=%231da1f1&logoColor=%231da1f1&style=flat-square)](https://twitter.com/dillinghammm)

```
composer require dillingham/ownable
```
automatically applies auth user id to models

automatically prevents update / delete unless owner

- add `Ownable` trait to model(s)

extend OwnerPolicy if you want:

```php
class UserPolicy extends OwnerPolicy
{
    public view($user, $model)
    {
        //
    }
}
```