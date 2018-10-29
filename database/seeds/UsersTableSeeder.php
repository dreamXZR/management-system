<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$users = factory(User::class)->times(20)->make();
        User::insert($users->makeVisible(['password', 'remember_token'])->toArray());

        $user=User::find(1);
        $user->name = 'admin';
        $user->email = '2873917821@qq.com';
        $user->password = bcrypt('axsz1452');
        $user->save();
    }
}
