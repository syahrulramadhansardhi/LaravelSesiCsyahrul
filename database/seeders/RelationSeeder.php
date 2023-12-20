<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RelationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('relations')->insert([
            'mahasiswa_npm'=>"syahrul ramadhan sardhi_2201170054",
            'dosen_nidn'=>'Thomson Mary, S.Kom, M.Kom_1017058002',
            'matakuliah_kode'=>'Mobile Computing_TIF17013',
            'status'=>'Y',
        ]);
        //
    }
}
