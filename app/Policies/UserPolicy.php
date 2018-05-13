<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
//    必须为相同用户才能通过授权
    public function update(User $currentUser, User $user)
    {
        return $currentUser->id === $user->id;
    }
}
