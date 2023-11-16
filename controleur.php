<?php 
//connexion avec le serveur et model
   include("model.php");
   include("serveur.php");
   session_start();
//creation objet a partire la clase Utilisateur
   $Utilisateur = new Utilisateur();
   if(isset($_POST['inscription'])){
      if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['pseudo']) AND !empty($_POST['email']) AND !empty($_POST['passw'])){
         $Utilisateur->_inscription($nom=$_POST['nom'], $prenom=$_POST['prenom'], $pseudo=$_POST['pseudo'], $email=sha1($_POST["email"]), $passw=sha1($_POST['passw']));
         $requet=$conn->prepare('INSERT INTO present VALUE(0, :nom, :prenom, :pseudo, :email, :passw)');
         $requet->execute(
            array(
               "nom" => $nom,
               "prenom" => $prenom,
               "pseudo" => $pseudo,
               "email" => $email,
               "passw" => $passw,
            )
         );
         $reponse = $requet->fetchAll(PDO::FETCH_ASSOC);
         $_SESSION["nom"] =$nom;
         $_SESSION["email"] =$email;
         $_SESSION["passw"] =$passw;
         header('location: index.php');
      }else{
         echo"Veuille remplire tout le champs!!..";
      }
   }
//operation du  connexion 

   if(isset($_POST['connexion'])){ // 
      if(!empty($_POST['email']) AND !empty($_POST['passw'])){
         if($_SERVER["REQUEST_METHOD"] == "POST"){
            $Utilisateur->_connexion($email = sha1($_POST["email"]), $passw = sha1($_POST["passw"])); 
            //echo $email."_".$passw;
            if($email != "" && $passw != ""){
            //connexion au base de donne
               $req = $conn->query("SELECT * FROM present WHERE email='$email' AND passw='$passw'");
               $req = $req->fetch();
             
               if($req['id'] != false){
                  $_SESSION["email"] =$email;
                  $_SESSION["passw"] =$passw;
                  header("location: index.php");
               }else{
                  echo"Votre mot de passe ou email incorrect";
               }
            }
         }
      }else{
         echo"Veuille remplire tout le champs";
      } 
   }
// operation deconnexion
   if(isset($_POST['deconnexion'])){
      $Utilisateur->_deconnexion( $_SESSION=array());
      session_destroy();
      header('location:connexion.php'); 
   } 
   
?>