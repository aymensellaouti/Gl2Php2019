<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 05/04/2019
 * Time: 09:23
 */
require_once 'autoloader.php';
if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $bdd = ConnexionBD::getInstance();

    $req = $bdd->prepare('delete from personne where id = :id');
    $req->execute(
        array(
            'id'=>$id
        )
    );
}

header('location:gestionPersonnes.php');