<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataPenumpangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_penumpangs')->insert([
            [
                'nama_penumpang' => 'Joko',
                'penerbangan_id' => 1,
                'perhotelan_id' => null,
                'NIK' => '12345678901234567',
                'usia' => 21,
                'domisili' => 'Pangkalan Bun',
                'no_hp' => '0812345678',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama_penumpang' => 'jono',
                'penerbangan_id' => null,
                'perhotelan_id' => 1,
                'NIK' => '12345678901234567',
                'usia' => 21,
                'domisili' => 'Pangkalan Bun',
                'no_hp' => '0812345678',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        ]);
    }
}
