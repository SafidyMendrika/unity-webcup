<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prompt extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $_SESSION["iduser"] = 1;
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
        $prompt = $this->input->post("dream-input");

        $onirix = new Onirix();

        echo json_encode($onirix->processPrompt($prompt));
    }

    function checkPatientSanity() {
        $dreamCount = $this->Onirix->countDream();
        $nightmaresCount = $this->Onirix->countCauchemar();

        echo "".$dreamCount>$nightmaresCount."";
    }

}
