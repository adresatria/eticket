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
        Schema::create('eticket', function (Blueprint $table) {
            $table->string('id_ticket')->primary();
            // $table->foreign('id')->references('id')->on('pengunjung');
            $table->string('jenis_ticket');
            $table->integer('jumlah_pengunjung');
            $table->date('tanggal_pemesanan');            
            $table->integer('total_bayar');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eticket');
    }
};
