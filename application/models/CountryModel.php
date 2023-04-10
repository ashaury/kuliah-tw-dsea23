<?php
class CountryModel extends CI_Model{
    function getCountry(){
        $link = mysqli_connect("localhost", "root", "", "world");
        $sql = "SELECT * FROM country";
        $result = mysqli_query($link, $sql);
        return $result;
    }
}

?>