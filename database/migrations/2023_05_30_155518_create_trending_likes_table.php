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
        Schema::create('trending_likes', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('postId')->nullable(false);
            $table->integer('userLike');
            $table->string('DeviceId')->nullable();
            $table->timestamps();
            $table->index('postId');
            $table->foreign('postId')->references('id')->on('posts')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trending_likes');
    }
};
