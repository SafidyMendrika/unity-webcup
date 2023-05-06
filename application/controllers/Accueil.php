<?php

class Accueil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $session=1;
        $data['row']=$this->societe->getInformation($session);
        $this->load->view("accueil",$data);
    }
}