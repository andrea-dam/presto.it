<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Abbigliamento & Accessori',
            'Arredamento',
            'Elettronica',
            'Film',
            'Fitness',
            'Giardinaggio',
            'Giochi',
            'Libri',
            'Motori',
            'Musica',
        ];

        foreach($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category
            ]);
        }
    }
}
