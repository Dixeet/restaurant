<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('plats', function(Blueprint $table)
		{
			$table->increments('id');

            $table->string('name');
            $table->longText('description')->nullable();
            $table->string('image')->nullable();
            $table->integer('prix');
            $table->integer('prix2')->nullable();
            $table->integer('prix3')->nullable();
            $table->string('slug')->nullable();
            $table->integer('type_id');

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
		Schema::drop('plats');
	}

}
