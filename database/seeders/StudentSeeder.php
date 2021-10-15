<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert
        ([
            'nim' => '2031710174',
            'name' => 'Edo Galih Rispianto',
            'class' => 'MI-2E',
            'department' => 'Jurusan Teknologi Informasi',
            'phone_number' => '089655209395',
        ]);
        DB::table('students')->insert
        ([
            'nim' => '2031710001',
            'name' => 'Raviansyah Yudistira Pratama',
            'class' => 'MI-2E',
            'department' => 'Jurusan Teknologi Informasi',
            'phone_number' => '0895396629202',
        ]);
        DB::table('students')->insert
        ([
            'nim' => '2031710154',
            'name' => 'Wendha Aldafa Putra Heranusa',
            'class' => 'MI-2E',
            'department' => 'Jurusan Teknologi Informasi',
            'phone_number' => '081216121053',
        ]);
    }
}