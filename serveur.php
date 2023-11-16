<?php 
   $serveur="localhost";
   $user="root";
   $pass="";
   $dbname="voiture";

   try{
      $conn= new PDO("mysql:host=$serveur;dbname=$dbname",$user, $pass);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //echo"connexion !!!!!....";
     
   }catch(PDOException $e){
     echo"erreur du connection du base de donne:". $e->getMessage();
   }
?>