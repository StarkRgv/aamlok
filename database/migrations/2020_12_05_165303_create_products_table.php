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
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('sub_category_id');
            $table->unsignedBigInteger('gender_id');
            $table->string('product_id');
            $table->string('title')->nullable();
            $table->string('brand_name')->nullable();
            $table->string('style_name')->nullable();
            $table->string('fitting_type')->nullable();
            $table->string('pattern')->nullable();
            $table->string('fabric_type')->nullable();
            $table->mediumInteger('pocket_count')->nullable();
            $table->string('department')->nullable();
            $table->string('rise_style')->nullable();
            $table->string('manufacturer')->nullable();
            $table->string('origin_country')->nullable();
            $table->string('mrp')->nullable();
            $table->string('selling_price')->nullable();
            $table->mediumInteger('order_quantity')->nullable();
            $table->mediumInteger('in_stock')->nullable();
            $table->mediumInteger('unit_count')->nullable();
            $table->text('care_instructions')->nullable();
            $table->text('occasion_instructions')->nullable();
            $table->text('material_composition')->nullable();
            $table->text('item_length_desc')->nullable();
            $table->text('product_desc')->nullable();
            $table->text('key_feature')->nullable();
            $table->text('primary_image')->nullable();
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('sub_category_id')->references('id')->on('sub_categories');
            $table->foreign('gender_id')->references('id')->on('genders');
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
