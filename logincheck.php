<?php
  session_start();
require_once "config.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $astunnus = $_POST["astunnus"];
    $salasana = $_POST["salasana"];
    // salasanan sotkeminen
    $salasana = SHA1($salasana );
    //Tarkistetaan asnimi
    if($astunnus!=NULL){
       $checking =   mysqli_query($link,"SELECT * FROM asiakas WHERE `astunnus`='$astunnus' AND `salasana`='$salasana'");
         // luodaan ID 
         $userdata = mysqli_fetch_array($checking);
         $userid =  $userdata['id'];
         if($userid!=NULL)
        {
             //luodaan istunto
            $_SESSION["userid"] = $userid;
            
            header("location:dashboard.php");
        }
        else
        {
            header("location:login.php?error=1");
        }
        
    }
    else
    {     
      
        
    }
}
