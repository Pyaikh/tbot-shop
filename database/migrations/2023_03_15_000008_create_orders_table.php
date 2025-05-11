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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('chat_id');
            $table->foreignId('furniture_id')->constrained();
            $table->foreignId('color_id')->constrained();
            $table->foreignId('size_id')->constrained();
            $table->string('address');
            $table->string('entrance');
            $table->string('apartment');
            $table->enum('payment_method', ['card', 'cash']);
            $table->enum('status', ['pending', 'confirmed', 'delivered', 'cancelled'])->default('pending');
            $table->timestamps();
            
            $table->foreign('chat_id')->references('chat_id')->on('telegram_users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
}; 