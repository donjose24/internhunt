<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPostIdToApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::table('applications', function($table){
			
			$table->integer('post_id')->unsigned();
			$table->foreign('post_id')->references('id')->on('posts');

		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::table('applications', function($table){

			$table->dropForeign('applications_post_id_foreign');
			$table->dropColumn('post_id');
		});
    }
}
