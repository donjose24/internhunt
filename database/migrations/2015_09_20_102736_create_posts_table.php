<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('posts', function($table){

			$table->increments('id');
			$table->string('title');
			$table->string('description');
			$table->integer('author_id')->unsigned();
			$table->timestamps();
			$table->softDeletes();
			$table->foreign('author_id')->references('id')->on('users');

		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::dropIfExists('posts');
    }
}
