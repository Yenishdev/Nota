<?php

namespace Database\Seeders;

use App\Models\Singer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SingerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objs = [
            [
                'name' => 'Enrique',
                'image' => '1 (1).jpg',
                'favorites' => 7
            ],
            [
                'name' => 'Batyr Muhammedow',
                'image' => '1 (2).jpg',
                'favorites' => 60,
            ],
            [
                'name' => 'Azat Donmezow',
                'image' => '1 (3).jpg',
                'favorites' => 40,
            ],
            [
                'name' => 'Selena Gomez',
                'image' => '1 (4).jpg',
                'favorites' => 60,
            ],

        ];

        foreach ($objs as $obj) {
            Singer::create([
                'name' => $obj['name'],
                'image' => $obj['image'],
                'favorites' => $obj['favorites'],
            ]);
        }
    }

}
