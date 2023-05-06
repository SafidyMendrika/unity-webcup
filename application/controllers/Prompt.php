<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prompt extends CI_Controller {

    function __construct()
    {

        parent::__construct();
        if (! isset($_SESSION["iduser"])){
            redirect(base_url());
        }
        $this->load->model("Onirix");
    }

    function index() {
        $this->load->view('prompt/navbar');
        $this->load->view('prompt/home');
    }

    function results() {
        $this->load->view('prompt/results');
    }
    function prompt(){
        $prompt = $this->input->post("prompt");

        $onirix = new Onirix();
        var_dump($onirix->countCauchemar());

       // var_dump($onirix->processPrompt($prompt));
    }

    function checkPatientSanity() {
        $dreamCount = $this->Onirix->countDream();
        $nightmaresCount = $this->Onirix->countCauchemar();

        if($dreamCount>=$nightmaresCount){
            echo "true";
        }else{
            echo "false";
        }
    }

}
