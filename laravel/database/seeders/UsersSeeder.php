<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'nome1',
                'foto' => 'foto1',
                'email' => 'email8@gmail.com',
                'password' => '123',
            ],
            [
                'name' => 'nome2',
                'foto' => 'foto2',
                'email' => 'email9@gmail.com',
                'password' => '456',
            ],
            [
                'name' => 'nome3',
                'foto' => 'foto3',
                'email' => 'email10@gmail.com',
                'password' => '789',
            ],
        ]);
    }
}
