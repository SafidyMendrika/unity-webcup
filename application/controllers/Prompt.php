<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prompt extends CI_Controller {
    function index() {
        $this->load->view('prompt/navbar');
        $this->load->view('prompt/home');
    }

    function results() {
        $this->load->view('prompt/results');
    }
}
