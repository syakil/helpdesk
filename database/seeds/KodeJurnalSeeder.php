<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KodeJurnalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kode_jurnal')->insert([
            'kode_jurnal' => 'A1',
        ]);
        DB::table('kode_jurnal')->insert([
            'kode_jurnal' => 'A2',
        ]);
        DB::table('kode_jurnal')->insert([
            'kode_jurnal' => 'A3',
        ]);
        DB::table('kode_jurnal')->insert([
            'kode_jurnal' => 'A4',
        ]);
        DB::table('kode_jurnal')->insert([
            'kode_jurnal' => 'A5',
        ]);
        DB::table('kode_jurnal')->insert([
            'kode_jurnal' => 'B1',
        ]);
        DB::table('kode_jurnal')->insert([
            'kode_jurnal' => 'B2',
        ]);
        DB::table('kode_jurnal')->insert([
            'kode_jurnal' => 'B3',
        ]);
        DB::table('kode_jurnal')->insert([
            'kode_jurnal' => 'B4',
        ]);
        DB::table('kode_jurnal')->insert([
            'kode_jurnal' => 'B5',
        ]);
    }
}
