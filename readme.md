# Ownable
```
composer require dillingham/ownable
```
- add `Ownable` to model(s)
- automatically applies auth user id to models
- automatically prevents update / delete unless owner

if you want to add a policy for a model

class UserPolicy extends OwnerPolicy
{
    public view($user, $model)
    {
        //
    }
}