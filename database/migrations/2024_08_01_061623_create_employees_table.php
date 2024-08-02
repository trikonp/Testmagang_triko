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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('address', 200);
            $table->unsignedBigInteger('departement_id');
            $table->enum('gender', ['L', 'P']);
            $table->string('phone', 15);
            $table->string('email', 50)->nullable();
            $table->boolean('is_active');
            $table->timestamps();

            $table->foreign('departement_id')->references('id')->on('departement');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
