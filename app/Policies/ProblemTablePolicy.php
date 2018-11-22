<?php

namespace App\Policies;

use App\Models\User;
use App\Models\ProblemTable;

class ProblemTablePolicy extends Policy
{
    public function update(User $user, ProblemTable $problem_table)
    {
        // return $problem_table->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, ProblemTable $problem_table)
    {
        return true;
    }
}
