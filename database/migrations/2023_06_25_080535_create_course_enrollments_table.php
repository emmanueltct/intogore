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
        Schema::create('course_enrollments', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('courseId')->nullable(false);
            $table->string('userEmail');
            $table->string('userPhone');
            $table->string('userName');
            $table->string('coursePayment')->default('Not Paid');
            $table->string('paymentApprovalCode');
            $table->timestamps();
            $table->softDeletes();
            $table->index('courseId');
            $table->foreign('courseId')->references('id')->on('courses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_enrollments');
    }
};
