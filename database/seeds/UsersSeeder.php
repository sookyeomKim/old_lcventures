<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'admin',
            'email' => 'ikks06luck@naver.com',
            'password' => bcrypt('admin'),
            'role_id' => 1
        ]);
    }
}
