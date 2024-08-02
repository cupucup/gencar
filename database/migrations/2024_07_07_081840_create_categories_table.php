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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
        });

        // Menambahkan foreign key ke tabel publications
        Schema::table('publications', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id')->after('users_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->dropColumn('category');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('publications', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');
            $table->string('category')->after('users_id');
        });

        Schema::dropIfExists('categories');
    }
};
