<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Bicycle;

class BicycleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bicycle::firstOrCreate([
            'id' => 1,
            'brand' => 'Trek',
            'type' => 'hegyi',
            'frame_size' => 'M',
            'price' => 1000,
        ]);
        
        Bicycle::firstOrCreate([
            'id' => 2,
            'brand' => 'Giant',
            'type' => 'hegyi',
            'frame_size' => 'L',
            'price' => 1500,
        ]);
        
        Bicycle::firstOrCreate([
            'id' => 3,
            'brand' => 'Cannondale',
            'type' => 'hegyi',
            'frame_size' => 'XL',
            'price' => 2000,
        ]);

        Bicycle::firstOrCreate([
            'id' => 4,
            'brand' => 'Specialized',
            'type' => 'hegyi',
            'frame_size' => 'S',
            'price' => 2500,
        ]);

        Bicycle::firstOrCreate([
            'id' => 5,
            'brand' => 'Bianchi',
            'type' => 'hegyi',
            'frame_size' => 'M',
            'price' => 3000,
        ]);

    }
}
