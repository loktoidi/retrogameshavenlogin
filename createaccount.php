<?php
  session_start();
require_once "config.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $astunnus = $_POST["astunnus"];
    $fname = $_POST["etunimi"];
    $sname = $_POST["sukunimi"];
    $email = $_POST["email"];
    $salasana = $_POST["salasana"];

    // sotketaan salasana
    $salasana = SHA1($salasana );

    //tarkistetaan astunnuksen uniikkius
    $checking = mysqli_query($link,"SELECT * FROM asiakas WHERE astunnus='$astunnus'");
    $checkcount = mysqli_num_rows($checking);
    if($checkcount!=0){
        echo "Astunnus varattu, valitse uusi astunnus";
    }
    else
    {
      
        mysqli_query($link,"INSERT INTO `asiakas` (`astunnus`, `etunimi`, `sukunimi`, `email`, `salasana`) VALUES ('$astunnus', '$fname', '$sname', '$email', '$salasana')");
         // luodaan ID 
        $userid =  mysqli_insert_id($link);
      
        $_SESSION["userid"] = $userid;
        header("location:dashboard.php");
    }
}
