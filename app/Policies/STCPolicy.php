<?php

namespace NCLP\Policies;

use NCLP\User;
use NCLP\Models\STC;
use Illuminate\Auth\Access\HandlesAuthorization;

class STCPolicy
{
	use HandlesAuthorization;


	public function index(User $user){
		return $user->hasPermissionTo('stc_index');
	}

	/**
	 * Determine whether the user can view the sTC.
	 *
	 * @param  \NCLP\User $user
	 * @param  \NCLP\Models\STC $sTC
	 * @return mixed
	 */
	public function view(User $user, STC $sTC)
	{
		if ($user->hasPermissionTo('stc_view')) {
			return $user->isOwner($sTC);
		}
		return $user->hasPermissionTo('stc_admin');
	}

	/**
	 * Determine whether the user can create sTCs.
	 *
	 * @param  \NCLP\User $user
	 * @return mixed
	 */
	public function create(User $user)
	{
		return $user->hasPermissionTo('stc_create') || $user->hasPermissionTo('stc_admin');
	}

	/**
	 * Determine whether the user can update the sTC.
	 *
	 * @param  \NCLP\User $user
	 * @param  \NCLP\Models\STC $sTC
	 * @return mixed
	 */
	public function update(User $user, STC $sTC)
	{
		if ($user->hasPermissionTo('stc_edit')) {
			return $user->isOwner($sTC);
		}
		return $user->hasPermissionTo('stc_admin');
	}

	/**
	 * Determine whether the user can delete the sTC.
	 *
	 * @param  \NCLP\User $user
	 * @param  \NCLP\Models\STC $sTC
	 * @return mixed
	 */
	public function delete(User $user, STC $sTC)
	{
		if ($user->hasPermissionTo('stc_delete')) {
			return $user->isOwner($sTC);
		}
		return $user->hasPermissionTo('stc_admin');
	}
}
