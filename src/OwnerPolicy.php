<?php

namespace Dillingham\Ownable;

use Illuminate\Auth\Access\HandlesAuthorization;

class OwnerPolicy
{
    use HandlesAuthorization;

    public function update(User $user, $model)
    {
        return $user->id === $model->user_id;
    }

    public function delete(User $user, $model)
    {
        return $user->id === $model->user_id;
    }
}
