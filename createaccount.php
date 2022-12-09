<?php
  session_start();
require_once "config.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $astunnus = $_POST["astunnus"];
    $fname = $_POST["etunimi"];
    $sname = $_POST["sukunimi"];
    $email = $_POST["email"];
    $salasana = $_POST["salasana"];

    // hashing the salasana
    $salasana = md5($salasana );

    //checking astunnus$astunnus already exists
    $checking = mysqli_query($link,"SELECT * FROM asiakas WHERE astunnus='$astunnus'");
    $checkcount = mysqli_num_rows($checking);
    if($checkcount!=0){
        echo "Username Already exists, Please try another one";
    }
    else
    {
      
        mysqli_query($link,"INSERT INTO `asiakas` (`astunnus`, `etunimi`, `sukunimi`, `email`, `salasana`) VALUES ('$astunnus', '$fname', '$sname', '$email', '$salasana')");
         // getting user id 
        $userid =  mysqli_insert_id($link);
      
         //creating session 
         $_SESSION["userid"] = $userid;
        header("location:dashboard.php");
    }
}