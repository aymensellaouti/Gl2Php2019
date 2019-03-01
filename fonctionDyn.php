<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 22/02/2019
 * Time: 08:58
 */
$tableau = array(
    array(1,2,3),
    'aymen',
    'GL2',
    'na9es mel 7ess',
    2,
    3.4,
    5,
    array('test'=>'abc')
);

function extractTabByType(array $tab, string $type) : array {
    $maFontion = 'is_'.$type;
    echo $maFontion;
    $result = array();
    $k = 0;
    if (function_exists($maFontion)) {
        foreach ($tab as $item) {
            if ($maFontion($item)) {
                $result[$k++] = $item;
            }
        }
    }
    return $result;
}

var_dump(extractTabByType($tableau, 'int'));
