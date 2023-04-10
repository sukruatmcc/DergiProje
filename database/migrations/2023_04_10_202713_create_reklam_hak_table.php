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
        Schema::create('reklam_hak', function (Blueprint $table) {
            $table->id();
            $table->integer('firma_id')->comment('firma tablosuna ait id bilgisini tutar')->nullable();
            $table->integer('reklam_type_id')->comment('reklam_type tablosuna ait id bilgisini tutar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reklam_hak');
    }
};
