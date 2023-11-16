<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <form action="controleur.php" method="post">
       <label for="email">email</label><br>
       <input type="text" name="email" autocomplete="off"><br>
       <label for="password">password</label><br>
       <input type="password" name="passw" autocomplete="off"><br><br>
       <input type="submit" value="connexion" name="connexion"> 
    </form>
    <a href="inscription.php"><button>Inscription</button></a>
</body>
</html>