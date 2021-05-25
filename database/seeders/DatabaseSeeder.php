<?php

namespace Database\Seeders;

use  App\Models\User;
use  App\Models\Apellido;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $user = User::create([
            'name' =>'Jhonatan',
            'lastname' =>'Vila',
            'email' => 'jhonatan@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('12345'),
        ]);


        $user2 = User::create([
            'name' =>'Renzo',
            'lastname' =>'Crisostomo',
            'email' => 'renzo@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('12345'),
        ]);

        $user3 = User::create([
            'name' =>'Sulca',
            'lastname' =>'Medina',
            'email' => 'sulca@gmail.com',
            'role' => 'cliente',
            'password' => bcrypt('12345'),
        ]);



        User::factory(100)->create();
    }
}
