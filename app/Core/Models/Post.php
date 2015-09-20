<?php namespace App\Core\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

	protected $table = "posts";

	protected $softDeletes = true;

}
