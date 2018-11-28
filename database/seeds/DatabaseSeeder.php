<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UsersTableSeeder::class);
		//$this->call(ProblemTablesTableSeeder::class);
		$this->call(WorkerProofsTableSeeder::class);
		$this->call(LetterProofsTableSeeder::class);
		$this->call(DrathProofsTableSeeder::class);
        $this->call(InformationsTableSeeder::class);
        Model::reguard();
    }
}
