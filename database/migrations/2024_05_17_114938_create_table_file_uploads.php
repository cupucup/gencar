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
        Schema::create('file_uploads', function (Blueprint $table) {
            $table->id();
            $table->string('no_filez');
            $table->date('date');
            $table->date('date_receipt');
            $table->string('origin');
            $table->string('regarding');
            $table->string('path');
            $table->string('name');
            $table->enum('status',['in','out']);
            $table->string('extension');
          
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('file_uploads');
    }
};
