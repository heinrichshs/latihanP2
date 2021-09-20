<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Latihansatu extends CI_Controller {

    public function index(){
        echo "<h1>Contoh Class</h1>";
    }
// hanya menggunakan controller

    public function biodatasatu(){
       echo "<h1>Perkenalkan</h1>";
       echo "<br>";
       echo "<h1>Nama : Heinrich";
    }
// menggunakan controler dan view
    public function biodatadua(){

        $this->load->view('view_biodata');
    }

// menggunakan contoler dan model
    public function biodatatiga(){
        $this->load->model('model_biodata'); //panggil model
        $bio = $this->model_biodata->biodata();

        echo "<h1>Perkenalkan</h1>";
        echo "<br>";
        echo "<h1>Nama : . $bio";
    }
    
    //menggunakan controler model dan view
    public function biodataempat(){
        $this->load->model('model_biodata'); // model
        $data['bio'] = $this->model_biodata->biodata();

        $data ['title'] = "Form Biodata";

        $this->load->view('view_biodata', $data); //view

    }

}