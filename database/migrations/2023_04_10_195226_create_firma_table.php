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
        Schema::create('firma', function (Blueprint $table) {
            $table->id();
            $table->string('firma_logo')->comment('firma logo bilgisi tutar')->nullable();
            $table->string('firma_unvan')->comment('firma unvan bilgisi tutar')->nullable();
            $table->string('firma_name');
            $table->string('firma_gsm')->comment('firma gsm bilgisi tutar')->nullable();
            $table->string('firma_mail');
            $table->string('firma_password');
            $table->string('firma_key')->nullable();
            $table->enum('status', [ 'Passive', 'Active'])->comment('dergi durum bilgisini tutar')->default("Passive");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('firma');
    }
};
