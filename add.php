<?php

require('config.php');

// echo "Wait please";
// $conn=mysql_connect ('localhost','root','');

// if (!$conn) {
// die ( 'Could not connect: ' . mysql_error());

//    }
//    mysql_select_db ('registrace') or die("cannot select DB");
//    echo @mysql_ping() ? 'true' : 'false';

   $sql="INSERT INTO 'users'(nom, email, mdp) VALUES ('$_POST[name]', '$_POST[email]', '$_POST[mdp]')";
   $result=mysql_query($sql);
   if($result){

   echo("<br>Input data is succeed");

   }else{

   echo("<br>Input data is fail");
   }
   mysql_close($conn);
   


?>
