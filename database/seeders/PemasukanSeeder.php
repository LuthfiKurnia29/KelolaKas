<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PemasukanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pemasukans')->insert([
            'uuid' => Str::uuid(),
            'asal' => 'Pak RT',
            'nominal' => 200000,
            'tanggal_terima' => '2023-06-29',
        ]);
    }
}
