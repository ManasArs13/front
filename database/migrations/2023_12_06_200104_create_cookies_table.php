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
        Schema::create('cookies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('key', 1000);  // ! доработать 
            $table->string('value', 1000);// ! доработать
            $table->integer('time')->nullable();

            $table->foreignUuid('response_id')->constrained('responses')->cascadeOnDelete();
            // $table->unsignedBigInteger('response_id');
            // $table->foreign('resp_id')->references('id')->on('resps')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cookies');
    }
};
