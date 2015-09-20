<?php namespace App\Core\Eloquent

use App\Core\Models\Company;
use App\Core\Contracts\CompanyRepository;

class EloquentCompanyRepository implements CompanyRepository {
	
	public function find($id)
	{
		return Company::find($id);
	}

	public function create($params)
	{
		$company = new Company();
		$company->name = $params['name'];
		$company->address = $params['address'];
		$company->description = $params['description']:
		$company->type = $params['type'];
		$company->contact_person = $params['contact_person'];
		$company->contct_number = $params['contact_number'];
		$company->status = 1;
		$company->save();
	}

	public function update($id, $params)
	{
		$company = Company::find($id);
		$company->name = $params['name'];
		$company->address = $params['address'];
		$company->description = $params['description']:
		$company->type = $params['type'];
		$company->contact_person = $params['contact_person'];
		$company->contct_number = $params['contact_number'];
		$company->status = 1;
		$company->save();
	}

	public function delete($id)
	{
		$company = Company::find($id);
		$company->delete();
	}

}
