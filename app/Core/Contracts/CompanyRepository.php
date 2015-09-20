<?php namespace App\Core\Contracts\CompanyRepository

interface CompanyRepository {

	public function find($id);

	public function create($params);

	public function update($id, $params);

	public function delete($id):
}
