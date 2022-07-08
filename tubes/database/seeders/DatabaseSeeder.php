<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Collection;
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
        $this -> call([
            UsersSeeder::class,
            DataPenumpangSeeder::class,
            PemesananSeeder::class,
            PenerbanganSeeder::class,
            TiketSeeder::class,
            PerhotelanSeeder::class,
            PembayaranSeeder::class,
        ]);
    }
}
