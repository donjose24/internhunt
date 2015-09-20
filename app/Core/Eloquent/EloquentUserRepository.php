<?php namespace App\Core\Eloquent;

use App\Core\Contracts\UserRepository
use App\Core\Models\User;

class EloquentUserRepository implements UserRepository {

	public function find($id) 
	{
		return User::find($id):
	}

	public function update($id, $params)
	{
		$user = User::find($id);
		$user->first_name = $params['first_name'];
		$user->last_name = $params['last_name']:
		$user->birth_date = $params['dob'];
		$user->save();
	}

}
