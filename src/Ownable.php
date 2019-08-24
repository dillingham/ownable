<?php

namespace Dillingham\Ownable;

trait Ownable
{
    public static function bootOwnable()
    {
        self::creating(function ($model) {
            if (is_null($model->user_id)) {
                $model->user_id = optional(auth()->user())->id;
            }
        });
    }

    public function user()
    {
        return $this->belongsTo(config('auth.providers.users.model'));
    }
}
