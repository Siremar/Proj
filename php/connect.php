<?php
class Connection{
    public function getConnection(){
        $server = "localhost";

        $con = new PDO("mysql:host=$server;dbname=sxn3706_siremar","sxn3706_root","siremar@123");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $con;
    }
}
?>