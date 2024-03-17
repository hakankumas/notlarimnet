<?php

namespace App\Controllers;
use CodeIgniter\Controller;
// use \DateTime;

class ProcessController extends BaseController{
    protected $UserModel;
    protected $NoteModel;
    
    public function __construct() {
        helper('url');
        $this->UserModel = new \App\Models\UserModel();
        $this->NoteModel = new \App\Models\NoteModel();
    }

    public function index(){
        $session = session();
        if($session->has('username')){
            return redirect()->to('page-home-user');
        }else{
            return view('index');
        }
    }

    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to('/');
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
        
        $is_session = $this->UserModel->where($where)->first();
        if($is_session !== NULL){
            $session = session();
            $session->set($where);
            return redirect()->to("page-home-user");
        }else{
            return view("user/login");
        }

    }

    public function page_home() {
        $session = session();
        $getSession_username = $session->get("username");
        $getSession_password = $session->get("password");

        $notes      = $this->NoteModel->where("username" , $getSession_username)->where("ishide" , 1)->orderBy("note_updateDate" , "DESC")->find();
        $hide_notes = $this->NoteModel->where("username" , $getSession_username)->where("ishide" , 0)->orderBy("note_updateDate" , "DESC")->find();

        $data = [
            "username"      => $getSession_username,
            "password"      => $getSession_password,
            "notes"         => $notes,
            "hide_notes"    => $hide_notes
        ];
        
        return view('user/index', $data);
    }

    public function create_note() {
        $session = session();
        $getSession_username = $session->get("username");

        $note_title     = $this->request->getPost('note_title');
        $note_content   = $this->request->getPost('note_content');
        $data = [
            "username"      => $getSession_username,
            "note_title"    => $note_title,
            "note_content"  => $note_content
        ];

        $process = $this->NoteModel->insert($data);
        if($process){
            echo "<script>
                alert('Notunuz Oluşturuldu!'); 
                window.location.href='".base_url('page-home-user')."';
            </script>";
        }else{
            echo "<script>
                alert('Notunuz Eklenemedi!'); 
                window.location.href='".base_url('page-home-user')."';
            </script>";
        }
    }

    public function update_note() {
        $note_id        = $this->request->getPost("note_id");
        $note_title     = $this->request->getPost("note_title");
        $note_content   = $this->request->getPost("note_content");
        $data = [
            "note_title"    => $note_title,
            "note_content"  => $note_content
        ];

        $condition = [
            'note_id' => $note_id
        ];

        $process = $this->NoteModel->update($condition , $data);
        if($process){
            echo "<script>
                alert('Notunuz Güncellendi!'); 
                window.location.href='".base_url('page-home-user')."';
            </script>";
        }else{
            echo "<script>
                alert('Notunuz Güncellenemedi!'); 
                window.location.href='".base_url('page-home-user')."';
            </script>";
        }
    }

    public function hide_note() {
        $note_id = $this->request->getPost("note_id");
        $condition = [
            'note_id' => $note_id
        ];

        $data = [
            "ishide" => 0
        ];

        $process = $this->NoteModel->update($condition , $data);
        if($process){
            echo "<script>
                alert('Notunuz Gizlendi!'); 
                window.location.href='".base_url('page-home-user')."';
            </script>";
        }else{
            echo "<script>
                alert('Notunuz Gizlenemedi!'); 
                window.location.href='".base_url('page-home-user')."';
            </script>";
        } 
    }

    public function delete_note() {
        $note_id = $this->request->getPost("note_id");
        $condition = [
            "note_id" => $note_id
        ];

        $process = $this->NoteModel->delete($condition);
        if($process){
            echo "<script>
                alert('Notunuz Silindi!'); 
                window.location.href='".base_url('page-home-user')."';
            </script>";
        }else{
            echo "<script>
                alert('Notunuz Silinemedi!'); 
                window.location.href='".base_url('page-home-user')."';
            </script>";
        } 
    }

    public function hidden_note($note_id) {
        $condition = [
            "note_id"  =>  $note_id
        ];
        
        $data = [
            "ishide" => 1
        ];

        $process = $this->NoteModel->update($condition, $data);

        if($process){
            echo "<script>
                alert('Notunuz Gösteriliyor!'); 
                window.location.href='".base_url('page-home-user')."';
            </script>";
        }else{
            echo "<script>
                alert('Notunuz Gösterilemedi!'); 
                window.location.href='".base_url('page-home-user')."';
            </script>";
        }
        
    }

    public function hiddenDelete_note($note_id) {
        $condition = [
            "note_id"  =>  $note_id
        ];
        
        $process = $this->NoteModel->delete($condition);

        if($process){
            echo "<script>
                alert('Notunuz Silindi!'); 
                window.location.href='".base_url('page-home-user')."';
            </script>";
        }else{
            echo "<script>
                alert('Notunuz Silinemedi!'); 
                window.location.href='".base_url('page-home-user')."';
            </script>";
        }
        
    }

















    











    // public function page_login_admin(){
    //     return view('admin/login-admin');
    // }
 









































































}
?>
