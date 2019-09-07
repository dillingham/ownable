# Ownable
[![Latest Version on Github](https://img.shields.io/github/release/dillingham/ownable.svg?style=flat-square)](https://packagist.org/packages/dillingham/ownable)
[![Total Downloads](https://img.shields.io/packagist/dt/dillingham/ownable.svg?style=flat-square)](https://packagist.org/packages/dillingham/ownable) [![Twitter Follow](https://img.shields.io/twitter/follow/dillinghammm?color=%231da1f1&label=Twitter&logo=%231da1f1&logoColor=%231da1f1&style=flat-square)](https://twitter.com/dillinghammm)

### Install

```
composer require dillingham/ownable
```
- add `Ownable` trait to model(s)
- add `owned()` to limit models to auth user

### What it does:

- automatically applies auth user id when creating models
- automatically prevents update / delete unless owner
- provides an `owned()` scope to apply to queries

### Policy

Adding a policy to the model will remove update / delete gates.

Extend OwnerPolicy if you want or manually add those in your policy.

```php
class UserPolicy extends OwnerPolicy
{
    public view($user, $model)
    {
        //
    }
}
```