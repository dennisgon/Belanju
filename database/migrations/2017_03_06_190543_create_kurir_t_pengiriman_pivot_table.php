<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKurirTPengirimanPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kurir_t_pengiriman', function (Blueprint $table) {
            $table->integer('kurir_t_id')->unsigned()->index();
            $table->foreign('kurir_t_id')->references('id')->on('kurir_ts')->onDelete('cascade');
            $table->integer('pengiriman_id')->unsigned()->index();
            $table->foreign('pengiriman_id')->references('id')->on('pengirimans')->onDelete('cascade');
            $table->string('status');
            $table->primary(['kurir_t_id', 'pengiriman_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kurir_t_pengiriman');
    }
}
