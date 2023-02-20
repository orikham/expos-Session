<?php


require_once './index.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="connexion">
        <form action="session.php" method="POST">
            <fieldset>
                <legend>Connexion</legend>
                
                    <label for="identifiant">Identifiant : </label>
                    <input type="text" name="identifiant" id="identifiant" required>
                

                    <label for="password">Mot de passe : </label>
                    <input type="password" name="password" id="password" required>

                    <input type="submit" name="submit" value="gigot mon agneau ">
                
            </fieldset>
        </form>
       
    </div>
</body>
</html>