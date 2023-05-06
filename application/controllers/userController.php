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
}