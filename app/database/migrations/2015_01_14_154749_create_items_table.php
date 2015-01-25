<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('items', function($table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('url');
			$table->string('specification')->nullable();
			$table->integer('qty');
			$table->decimal('price',16,5);
			$table->decimal('total',16,5);
			$table->integer('order_id')->nullable();
			$table->integer('member_id');
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
		Schema::table('items', function(Blueprint $table)
		{
			Schema::dropIfExists("items");
		});
	}

}
