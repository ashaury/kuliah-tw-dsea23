<?php
class Country extends CI_Controller{
    function index(){
        Echo "Ini dari Controller Country";
        // $this->load->view("Country");
    }
    function daftarNegara(){
        $data['result'] = $this->CountryModel->getCountry();
        //instance view
        $this->load->view("country",$data);
    }
}
