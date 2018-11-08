<?php

namespace App\Policies;

use App\Models\User;
use App\Models\WorkerProof;

class WorkerProofPolicy extends Policy
{
    public function update(User $user, WorkerProof $worker_proof)
    {
        // return $worker_proof->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, WorkerProof $worker_proof)
    {
        return true;
    }
}
