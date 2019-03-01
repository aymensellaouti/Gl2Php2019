<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 01/03/2019
 * Time: 09:28
 */

session_start();
$username = $_POST['username'];
$password = $_POST['password'];

if($username == 'test' && $password == 'testpwd') {
    $_SESSION['loggedUser']=$username;
    $path = 'homepage.php';
} else {
    $message = 'Veuillez vérifiez vos credentials';
    $_SESSION['messageError'] = $message;
    $path = 'login.php';
}
header('location: '.$path);
