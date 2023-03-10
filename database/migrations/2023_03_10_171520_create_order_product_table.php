<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade');
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->decimal('quantity', 8, 2)->nullable()->default(0);
            $table->decimal('width', 8, 2)->nullable();
            $table->decimal('hight', 8, 2)->nullable();
            $table->decimal('length', 8, 2)->nullable();
            $table->decimal('diameter', 8, 2)->nullable();
            $table->decimal('a', 8, 2)->nullable();
            $table->decimal('c', 8, 2)->nullable();
            $table->decimal('h', 8, 2)->nullable();
            $table->string('additional_info')->nullable();
            $table->string('color')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_product');
    }
};
