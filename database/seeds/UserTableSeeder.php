<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'merchantcode' => 'Bashir324965',
            'email' => 'admin@gmail.com',
            'password' => '123456',
            'type' => 'admin',

        ]);
    }
}
