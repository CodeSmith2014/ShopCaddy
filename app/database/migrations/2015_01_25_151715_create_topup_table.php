<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopupTable extends Migration {

	/**
	 * Run the migrations.
	 * 
	 *  method: 1 - bank transfer
	 *			2 - paypal
	 *
	 *	verifier_id: 0 - paypal_id
	 * @return void
	 */
	public function up()
	{
		Schema::create('credits', function($table)
		{
			$table->increments('id');
			$table->tinyInteger('method');
			$table->decimal('amount',16,5);
			$table->integer('member_id');
			$table->integer('verifier_id')->nullable();
			$table->datetime('topup_datetime');
			$table->datetime('verify_datetime')->nullable();
			$table->text('remarks')->nullable();
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
		Schema::table('credits', function(Blueprint $table)
		{
			Schema::dropIfExists("credits");
		});
	}

}
