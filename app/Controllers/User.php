<?php

namespace App\Controllers;
use CodeIgniter\Controller;
// use \DateTime;

class User extends BaseController{
    protected $UserModel;
    
    public function __construct() {
        helper('url');
        $this->UserModel = new \App\Models\UserModel();
    }

    public function index(){
        return view('index');
    }






}
?>
