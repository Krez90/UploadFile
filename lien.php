<?php
include('infosql.php');
$dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass); 

function pourTelecharger($id){
    global $dbh;
    $id=$dbh->prepare("SELECT Url FROM upload WHERE id_fichier= '".$id."'");
    $requeteOK=$id->execute();
    // echo $requeteOK;
    $id=$id->fetch();
    return $id;
}
pourTelecharger();
$id = $_GET['id'];
?>