<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJamusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jamus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_jamu');
            $table->longText('deskripsi')->nullable();
            $table->longText('manfaat')->nullable();
            $table->string('gambar_produk');
            $table->string('dibuat_oleh');
            $table->string('diupdate_oleh');
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
        Schema::dropIfExists('jamus');
    }
}
