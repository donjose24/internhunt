<?php namespace App\Repositories\Sentinel;

use App\Repositories\Contracts\AuthRepository;
use Sentinel;
use Activation;

class SentinelAuthRepository implements AuthRepository {

	public function findById($id)
	{
		return Sentinel::findById($id);
	}

	public function findByCode($code)
	{
		return Sentinel::findByPersistenceCode($code);
	}

	public function authenticate($username, $password, $remember)
	{
		return Sentinel::authenticate([
			'email'		=> $username,
			'password' 	=> $password
		],$remember);
	}

	public function logout()
	{
		Sentinel::logout();
	}

	public function check()
	{
		return Sentinel::check();
	}	

	public function activate($user)
	{
		return Activate::create($user);
	}

	public function register($params)
	{
		$credentials = [
			"email"			=>	$params['email'],
			"password"		=>	$params['password'],
			"first_name" 	=>	$params['first_name'],
			"last_name"		=>	$params['last_name'],
			"birth_date"	=>	$params['dob']
		];

		return Sentinel::register($credentials);
	}

}

?>
