<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=> Hash::make('admin123'),
           ];
    
           User::insert($users);
    }
}
