<?php

namespace App\Observers;

use App\Models\LetterProof;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class LetterProofObserver
{
    public function deleting(LetterProof $letter_proof)
    {
        if($letter_proof->images){
			foreach (json_decode($letter_proof->images) as $k => $v) {
				del($v);
			}
			
		}
    }

    
}