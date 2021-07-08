<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'tes@tes.com')->first();

        if(!$user) {
            User::create([
                'name' => 'radikz',
                'email' => 'tes@tes.com',
                'role' => 'admin',
                'password' => Hash::make('123123123'),
            ]);
        }
    }
}
