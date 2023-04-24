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
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('doctor_id')->nullable()->constrained('doctors')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('address_id')->constrained('user_addresses');
            $table->foreignId('pharmacy_id')->nullable()->constrained('pharmacies')->onDelete('cascade')->onUpdate('cascade');
            $table->json('prescription');
            $table->enum('status',['new','processing' ,'waiting_for_user_confirmation','canceled' ,'confirmed','delivered']);
            $table->enum('created_by', ['user', 'pharmacy_owner' ,'doctor']);
            $table->boolean('is_insured')->default(false);
            $table->softDeletes();
            $table->timestamps();
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