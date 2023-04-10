<?php
class Learnsession extends CI_Controller{
    function index(){
        if($_SESSION['login']!="logged_in"){
            redirect(site_url('learnsession/login'));
        }
        $this->load->library("session");
        $_SESSION['nama']="Informatika";
        echo $_SESSION['nama'];
        ?>
        <a href="<?= site_url('learnsession/second')?>">Second</a>
        <a href="<?= site_url('learnsession/logout')?>">Logout</a>
        <?php
    }
    function second(){
        $this->load->library('session');
        echo $_SESSION['nama'];
    }
    function login(){
        $this->load->view('sessions/login');
    }
    function loginProses(){
        $user = $_POST['username'];
        $pass = $_POST['password'];
        if($user=="admin" && $pass=="admin"){
            $_SESSION['login'] = "logged_in";
            redirect(site_url('learnsession'));
        }
    }
    function logout(){
        $this->session->sess_destroy();
        redirect(site_url('learnsession/login'));
    }
}
?>