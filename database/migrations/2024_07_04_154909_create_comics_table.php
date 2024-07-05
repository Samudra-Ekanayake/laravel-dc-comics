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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('Title');
            $table->text('Description');
            $table->string('Thumb');
            $table->decimal('Price');
            $table->string('Series');
            $table->date('Sale_date');
            $table->string('Type');
            $table->string('Artists');
            $table->string('Writers');
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
