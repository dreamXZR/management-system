<?php

use Illuminate\Database\Seeder;
use App\Models\DrathProof;

class DrathProofsTableSeeder extends Seeder
{
    public function run()
    {
        $drath_proofs = factory(DrathProof::class)->times(50)->make()->each(function ($drath_proof, $index) {
            if ($index == 0) {
                // $drath_proof->field = 'value';
            }
        });

        DrathProof::insert($drath_proofs->toArray());
    }

}

