<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplexesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('complexes', function(Blueprint $table)
		{
			$table->increments('id');
            $table->text('title');
            $table->text('slug');
            $table->longText('description');
            $table->mediumText('pdf');
            $table->longText('gallery');
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
		Schema::drop('complexes');
	}

}
