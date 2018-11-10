<?php

namespace App\Observers;

use App\Models\DrathProof;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class DrathProofObserver
{
    public function deleting(DrathProof $drath_proof)
    {
        if($drath_proof->images){
			foreach (json_decode($drath_proof->images) as $k => $v) {
				del($v);
			}
			
		}
    }

    
}