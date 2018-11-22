<?php

namespace App\Policies;

use App\Models\User;
use App\Models\AboveTable;

class AboveTablePolicy extends Policy
{
    public function update(User $user, AboveTable $above_table)
    {
        // return $above_table->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, AboveTable $above_table)
    {
        return true;
    }
}
