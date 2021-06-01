<?php
//CONEXAO COM O BANCO DE DADOS

$servername = "localhost";
$username = "root";
$password = "";
$db_name= "crud";

 $connect = mysqli_connect($servername,$username,$password,$db_name);
 mysqli_set_charset($connect, "utf-8");

 if (mysqli_connect_error()) :
    echo "ERRO DE CONEXAO :". mysqli_connect_error();
 endif;