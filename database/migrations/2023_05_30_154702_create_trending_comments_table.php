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
        Schema::create('trending_comments', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('postId')->nullable(false);
            $table->string('commentatorEmail');
            $table->string('commentatorName');
            $table->text('postComments');
            $table->timestamps();
            $table->softDeletes();
            $table->index('postId');
            $table->foreign('postId')->references('id')->on('posts')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trending_comments');
    }
};
