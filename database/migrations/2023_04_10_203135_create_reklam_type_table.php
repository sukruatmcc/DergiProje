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
        Schema::create('reklam_type', function (Blueprint $table) {
            $table->id();
            $table->string('reklam_type_name')->nullable();
            $table->text('reklam_type_info')->comment('reklam type detay bilgisi')->nullable();
            $table->enum('status',['Active','Passive'])->comment('durum bilgisi tutar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reklam_type');
    }
};
