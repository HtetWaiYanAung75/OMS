<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        \App\Models\User::factory()->create([
            'fname'=>'a',
            'lname'=>'a',
            'username'=>'aa',
            'employeeid'=>'1',
            'email'=>'a@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'role'=>'Admin',
            'remember_token' => Str::random(10),


        ]);
        \App\Models\User::factory()->create([
            'fname'=>'b',
            'lname'=>'b',
            'username'=>'bb',
            'employeeid'=>'2',
            'email'=>'b@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'role'=>'User',
            'remember_token' => Str::random(10),


        ]);
    }
}
