<?php namespace App\Core\Contracts;

interface PostRepository {
	
	public function find($id);

	public function create($params);

	public function update($id, $params);

	public function delete($id):

}
