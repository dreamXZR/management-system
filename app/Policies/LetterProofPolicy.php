<?php

namespace App\Policies;

use App\Models\User;
use App\Models\LetterProof;

class LetterProofPolicy extends Policy
{
    public function update(User $user, LetterProof $letter_proof)
    {
        // return $letter_proof->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, LetterProof $letter_proof)
    {
        return true;
    }
}
