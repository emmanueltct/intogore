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
        Schema::create('posts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('postCategory')->nullable(false);
            $table->string('posttitle')->unique();
            $table->string('PostEndLink')->unique();
            $table->string('postThumbnail');
            $table->text('postDescription');
            $table->text('postDetailDescription');
            $table->string('Approval')->default('Pending');
            $table->timestamps();
            $table->softDeletes();
            $table->index('postCategory');
            $table->foreign('postCategory')->references('id')->on('intogore_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
