<?php namespace App\Repositories\Contracts;

interface AuthRepository {

    public function findById($id);

	public function findByCode($code);

	public function authenticate($username, $password, $remember);

	public function logout();

	public function check();

	public function activate($user);

	public function register($params);

}
?>
