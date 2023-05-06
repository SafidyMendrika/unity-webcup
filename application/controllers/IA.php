<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class IA extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model("Onirix");
    }

    public function index(){
        echo ini_get('allow_url_fopen');
    echo "<br>helloo";
    }
    public function prompt($prompt){
        //$prompt = $this->input->post("prompt");

        $onirix = new Onirix();
        $result = $onirix->prompt($prompt);

        var_dump($result);
    }
}