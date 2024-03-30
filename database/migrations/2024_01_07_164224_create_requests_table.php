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
        Schema::create('requests', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->timestamps();
            $table->text('url');
            $table->enum('meth', ['GET', 'POST', 'PUT', 'PATCH', 'DEL'])->default('GET');
            $table->string('session_id')->nullable();
            $table->foreign('session_id')->references('id')->on('sessions')->cascadeOnDelete();   
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};
