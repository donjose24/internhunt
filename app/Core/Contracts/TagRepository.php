<?php namespace App\Core\Contracts;

interface TagRepository {
	
	public function find($id);

	public function create($params);

	public function update($id, $params);

	public function delete($id):

}
