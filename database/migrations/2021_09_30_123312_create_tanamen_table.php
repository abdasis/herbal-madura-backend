<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTanamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanamen', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tanaman');
            $table->string('slug')->nullable();
            $table->string('nama_latin')->nullable();
            $table->longText('diskripsi_tanaman');
            $table->string('gambar_tanaman');
            $table->string('jenis_spesies')->nullable();
            $table->longText('refrensi')->nullable();
            $table->longText('pustaka')->nullable();
            $table->string('status');
            $table->unsignedBigInteger('dibuat_oleh');
            $table->unsignedBigInteger('diupdate_oleh');
            $table->unsignedBigInteger('diverifikasi_oleh')->nullable();
            $table->string('tanggal_verifikasi')->nullable();
            $table->softDeletes();
            $table->timestamps();

            /*membuat foreign key*/

            $table->foreign('dibuat_oleh')->references('id')->on('users');
            $table->foreign('diupdate_oleh')->references('id')->on('users');
            $table->foreign('diverifikasi_oleh')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tanamen');
    }
}
