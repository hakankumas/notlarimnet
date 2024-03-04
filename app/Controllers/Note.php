<?php

namespace App\Controllers;
use CodeIgniter\Controller;
// use \DateTime;

class Note extends BaseController{
    protected $noteModel;
    
    public function __construct() {
        helper('url');
        $this->NoteModel = new \App\Models\NoteModel();
    }

    public function index(){
        return view('index');
    }
























































}
?>
