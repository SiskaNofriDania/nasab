<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->uuid('uuid')->primary();
            $table->foreignUuid('uuid_ayah')->nullable();
            $table->foreignUuid('uuid_ibu')->nullable();
            $table->string('nama');
            $table->boolean('jenis_kelamin');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('telepon');
            $table->string('pekerjaan');
            $table->string('foto_profil');
            $table->integer('tahun_wafat');
            $table->integer('tahun_lahir');
            $table->date('tanggal_wafat');
            $table->date('tanggal_lahir');
            $table->date('tanggal_pernikahan');
            $table->text('alamat');
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
        Schema::dropIfExists('people');
    }
};
