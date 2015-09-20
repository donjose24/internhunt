<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDegreeIdToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::table('users', function($table){

			$table->integer('degree_id')->unsigned();
			$table->foreign('degree_id')->references('id')->on('degree');
				
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::table('users', function($table) {
			$table->dropColumn('degree');
		});
    }
}
