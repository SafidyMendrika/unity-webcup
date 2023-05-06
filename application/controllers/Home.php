<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->load->view("home/header");
        $this->load->view("home/hero");
        $this->load->view("home/about_onirix");
        $this->load->view("home/onirix_service");
        $this->load->view("home/about_labo");
        $this->load->view("home/news");
        $this->load->view("home/footer");
    }
    
}