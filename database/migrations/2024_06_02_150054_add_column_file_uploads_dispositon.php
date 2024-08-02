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
        Schema::table('file_uploads', function (Blueprint $table) {

            $table->string('instructions')->nullable();
            $table->string('objective')->nullable();
            $table->unsignedBigInteger('disposition_id');
            $table->foreign('disposition_id')->references('id')->on('dispositions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('file_uploads', function (Blueprint $table) {
            //
        });
    }
};
