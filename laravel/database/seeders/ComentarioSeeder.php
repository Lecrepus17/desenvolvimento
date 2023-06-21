<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ComentarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comentarios')->insert([
            [
                'texto' => 'testo1',
                'imagem' => 'imagem1',
                'like' => 5,
                'user_fk' => 1,
                'post_fk' => 2,
            ],
            [
                'texto' => 'testo3',
                'imagem' => 'imagem2',
                'like' => 2,
                'user_fk' => 2,
                'post_fk' => 2,
            ],
            [
                'texto' => 'testo3',
                'imagem' => 'imagem3',
                'like' => 1,
                'user_fk' => 3,
                'post_fk' => 2,
            ],
    ]);
    }
}
