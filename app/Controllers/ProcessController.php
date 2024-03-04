<?php

namespace App\Controllers;
use CodeIgniter\Controller;
// use \DateTime;

class ProcessController extends BaseController{
    protected $UserModel;
    
    public function __construct() {
        helper('url');
        $this->UserModel = new \App\Models\UserModel();
    }

    public function index(){
        return view('index');
    }

    public function error(){
        return view('error');
    }

    public function page_register(){
        return view('user/register');
    }

    public function insert() {
        $username = $this->request->getPost("username");
        $password = $this->request->getPost("password");

		$dataFromDB 	 = $this->UserModel->where("username" , $username)->first();
        if($dataFromDB !== NULL){
            return view("user/register");
        }else{
            $where = [
                "username" => $username,
                "password" => $password
            ];
            $this->UserModel->insert($where);
            return redirect()->to("page-login-user");
        }
    }

    public function page_login(){
        return view('user/login');
    }

    public function login(){
        $username = $this->request->getPost("username");
        $password = $this->request->getPost("password");
        $where = array(
            "username" => $username,
            "password" => $password
        );

        $session = $this->UserModel->where($where)->first();
        
        if($session !== NULL){
            return redirect()->to("page-home-user");
        }else{
            return view("user/login");
        }

    }

    public function page_home() {
        return view('user/index');
    }



















    // public function page_login_admin(){
    //     return view('admin/login-admin');
    // }
 









































































}
?>
