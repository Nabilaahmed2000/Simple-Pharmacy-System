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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('national_id')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('gender');
            $table->date('date_of_birth');
            $table->string('phone');
            $table->string('street_name');
            $table->integer('building_number');
            $table->integer('floor_number');
            $table->integer('flat_number');
            $table->boolean('is_main');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
