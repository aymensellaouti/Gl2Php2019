<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 01/03/2019
 * Time: 09:04
 */

function load($nomClasse) {
   $paths = [
     'class/',
     ''
   ];
   foreach ($paths as $path) {
       $maClasse = $path.$nomClasse.'.php';
       if(file_exists($maClasse))
            require $maClasse;
   }
}

spl_autoload_register('load');