<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'texto' => 'testo1',
                'imagem' => 'imagem1',
                'like' => 20,
                'user_fk' => 1,
            ],
            [
                'texto' => 'testo3',
                'imagem' => 'imagem2',
                'like' => 15,
                'user_fk' => 3,
            ],
            [
                'texto' => 'testo3',
                'imagem' => 'imagem3',
                'like' => 10,
                'user_fk' => 2,
            ],
    ]);
    }
}
