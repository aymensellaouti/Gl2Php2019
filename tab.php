<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 22/02/2019
 * Time: 08:19
 */

$tableauI = array(
    1,2,3,4
);

$chaine = 'Bonjour Gl2 2019 :D';
$stats =count_chars($chaine,1);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
</head>
<body>
<table class="table">
    <tr>
        <th>Caractère</th>
        <th>Nbre d'occurence</th>
    </tr>
    <?php
        foreach ($stats as $carac => $occ ) {
    ?>
    <tr>
        <td><?=chr($carac)?></td>
        <td><?=$occ?></td>
    </tr>
    <?php
        }
    ?>

</table>
</body>
</html>
