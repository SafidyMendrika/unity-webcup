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
    public function googleLogin(){
        require "assets/google-api/vendor/autoload.php";

        $client = new Google_Client();
        $client->setClientId('931044001147-sbfcmmvrfjfutoudu3ajn64okd0himh8.apps.googleusercontent.com');
        $client->setClientSecret('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');
        $client->setRedirectUri('https://unityteam.madagascar.webcup.hodi.host/unity-webcup/Login/googleLogin');
        $client->addScope('email');
        $client->addScope('profile');

        if(isset($_GET['code'])) {
            $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
            if(!isset($token['error'])) {
                $client->setAccessToken($token['access_token']);

                $google_oauth = new Google_Service_Oauth2($client);
                $google_account_info = $google_oauth->userinfo->get();

                $data = array(
                    'email' => $google_account_info->email,
                    'picture' => $google_account_info->picture,
                    'name' => $google_account_info->name,
                    'id' => $google_account_info->id
                );
                var_dump($data);
            }
        }

        $data["client"] = $client;
        $this->load->view("test",$data);
    }
}