<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Project;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProjectPolicy
{
    use HandlesAuthorization;

//    public function before($user): bool
//    {
//        if ($user->id !== null){
//            return true;
//        }
//    }

    /**
     * Determine whether the user can view any projects.
     *
     * @param  User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the project.
     *
     * @param  User  $user
     * @param  Project  $project
     * @return mixed
     */
    public function view(User $user, Project $project)
    {
        return true;
    }

    /**
     * Determine whether the user can create projects.
     *
     * @param  User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can update the project.
     *
     * @param  User  $user
     * @param  Project  $project
     * @return mixed
     */
    public function update(User $user, Project $project)
    {
        return false;
    }

    /**
     * Determine whether the user can delete the project.
     *
     * @param  User  $user
     * @param  Project  $project
     * @return mixed
     */
    public function delete(User $user, Project $project)
    {
        return false;
    }

    /**
     * Determine whether the user can restore the project.
     *
     * @param  User  $user
     * @param  Project  $project
     * @return mixed
     */
    public function restore(User $user, Project $project)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the project.
     *
     * @param  User  $user
     * @param  Project  $project
     * @return mixed
     */
    public function forceDelete(User $user, Project $project)
    {
        return false;
    }
}