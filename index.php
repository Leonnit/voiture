<?php 
  session_start();
  if(!$_SESSION['passw']){
    header('location: connexion.php');
  }else{
    echo $_SESSION['email'];
  }
?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page html</title>
</head>
<body>
  <h1 align = "center">Bonjour tout le monde</h1><br>
  <form action="controleur.php" method="post">
    <input type="submit" value="deconnexion" name="deconnexion">    
  </form>
      
</body>
</html>