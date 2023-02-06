<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objs = [
            'Rock',
            'Pop',
            'Classical',
            'Jazz',
            'Electronic',
            'Hip Hop',
            'Folk music',
            'Opera',
            'Dance music',
            'Disco',
            'Rock & Roll',
        ];
        foreach ($objs as $obj) {
            Genre::create([
                'name' => $obj,
                'slug' => str($obj . '-' . rand(100, 999))->slug(),
            ]);
        }
    }
}
