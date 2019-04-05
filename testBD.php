<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 05/04/2019
 * Time: 08:34
 */
require_once 'autoloader.php';

$bd = ConnexionBD::getInstance();

$result = $bd->query('select * from personne');


$personnes = $result->fetchAll(PDO::FETCH_OBJ);