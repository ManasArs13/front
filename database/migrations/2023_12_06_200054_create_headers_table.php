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
        Schema::create('headers', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('key', 2000);
            $table->string('value', 2000);
           // $table->integer('time')->nullable();

            $table->uuid('headertable_id');
            $table->string('headertable_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('headers');
    }
};
