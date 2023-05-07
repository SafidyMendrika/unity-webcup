<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("User");
    }
    
    public function index() {
        $this->load->view("login");
    }

    public function simplelogin(){
        $email = $this->input->post('email');
        $mdp = $this->input->post('mdp');
        $temp = new User();
        $temp->setSimpleLoginField($email, $mdp);
        $verif = $temp->login();
        if ( $verif!= false){
            $_SESSION['iduser']=$verif['id'];
            $_SESSION['nomuser']=$verif['username'] ;
            redirect(base_url('prompt'));
        }else{
            redirect(base_url('login'));
        }
        var_dump($temp->login());
    }
    public function loginGoogle($email, $mdp){

    }

    public function deconnect(){
        session_destroy();
        redirect(base_url());
    }
}