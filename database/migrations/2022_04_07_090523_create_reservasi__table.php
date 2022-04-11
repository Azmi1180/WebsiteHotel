<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservasi', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->bigIncrements('id');
            // $table->unsignedBigInteger('id_kamar');
            $table->foreignId('id_kamar')
            ->references('id')
            ->on('kamar')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->integer('jumlah_kamar');
            $table->integer('jumlah_orang');
            $table->string('email');
            $table->bigInteger('no_telp');
            $table->bigInteger('nik');
            $table->string('nama', 255);
            $table->string('alamat', 255);
            $table->date('tgl_check_in');
            $table->date('tgl_check_out');
            $table->integer('total_harga');
            $table->enum('status', ['proses', 'menginap', 'selesai', 'tolak', 'diterima']);
            $table->text('catatan');
            // $table->timestamps();
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
        Schema::dropIfExists('reservasi');
    }
}
