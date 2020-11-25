<?php namespace App\Controllers;

use App\Models\UserModel;

class Accounts extends BaseController
{
	
	public function create()
	{
		helper('form');
		$model = new UserModel();

		$model->save([
			'name' => $this->request->getVar('name'),
			'email' => $this->request->getVar('email'),
			'password' => $this->request->getVar('pwd'),
		]);

		return redirect()->to('/ContactSystem/public');
	}

	public function login(){
		helper('form');
		session_start();
		$model = new UserModel();

		$data['account_details'] = $model->getUser($this->request->getVar('email'),$this->request->getVar('pwd'));
		if ($data['account_details']) {
			$uid = $data['account_details']['id'][0];
			//$session = \Config\Services::session();

			$_SESSION['id'] = $uid;
			return redirect()->to('/ContactSystem/public/Contact/index');
		}else{
			echo 'false';
		}
	}


	//--------------------------------------------------------------------

}
