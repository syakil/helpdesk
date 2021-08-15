<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisTransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis_transaksi')->insert([
            'jenis_transaksi' => 'Jurnal Umum',
        ]);

        
        DB::table('jenis_transaksi')->insert([
            'jenis_transaksi' => 'Murabahah',
        ]);

        
        DB::table('jenis_transaksi')->insert([
            'jenis_transaksi' => 'Wakalah',
        ]);

        
        DB::table('jenis_transaksi')->insert([
            'jenis_transaksi' => 'Angsuran',
        ]);

        
        DB::table('jenis_transaksi')->insert([
            'jenis_transaksi' => 'Setoran',
        ]);

        
        DB::table('jenis_transaksi')->insert([
            'jenis_transaksi' => 'Musawamah',
        ]);

        
        DB::table('jenis_transaksi')->insert([
            'jenis_transaksi' => 'Kasir',
        ]);

        
        DB::table('jenis_transaksi')->insert([
            'jenis_transaksi' => 'Kirim Barang',
        ]);

        
        DB::table('jenis_transaksi')->insert([
            'jenis_transaksi' => 'Terima Barang',
        ]);



    }
}
