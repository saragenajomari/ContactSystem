<?php namespace App\Models;

use CodeIgniter\Model; 

class ContactModel extends Model
{
	protected $table = 'contact_list';	
	protected $allowedFields = ['name','email','phone','company'];


	public function getList($uid){
		return $this->asArray()	
			 		->where(['userId'=>$uid]);			
	}

}

 ?>