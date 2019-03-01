<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 15/02/2019
 * Time: 09:20
 */
$nom = 'aymen';

function sayMyName(){
    echo $GLOBALS['nom'];
}

sayMyName();