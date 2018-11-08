<?php

use Illuminate\Database\Seeder;
use App\Models\WorkerProof;

class WorkerProofsTableSeeder extends Seeder
{
    public function run()
    {
        $worker_proofs = factory(WorkerProof::class)->times(50)->make()->each(function ($worker_proof, $index) {
            if ($index == 0) {
                // $worker_proof->field = 'value';
            }
        });

        WorkerProof::insert($worker_proofs->toArray());
    }

}

