<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class PenerbanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('penerbangans')->insert([
            [
                'pemesanan_id' => 1,
                'jumlah_penumpang' => 1,
                'nama_penerbangan' => 'asikjuga air',
                'asal_keberangkatan' => 'malang',
                'tujuan_keberangkatan' => 'pangkalan bun',
                'tanggal_keberangkatan' => Carbon::create('2022', '01', '01'),
                'kelas_penerbangan' => 'eksekutif',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        ]);
    }
}
