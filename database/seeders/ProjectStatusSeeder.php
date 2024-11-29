<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('project_status')->insert([
            ['pjs_name' => 'เสนอหัวข้อ'],
            ['pjs_name' => 'อาจารย์ที่ปรึกษารับรองหัวข้อ'],
            ['pjs_name' => 'หัวข้อผ่านการพิจารณา'],
            ['pjs_name' => 'หัวข้อไม่ผ่านการพิจารณา'],
            ['pjs_name' => 'ขึ้่นสอบโครงงาน'],
            ['pjs_name' => 'โครงงานผ่านการพิจารณา'],
            ['pjs_name' => 'โครงงานไม่ผ่านการพิจารณา'],
        ]);
    }
}
