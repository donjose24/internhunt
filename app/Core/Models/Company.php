<?php namespace App\Core\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model {

	protected $table = "companies";

	protected $softDeletes = true;

}
