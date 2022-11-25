<?php
function conectar(){
    $host="localhost";
    $user="root";
    $pass="";
    $bd="datosUno";

   $con=mysqli_connect($host,$user,$pass);
    $con = mysqli_connect("localhost","root","","datosUno");
    mysqli_select_db($con,$bd);
    return $con;
}
