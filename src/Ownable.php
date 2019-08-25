<?php

namespace Dillingham\Ownable;

use Dillingham\Ownable\OwnerPolicy;
use Illuminate\Support\Facades\Gate;

trait Ownable
{
    public static function bootOwnable()
    {
        self::creating(function ($model) {
            if (is_null($model->user_id)) {
                $model->user_id = optional(auth()->user())->id;
                // session('active_account_id')
            }
        });

        self::updating(function ($model) {
            abort_if($model->user_id != auth()->id(), 403, 'Unauthorized');
        });

        self::deleting(function ($model) {
            abort_if($model->user_id != auth()->id(), 403, 'Unauthorized');
        });
    }

    public function user()
    {
        return $this->belongsTo(config('auth.providers.users.model'));
    }
}
