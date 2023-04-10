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
        Schema::create('dergi', function (Blueprint $table) {
            $table->id();
            $table->string('dergi_name')->comment('dergi adı bilgisi tutar');
            $table->text('dergi_info')->comment('dergi detayı bilgisi tutar')->nullable();
            $table->integer('dergi_number')->comment('dergi sayı numarasını tutar')->nullable();
            $table->integer('dergi_key')->nullable();
            $table->enum('status', [ 'Passive', 'Active'])->comment('dergi durum bilgisini tutar')->default("Passive");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dergi');
    }
};
