<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;


class SupplierPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        return ($user->sebagai == 'owner'
            ? Response::allow()
            : Response::deny('You must be a super administrator.') );
    }
}
