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
        Schema::create('pengunjung', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pengunjung');    
            $table->bigInteger('nomor_hp_pengunjung'); 
            $table->date('tanggal_lahir_pengunjung');    
            $table->string('jenis_kelamin');    
            $table->string('email_pengunjung');    
            $table->string('password');    
            $table->string('provinsi');    
            $table->string('kabupaten');    
            $table->string('kecamatan');    
            $table->string('alamat');    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengunjung');
    }
};
