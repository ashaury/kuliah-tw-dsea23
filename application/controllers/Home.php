<?php
class Home extends CI_Controller
{
    function daftarnegara()
    {
        //instance model
        // $this->load->model("CountryModel");
        $data['result'] = $this->CountryModel->getCountry();
        //instance view
        $this->load->view("country",$data);
    }
    function index(){
        $this->load->helper("url");
        $data['title'] = "Dashboard Page";
        $this->load->view('menu',$data);
    }
    function features(){
        $this->load->helper("url");
        $data['title'] = "Features Page!";
        $this->load->view('menu',$data);
    }
    function pricing(){
        $this->load->helper("url");
        $data['title'] = "Pricing Page!";
        $this->load->view('menu',$data);

    }
    function profil(){
        echo "Halaman Profil";
    }
    function about(){
        echo "Halaman About";
    }

    function helpers(){
        $this->load->helper("url");
        echo base_url();
        echo "<br>";
        echo site_url();
        echo "<br>";
        echo site_url("home/features");
        echo "<br>";
        echo site_url()."/home/features";        
    }
}

