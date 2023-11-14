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
        Schema::create('products', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('companyTitle');
            $table->string('productName')->unique();
            $table->string('productEndLink')->unique();
            $table->string('productPrice');
            $table->string('productDiscount');
            $table->string('productCurrency');
            $table->string('productThumbnail');
            $table->string('Approval')->default('Pending');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
