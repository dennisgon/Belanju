<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewCollumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('produks', function (Blueprint $table) {
            //
            $table->string('hargaSatuan');
            $table->string('namaPakaian');
            $table->integer('kategoriId')->references('id')->on('categories')->onDelete('cascade');
            $table->string('deskripsiPakaian');
            $table->string('deskripsiSingkat');
            $table->string('warna');
            $table->string('panjang');
            $table->string('lebar');
            $table->string('jenisKelamin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produks', function (Blueprint $table) {
            //
        });
    }
}
