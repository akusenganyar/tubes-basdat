<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PerhotelanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perhotelans')->insert([
            [
                'pemesanan_id' => '1',
                'nama_hotel' => 'asikjuga hotel',
                'jenis_kamar' => 'nyaman',
                'jumlah_kamar' => 1,
                'tanggal_check_in' => Carbon::create('2022', '01', '01'),
                'tanggal_check_out' => Carbon::create('2022', '02', '01'),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        ]);
    }
}
