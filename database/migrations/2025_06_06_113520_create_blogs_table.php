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
            $table->string('title');
            $table->string('thumbnail');
            $table->string('banner')->nullable();
            $table->string('subtitle1')->nullable();
            $table->text('description1')->nullable();
            $table->string('subtitle2')->nullable();
            $table->text('description2')->nullable();
            $table->string('image')->nullable();
            $table->string('button_text');
            $table->string('button_url')->nullable();
            $table->integer('display_order')->nullable();
            $table->boolean('is_published')->default(false);
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(table: 'blog');
    }
};
