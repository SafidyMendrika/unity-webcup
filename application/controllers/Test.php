<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {


	public function index()
	{
        $nom = $this->input->post("nom");
        $age = $this->input->post("age");

        $annee = 2023 - $age;

        $data["nom"] = $nom;
        $data["annee"] = $annee;

		$this->load->view('test',$data);
	}
}
