<?php namespace App\Controllers;

use App\Models\ContactModel;

class Contact extends BaseController
{

	function __construct()
	{
		$session = \Config\Services::session();
	}

	public function index(){
		if (isset($_SESSION['id'])) {
		$id = 	$_SESSION['id'];
		$model = new ContactModel();
		$data['contacts'] = $model->getList($id);

		echo view('Includes/header');
		echo view('Includes/nav');
		echo view('contact',$data);
		echo view('Includes/footer');
		}else{
			return redirect()->to('/ContactSystem/public');
		}
	}

	public function add(){
		if (isset($_SESSION['id'])) {
  		echo view('Includes/header');
		echo view('Includes/nav');
		echo view('add_contact');
		echo view('Includes/footer');
		}else{
			return redirect()->to('/ContactSystem/public');
		}
	}

	public function create(){
		
		helper('form');
		$model = new ContactModel();

		$model->save([
			'name' => $this->request->getVar('name'),
			'email' => $this->request->getVar('email'),
			'phone' => $this->request->getVar('phone'),
			'company' => $this->request->getVar('cmp'),
			'userId' => $_SESSION['id']
		]);

		return redirect()->to('/ContactSystem/public/Contact');
		
	}

	public function logout(){
		session_destroy();
		return redirect()->to('/ContactSystem/public');
	}

}

