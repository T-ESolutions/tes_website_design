<?php

namespace App\Policies;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SettingPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

//viewAny
//view
//create
//update
//delete
//restore
//forceDelete

    public function update(User $user, Setting $setting)
    {
        return true;
    }

    public function view(User $user)
    {

        return true;
    }

    public function create(User $user)
    {

        return true;
    }

    public static function searchable()
    {
        return false;
    }
}
