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
            $table->foreignId('doctor_id')->constrained('doctors')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('pharmacy_owner_id')->constrained('pharmacy_owners')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('drug')->constrained('drugs')->onDelete('cascade')->onUpdate('cascade');
            $table->string('address');
            $table->enum('status',['new','processing' ,'waiting_for_user_confirmation','canceled' ,'confirmed','delivered']);
            $table->enum('created_by',['user' , 'pharmacy_owner' ,'doctor']);
            $table->boolean('is_insured');
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
