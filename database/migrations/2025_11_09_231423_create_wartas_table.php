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
        Schema::create('wartas', function (Blueprint $table) {
        $table->id();
        $table->string('judul');
        $table->date('tanggal');
        $table->string('file_path'); // menyimpan lokasi file PDF
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wartas');
    }
};
