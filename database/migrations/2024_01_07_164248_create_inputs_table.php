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
        Schema::create('inputs', function (Blueprint $table) {
            $table->uuid('id');
            $table->enum('type', ['text', 'file'])->default('text');
            $table->string('key', 2000);
            $table->string('value', 2000);
            $table->integer('time')->nullable();

            $table->foreignUuid('request_id')->constrained('requests')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inputs');
    }
};
