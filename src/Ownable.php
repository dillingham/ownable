<?php

namespace Dillingham\Ownable;

use Dillingham\Ownable\OwnerPolicy;
use Illuminate\Support\Facades\Gate;

trait Ownable
{
    public static function bootOwnable()
    {
        if (!Gate::getPolicyFor(self::class)) {
            Gate::policy(self::class, OwnerPolicy::class);
        }

        self::creating(function ($model) {
            if (is_null($model->user_id)) {
                $model->user_id = optional(auth()->user())->id;
                // session('active_account_id')
            }
        });
    }

    public function user()
    {
        return $this->belongsTo(
            config('auth.providers.users.model')
        );
    }
}
