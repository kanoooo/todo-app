<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = ["dummy","test","1111"];

        foreach ($users as $user) {
            DB::table('users')->insert([
                'name' => $user,
                'email' => "$user"."@email.com",
                'password' => bcrypt('test1234'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

        }
    }
}