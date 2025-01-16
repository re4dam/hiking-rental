<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produk_book', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('id_produk')->constrained('produk','id_produk');
            $table->foreignId('id_user')->constrained('users','id');
            $table->integer('jumlah');
            $table->bigInteger('harga_total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk__books');
    }
};