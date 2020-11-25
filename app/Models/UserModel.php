<?php namespace App\Models;

use CodeIgniter\Model; 

class UserModel extends Model
{
	protected $table = 'users';	
	protected $allowedFields = ['name','email','password'];


	public function getUser($email,$password){
		return $this->asArray()	
			 		->where(['email'=>$email,'password'=>$password])
					->first();
	}

}

 ?>