<?php
try{
    $db = new PDO('mysql:host=localhost;dbname=zombie-anarchie;charset=utf8', 'root', '');
} catch(PDOException $e){
    echo 'Erreur : ' . $e->getMessage();
}


?>






