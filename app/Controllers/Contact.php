<?php namespace App\Controllers;
use App\Models\ContactModel;
class Contact extends BaseController
{
	
	public function index(){
		$session = \Config\Services::session();
		if ($_SESSION['id']) {

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



}
