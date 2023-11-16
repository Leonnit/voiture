<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <form action="controleur.php" method="post">
       <label for="nom">Nom</label><br>
       <input type="text" name="nom" autocomplete="off"><br>
       <label for="prenom">prenom</label><br>
       <input type="text" name="prenom" autocomplete="off"><br>
       <label for="pseudo">pseudo</label><br>
       <input type="text" name="pseudo" autocomplete="off"><br>
       <label for="email">email</label><br>
       <input type="text" name="email" autocomplete="off"><br>
       <label for="password">password</label><br>
       <input type="password" name="passw" autocomplete="off"><br><br>
       <input type="submit" value="inscription" name="inscription"><br>
    </form>
</body>
</html>