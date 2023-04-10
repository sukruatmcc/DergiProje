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
        Schema::create('reklam', function (Blueprint $table) {
            $table->id();
            $table->integer('sayfa_id')->comment('sayfa tablosuna ait id bilgisini tutar')->nullable();
            $table->integer('firma_id')->comment('firma tablosuna ait id bilgisini tutar')->nullable();
            $table->integer('reklam_hak')->comment('reklam hak tablosuna ait id bilgisini tutar')->nullable();
            $table->string('reklam_title')->nullable();
            $table->string('reklam_editor')->nullable();
            $table->string('reklam_design')->nullable();
            $table->enum('status', [ 'Passive', 'Active'])->comment('dergi durum bilgisini tutar')->default("Passive");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reklam');
    }
};
