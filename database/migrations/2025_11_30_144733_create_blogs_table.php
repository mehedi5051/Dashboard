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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('tittle');
            $table->bigInteger('category')->refenences('id')->on('categories')->onDelete('cascade');
            $table->tinyText('sub_tittle')->nullable();
            $table->longText('description');
            $table->text('sub_description');
            $table->string('image')->nullable();
            $table->string('thumbnail');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
