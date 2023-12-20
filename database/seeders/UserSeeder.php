<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illmuniate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => "syahrul ramadhan sardhi",
            'email'=>'syahrul@admin.com',
            'password'=> Hash::make('12345678'),
            //'level => 'admin',
        ]);
        
    }
}
