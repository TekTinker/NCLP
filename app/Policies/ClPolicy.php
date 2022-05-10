<?php

namespace NCLP\Policies;

use NCLP\User;
use NCLP\Cl;
use Illuminate\Auth\Access\HandlesAuthorization;

class ClPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the cl.
     *
     * @param  \NCLP\User  $user
     * @param  \NCLP\Cl  $cl
     * @return mixed
     */
    public function view(User $user, Cl $cl)
    {
        //
    }

    /**
     * Determine whether the user can create cls.
     *
     * @param  \NCLP\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the cl.
     *
     * @param  \NCLP\User  $user
     * @param  \NCLP\Cl  $cl
     * @return mixed
     */
    public function update(User $user, Cl $cl)
    {
        //
    }

    /**
     * Determine whether the user can delete the cl.
     *
     * @param  \NCLP\User  $user
     * @param  \NCLP\Cl  $cl
     * @return mixed
     */
    public function delete(User $user, Cl $cl)
    {
        //
    }
}
