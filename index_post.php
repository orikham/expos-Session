<?php require_once './index.php';

if (!empty($_POST['pseudo']) && !empty($_POST['identifiant']) && !empty($_POST['password']) && !empty($_POST['mail'])) {

    $reqIns = $db->prepare("INSERT INTO `user`(`pseudo`, `identifiant`, `password`, `mail`) VALUES (:pseudo, :identifiant, :password, :mail)");
    $reqIns->bindParam(':pseudo', $_POST['pseudo'], PDO::PARAM_INT);
    $reqIns->bindParam(':identifiant', $_POST['identifiant'], PDO::PARAM_INT);
    $reqIns->bindParam(':password', $_POST['password'], PDO::PARAM_INT);
    $reqIns->bindParam(':mail', $_POST['mail'], PDO::PARAM_INT);

    
    $reqIns->execute();
}
// fin script PHP d'inscription d'un nouvel utilisateur dans une base de données//

//recuperation des données d'inscription et connexion a une session//

if(isset($_POST['submit'])){
    $identifiant = $_POST['identifiant'];
    $password = $_POST['password'];


    $sqlCo = "SELECT * FROM `user` WHERE `identifiant` = '$identifiant' AND `password` = '$password'";
    $req = $db->query($sqlCo);
    $reqFetch = $req->fetch(PDO::FETCH_ASSOC);

    if($req-> rowCount() > 0 && $reqFetch['identifiant'] = $identifiant  ['password'] = $password){
        $session_start = true;

        echo '<h1>Bienvenue dans votre session ' .$reqFetch['pseudo'] . '</h1>';
    }

}

if(!isset($session_start)){
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
        <form action="rt.php" method="POST">
            <fieldset>
                <legend>Connexion</legend>
                
                    <label for="identifiant">Identifiant : </label>
                    <input type="text" name="identifiant" id="identifiant" required>
                

                    <label for="password">Mot de passe : </label>
                    <input type="password" name="password" id="password" required>

                    <input type="submit" name="submit" value="gigot mon agneau ">
                
            </fieldset>
        </form>
        <?php } ?>
    </div>
</body>
</html>