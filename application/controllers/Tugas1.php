<?php
class Tugas1 extends CI_Controller{

    public function index(){
        $this->load->view("tugas1/home");
    }
    public function herdi(){
        $this->load->view("tugas1/herdi");
    }
    public function iqbal(){
        $this->load->view("tugas1/iqbal");
    }
    public function dilankw(){
        $this->load->view("tugas1/dilankw");
    }
}
?>