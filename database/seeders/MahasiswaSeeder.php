<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            'npm'=>"2201170054",
            'nama'=>'syahrul ramadhan sardhi',
            'alamat'=>'padang',
            'no_hp'=>'085271036518',
        ]);
        //
    }
}
