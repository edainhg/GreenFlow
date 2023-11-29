<?php

namespace App\Policies;

use App\Models\OpcionesUsuario;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class OpcionesUsuarioPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, OpcionesUsuario $opcionesUsuario): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, OpcionesUsuario $opcionesUsuario): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, OpcionesUsuario $opcionesUsuario): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, OpcionesUsuario $opcionesUsuario): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, OpcionesUsuario $opcionesUsuario): bool
    {
        //
    }
}
