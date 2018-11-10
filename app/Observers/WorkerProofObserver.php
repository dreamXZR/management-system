<?php

namespace App\Observers;

use App\Models\WorkerProof;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class WorkerProofObserver
{
    public function deleting(WorkerProof $worker_proof)
    {
        if($worker_proof->images){
			foreach (json_decode($worker_proof->images) as $k => $v) {
				del($v);
			}
			
		}
    }

    
}