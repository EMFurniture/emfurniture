<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
        $table->id(); // ProductID
        $table->string('product_name');
        $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
        $table->decimal('price', 10, 2);
        $table->text('description')->nullable();
        $table->string('dimensions')->nullable();
        $table->decimal('weight', 10, 2)->nullable();
        $table->string('material')->nullable();
        $table->integer('stock_quantity')->default(0);
        $table->string('image_url')->nullable();
        $table->foreignId('supplier_id')->constrained('suppliers')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}
