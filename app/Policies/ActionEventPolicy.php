<?php

namespace App\Policies;

use Laravel\Nova\Actions\ActionEvent;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ActionEventPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->name === 'admin';
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\ActionEvent  $actionEvent
     * @return mixed
     */
    public function view(User $user, ActionEvent $actionEvent)
    {
        return $user->name === 'admin';
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\ActionEvent  $actionEvent
     * @return mixed
     */
    public function update(User $user, ActionEvent $actionEvent)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\ActionEvent  $actionEvent
     * @return mixed
     */
    public function delete(User $user, ActionEvent $actionEvent)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\ActionEvent  $actionEvent
     * @return mixed
     */
    public function restore(User $user, ActionEvent $actionEvent)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\ActionEvent  $actionEvent
     * @return mixed
     */
    public function forceDelete(User $user, ActionEvent $actionEvent)
    {
        //
    }
}
