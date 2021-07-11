<?php

namespace GhoniJee\ModelTracker\Traits;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

trait ModelTracker
{
    public static function boot()
    {
        parent::boot();

        $user = auth()->user() ?? ['id' => NULL, 'username' => NULL];

        static::creating(function (Model $item) use ($user) {
            $item->created_by_user_id = $user->id ?? NULL;
            $item->created_by_user_username = $user->username ?? NULL;
            $item->updated_by_user_id = $user->id ?? NULL;
            $item->updated_by_user_username = $user->username ?? NULL;
        });

        static::created(function (Model $item) use ($user) {
            $item->created_by_user_id = $user->id ?? NULL;
            $item->created_by_user_username = $user->username ?? NULL;
            $item->updated_by_user_id = $user->id ?? NULL;
            $item->updated_by_user_username = $user->username ?? NULL;
        });

        static::updating(function (Model $item) use ($user) {
            $item->updated_by_user_id = $user->id ?? NULL;
            $item->updated_by_user_username = $user->username ?? NULL;
        });

        static::deleted(function (Model $item) use ($user) {
            $item->deleted_by_user_id = $user->id ?? NULL;
            $item->deleted_by_user_username = $user->username ?? NULL;
            $item->save();
        });

        static::deleting(function (Model $item) use ($user) {
            $item->deleted_by_user_id = $user->id ?? NULL;
            $item->deleted_by_user_username = $user->username ?? NULL;
            $item->save();
        });
    }
}
