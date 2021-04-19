<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicies
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

    /**
     * 相同的id代表的相同用户 不相同抛出异常403拒绝访问
     * @param User $currentUser 当前登录的用户实例
     * @param User $user 需要进行授权的实例
     * @return bool
     */
    public function update(User $currentUser,User $user){
        return $currentUser->id === $user->id;
    }
}
