<?php

namespace App\Policies;

use App\Models\User;
use App\Models\RegisterTable;

class RegisterTablePolicy extends Policy
{
    public function update(User $user, RegisterTable $register_table)
    {
        // return $register_table->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, RegisterTable $register_table)
    {
        return true;
    }
}
