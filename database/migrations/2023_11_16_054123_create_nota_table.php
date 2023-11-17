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
        Schema::create('nota', function (Blueprint $table) {
            $table->id();
            $table->string('no_pesanan');
            $table->string('nama_pemesan');
            $table->string('barang');
            $table->string('jumlah');
            $table->string('harga');
            $table->date('tgl_acara')->nullable();
            $table->tinyInteger('status_pembayaran')->default('0')->comment('0=Down Payment, 1=Lunas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nota');
    }
};
