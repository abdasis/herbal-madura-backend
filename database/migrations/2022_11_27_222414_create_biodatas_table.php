<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('telepon');
            $table->string('tempat_pendidikan_terakhir')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->text('tempat_bekerja')->nullable();
            $table->string('link_facebook')->nullable();
            $table->string('link_instagram')->nullable();
            $table->string('link_twitter')->nullable();
            $table->string('link_linkedin')->nullable();
            $table->string('link_personal_web')->nullable();
            $table->text('biodata')->nullable();
            $table->enum('jenis_status', ['private', 'public']);
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
        Schema::dropIfExists('biodatas');
    }
}
