<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('title')->insert([
            ['ttl_name' => 'อาจารย์'],
            ['ttl_name' => 'ผู้ช่วยศาสตราจารย์'],
            ['ttl_name' => 'รองศาสตราจารย์'],
            ['ttl_name' => 'ศาสตราจารย์'],
            ['ttl_name' => 'นาย'],
            ['ttl_name' => 'นาง'],
            ['ttl_name' => 'นางสาว'],
        ]);
    }
}
