<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user')->unsigned();
            $table->bigInteger('id_warung')->unsigned();
            $table->bigInteger('id_meja')->unsigned();
            $table->string('catatan');
            $table->string('total_harga');
            $table->string('metode_bayar');
            $table->string('status_pesanan');
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
        Schema::dropIfExists('orders');
    }
}
