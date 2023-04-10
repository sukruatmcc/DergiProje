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
        Schema::create('sayfa', function (Blueprint $table) {
            $table->id();
            $table->integer('dergi_id')->comment('dergi tablosuna ait id bilgisini tutar')->nullable();
            $table->integer('categories_id')->comment('categories tablosuna ait id bilgisini tutar')->nullable();
            $table->integer('sayfa_order')->comment('sayfa sıra numarası tutar')->nullable();
            $table->string('sayfa_name')->nullable();
            $table->enum('status',['Active','Passive'])->comment('durum bilgisi tutar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sayfa');
    }
};
