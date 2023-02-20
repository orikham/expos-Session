<?php
session_start();

if(session_status() == PHP_SESSION_ACTIVE){
    echo "Une session est en cours";
} else {
    echo "Aucune session n'est en cours";
}


try{
    $db = new PDO('mysql:host=localhost;dbname=zombie-anarchie;charset=utf8', 'root', '');
} catch(PDOException $e){
    echo 'Erreur : ' . $e->getMessage();
}

if (!empty($_POST['pseudo']) && !empty($_POST['identifiant']) && !empty($_POST['password']) && !empty($_POST['mail'])) {

    $reqIns = $db->prepare("INSERT INTO `user`(`pseudo`, `identifiant`, `password`, `mail`) VALUES (:pseudo, :identifiant, :password, :mail)");
    
    $reqIns->execute(array(
        ':pseudo' => $_POST['pseudo'],
        ':identifiant' => $_POST['identifiant'],
        ':password' => $_POST['password'],
        ':mail' => $_POST['mail']


    ));
}
// fin script PHP d'inscription d'un nouvel utilisateur dans une base de données//

//recuperation des données d'inscription et connexion a une session//

if(isset($_POST['submit'])){
    $identifiant = $_POST['identifiant'];
    $password = $_POST['password'];


    $sqlCo = "SELECT * FROM `user` WHERE `identifiant` = '$identifiant' AND `password` = '$password'";
    $req = $db->query($sqlCo);
    $reqFetch = $req->fetch(PDO::FETCH_ASSOC);

    echo '<h1>bonjour ' . $reqFetch['pseudo'] . '</h1>' ;

}
?>






