<?php

use CodeProject\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'Diego Jose Goulart',
            'email' => 'diego@djgoulart.com.br',
            'password' => bcrypt(123456),
            'remember_token' => str_random(10),
        ]);
        factory(User::class, 10)->create();
    }
}
