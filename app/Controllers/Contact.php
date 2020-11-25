<?php namespace App\Controllers;
use App\Models\ContactModel;
class Contact extends BaseController
{

	function __construct(argument)
	{
		$session = \Config\Services::session();
		if (!$_SESSION['id']) {
			return redirect()->to('/ContactSystem/public');
		}
	}
	public function index(){
		
		$id = 	$_SESSION['id'];
		$model = new ContactModel();
		$data['contacts'] = $model->getList($id);

		echo view('Includes/header');
		echo view('Includes/nav');
		echo view('contact',$data);
		echo view('Includes/footer');
	}

	public function add(){
  		echo view('Includes/header');
		echo view('Includes/nav');
		echo view('add_contact');
		echo view('Includes/footer');
	}

	public function logout(){
		session_destroy();
	}

}

