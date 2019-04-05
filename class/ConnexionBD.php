<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 05/04/2019
 * Time: 08:32
 */
class ConnexionBD
{
    private static $_dbname = "anguforma";
    private static $_user = "root";
    private static $_pwd = "";
    private static $_host = "localhost";
    private static $_bdd = null;
    private function __construct()
    {
        try {
            self::$_bdd = new PDO("mysql:host=" . self::$_host . ";dbname=" . self::$_dbname . ";charset=utf8", self::$_user, self::$_pwd, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'));
        } catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
    public static function getInstance()
    {
        if (!self::$_bdd) {
            new ConnexionBD();
            return (self::$_bdd);
        }
        return (self::$_bdd);
    }
}

