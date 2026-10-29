<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Equipment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
   public function run(): void
{
    $this->call(EventsSeeder::class);
    $srv = Category :: create([
        'name' => 'Server & Cloud',
        'code' => 'SRV'
    ]);
    $drn = Category :: create([
        'name' => 'Multimedia & Drone',
        'code' => 'DRN'
    ]);
    //minimal 6 data perangkat laboratorium dengan status dan kondisi bervariasi
    Equipment :: create([
        'category_id' => $srv->id,
        'asset_code' => 'AI-SRV-007',
        'name' => 'Asus 145678 Server',
        'spesification' => 'AMD Ryzen 7, 16GB , 1TB HDD',
        'condition' => 'baik',
        'status' => 'dipinjam',
        'daily_rental_fee' => 23000
        'image_path' => null
    ]);

    Equipment :: create([
        'category_id' => $iot->id,
        'asset_code' => 'AI-IOT-015',
        'name' => 'raspberry 145678 model A',
        'spesification' => 'quad-core',
        'condition' => 'baik',
        'status' => 'tersedia',
        'daily_rental_fee' => 31000
        'image_path' => null
    ]);

    Equipment :: create([
        'category_id' => $drn->id,
        'asset_code' => 'AI-DRN-005',
        'name' => 'FPV Racing Drone',
        'spesification' => 'brushless motor',
        'condition' => 'baik',
        'status' => 'tersedia',
        'daily_rental_fee' => 41000
        'image_path' => null
    ]);

    Equipment :: create([
        'category_id' => $srv->id,
        'asset_code' => 'AI-SRV-013',
        'name' => 'Asus 145678 Server',
        'spesification' => 'AMD Ryzen 7, 16GB , 1TB HDD',
        'condition' => 'baik',
        'status' => 'dipinjam',
        'daily_rental_fee' => 27000
        'image_path' => null
    ]);

    Equipment :: create([
        'category_id' => $iot->id,
        'asset_code' => 'AI-IOT-019',
        'name' => 'raspberry 145678 model A',
        'spesification' => 'quad-core',
        'condition' => 'baik',
        'status' => 'tersedia',
        'daily_rental_fee' => 51000
        'image_path' => null
    ]);

    Equipment :: create([
        'category_id' => $drn->id,
        'asset_code' => 'AI-DRN-004',
        'name' => 'FPV Racing Drone',
        'spesification' => 'brushless motor',
        'condition' => 'baik',
        'status' => 'tersedia',
        'daily_rental_fee' => 10000
        'image_path' => null
    ]);
}
}
