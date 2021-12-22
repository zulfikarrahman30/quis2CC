<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->bigInteger('id_barang',20)->unsigned();
            $table->string('kode_barang', 20)->nullable();
            $table->string('nama_barang', 50)->nullable();
            $table->string('kategori_barang', 25)->nullable();
            $table->string('harga', 30)->nullable();
            $table->string('qty', 15)->nullable();
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
        Schema::dropIfExists('barang');
    }
}
