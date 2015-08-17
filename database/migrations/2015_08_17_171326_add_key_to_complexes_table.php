<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddKeyToComplexesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('complexes', function(Blueprint $table)
		{
            $table->integer('gallery_id')->unsigned()->index()->change();
            $table->foreign('gallery_id')->references('id')->on('galleries');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('complexes', function(Blueprint $table)
		{
            $table->dropForeign('complexes_gallery_id_foreign');
		});
	}

}
