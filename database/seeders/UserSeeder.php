<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([ 
            'name'=> 'Juanito Alcachofa',
            'email'=> 'Jua@gmail.com',
            'password'=> bcrypt('12345678')

        ])->assignRole('Super admin');
        User::factory(30)->create();
    }
}
