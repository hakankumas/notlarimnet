<?php

namespace App\Controllers;
use CodeIgniter\Controller;
// use \DateTime;

class Admin extends BaseController{
    protected $adminModel;
    
    public function __construct() {
        helper('url');
        $this->adminModel = new \App\Models\AdminModel();
    }

    public function index(){
        return view('index');
    }






































































}
?>
