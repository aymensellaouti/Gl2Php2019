<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 22/02/2019
 * Time: 09:28
 */

session_start();
if(isset($_SESSION['user'])) {
    echo 'Bonjour'. $_SESSION['user'];
} else {
    echo 'User innexistant';
}