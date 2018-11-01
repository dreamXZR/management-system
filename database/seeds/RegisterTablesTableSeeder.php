<?php

use Illuminate\Database\Seeder;
use App\Models\RegisterTable;

class RegisterTablesTableSeeder extends Seeder
{
    public function run()
    {
        $register_tables = factory(RegisterTable::class)->times(50)->make()->each(function ($register_table, $index) {
            if ($index == 0) {
                // $register_table->field = 'value';
            }
        });

        RegisterTable::insert($register_tables->toArray());
    }

}

