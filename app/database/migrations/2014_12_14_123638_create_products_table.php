<?php

use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function($table) {
			$table->increments('product_id');
			$table->string('product_name', 100);
			$table->string('product_code', 100);
			$table->string('product_color', 20);
			$table->string('product_size', 20);
			$table->string('product_image');
			$table->double('product_price');
			$table->text('product_description');
			$table->softDeletes();
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
		Schema::drop('products');
	}

}