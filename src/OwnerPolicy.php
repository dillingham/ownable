<?php

namespace Dillingham\Ownable;

use Illuminate\Auth\Access\HandlesAuthorization;

class OwnerPolicy
{
    use HandlesAuthorization;

    public function update($user, $model)
    {
        return $user->id === $model->user_id;
    }

    public function delete($user, $model)
    {
        return $user->id === $model->user_id;
    }
}
