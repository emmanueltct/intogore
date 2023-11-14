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
        Schema::create('course_comments', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('subcourseId')->nullable(false);
            $table->string('userEmail');
            $table->string('userName');
            $table->text('courseComments');
            $table->timestamps();
            $table->softDeletes();
            $table->index('subcourseId');
            $table->foreign('subcourseId')->references('id')->on('subcourses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_comments');
    }
};
