<?php

namespace App\Class;

use Illuminate\Database\Schema\Blueprint;

class MakeFieldTracker
{
    public function makeFieldTracker()
    {
        Blueprint::macro('modelTracker', function () {
            $this->bigInteger('created_by_user_id')->nullable();
            $this->string('created_by_user_username')->nullable();
            $this->bigInteger('updated_by_user_id')->nullable();
            $this->string('updated_by_user_username')->nullable();
            $this->bigInteger('deleted_by_user_id')->nullable();
            $this->string('deleted_by_user_username')->nullable();
        });
    }
}
