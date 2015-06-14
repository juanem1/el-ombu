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
            $table->integer('gallery_id');
            $table->string('title');
            $table->string('slug');
            $table->longText('description');
            $table->decimal('price');
            $table->mediumText('pdf');
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
