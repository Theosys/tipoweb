<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('products', function($table){
    		$table->create();
    		$table->increments('id');
    		$table->string('nombre');
    		$table->string('descripcion');
    		$table->string('genero');
    		$table->string('categoria');
    		$table->string('coleccion');
    		$table->string('talla');
    		$table->string('color');
    		$table->double('precio');
    		$table->string('url_imagen');
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
