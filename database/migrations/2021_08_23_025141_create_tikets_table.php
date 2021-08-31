<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTiketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiket', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_tiket');
            $table->integer('user_id');
            $table->string('cif')->nullable();
            $table->date('tanggal_transaksi');
            $table->string('kode_transaksi');
            $table->string('jenis_transaksi');
            $table->text('keterangan');
            $table->integer('status');
            $table->string('status_user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tikets');
    }
}
