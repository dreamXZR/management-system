<?php

use Illuminate\Database\Seeder;
use App\Models\ProblemTable;

class ProblemTablesTableSeeder extends Seeder
{
    public function run()
    {
        $problem_tables = factory(ProblemTable::class)->times(50)->make()->each(function ($problem_table, $index) {
            if ($index == 0) {
                // $problem_table->field = 'value';
            }
        });

        ProblemTable::insert($problem_tables->toArray());
    }

}

