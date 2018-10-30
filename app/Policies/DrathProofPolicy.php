<?php

namespace App\Policies;

use App\Models\User;
use App\Models\DrathProof;

class DrathProofPolicy extends Policy
{
    public function update(User $user, DrathProof $drath_proof)
    {
        // return $drath_proof->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, DrathProof $drath_proof)
    {
        return true;
    }
}
