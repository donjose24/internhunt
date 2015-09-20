<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('companies', function($table){
			$table->increments('id');
			$table->string('name');
			$table->string('type');
			$table->string('description');
			$table->string('contact_person');
			$table->string('contact_number');
			$table->string('address');
			$table->tinyInteger('status');
			$table->softDeletes();
			$table->timeStamps();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::drop('companies');
    }
}
