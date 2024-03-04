<?php 

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    protected $table            = 'user';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
	protected $returnType       = 'array';
    protected $allowedFields    = [
                                    'id', 
                                    'username'      , 
                                    'password'      , 
                                    'name'          ,
                                    'surname'       ,
                                    'gender'        ,
                                    'email'         ,
                                    'telephone'     ,    
                                    'registerDate'
                                ];
}