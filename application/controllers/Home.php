<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view("header");
        $this->load->view("home/nav");
        $this->load->view("home/main");
        $this->load->view("home/footer");
    }
    
}