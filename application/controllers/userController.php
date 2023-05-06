<?php

class userController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model("User");
    }
    public function index(){
        echo "user";
    }
    public function id($id){
        $usr = new User();
         var_dump($usr);
    }
    public function mail(){

        $from_email = "safidymendrika823@gmail.com";
        $to_email = "mendrikarazafimalaza@gmail.com";
        $this->load->library('email');

        $this->email->from($from_email, 'BADOUDE');
        $this->email->to($to_email);
        $this->email->subject('Email Test');
        $this->email->message('Testing the email class leaaka badoude');

        if ($this->email->send()){
            echo "lasaaaaa";
        }else{
            echo "tsy lasaaaaaa";
        }
    }
    public function rand(){
        echo rand(0,2);
    }
}