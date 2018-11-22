<?php

use Illuminate\Database\Seeder;
use App\Models\AboveTable;

class AboveTablesTableSeeder extends Seeder
{
    public function run()
    {
        $above_tables = factory(AboveTable::class)->times(50)->make()->each(function ($above_table, $index) {
            if ($index == 0) {
                // $above_table->field = 'value';
            }
        });

        AboveTable::insert($above_tables->toArray());
    }

}

