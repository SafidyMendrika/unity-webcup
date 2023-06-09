<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prompt extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if (!isset($_SESSION['iduser'])){
            redirect(base_url('login'));
        }
        $this->load->model("Onirix");
        $this->load->model("History");
    }

    function index() {
        $history = $this->History->histories($_SESSION["iduser"]);

        $historyData["histories"] = $history;

        $this->load->view('prompt/navbar');
        $this->load->view('prompt/home',$historyData);
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
