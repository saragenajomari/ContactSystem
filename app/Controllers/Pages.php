<?php namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		echo view('Includes/header');
		echo view('index');
		echo view('Includes/footer');
	}

	public function register()
	{
		echo view('Includes/header');
		echo view('register');
		echo view('Includes/footer');
	}

	
	//--------------------------------------------------------------------

}
