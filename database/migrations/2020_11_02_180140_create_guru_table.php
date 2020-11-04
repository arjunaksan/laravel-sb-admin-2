<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuruTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guru', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap', 50);
            $table->string('kontak_wa', 50);
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->string('pendidikan_terakhir');
            $table->string('email')->unique();
            $table->string('jumlah_khatam');
            $table->string('hafalan');
            $table->longText('pengalaman')->nullable();
            $table->string('metode');
            $table->string('pekerjaan')->nullable();
            $table->string('jumlah_murid');
            $table->string('nomor_rekening');
            $table->string('kafalah');
            $table->binary('foto')->nullable();
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
        Schema::dropIfExists('guru');
    }
}
