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
    public function profil(){
        $user = array(
            "nama" => "Milea",
            "kelas" => "DSEA",
            "alamat" => "Lengkong",
            "email" => "milea@email.com",
            "telp" => "08123131231",
            "url" => "https://thephrase.id/wp-content/uploads/2022/11/26865191_164049054235194_8405690596764680192_n-jpg.webp"
        );
        $this->load->view("tugas1/profil",$user);
    }
}
?>