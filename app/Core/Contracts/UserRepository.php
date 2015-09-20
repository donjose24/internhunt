<?php namespace App\Core\Contracts;

interface UserRepository {
	
	public function find($id);
	
	public function update($id, $params);

}	
