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
        Schema::create('icerik', function (Blueprint $table) {
            $table->id();
            $table->integer('sayfa_id')->comment('sayfa tablosunun id bilgisini tutar')->nullable();
            $table->string('icerik_title')->nullable();
            $table->string('icerik_editor')->nullable();
            $table->string('icerik_design')->comment('içerik tasarım bilgisi tutar')->nullable();
            $table->enum('status',['Active','Passive'])->comment('durum bilgisi tutar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('icerik');
    }
};
