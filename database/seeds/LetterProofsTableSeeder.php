<?php

use Illuminate\Database\Seeder;
use App\Models\LetterProof;

class LetterProofsTableSeeder extends Seeder
{
    public function run()
    {
        $letter_proofs = factory(LetterProof::class)->times(100)->make()->each(function ($letter_proof, $index) {
            if ($index == 0) {
                // $letter_proof->field = 'value';
            }
        });

        LetterProof::insert($letter_proofs->toArray());
    }

}

