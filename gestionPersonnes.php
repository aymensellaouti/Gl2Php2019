<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 05/04/2019
 * Time: 09:01
 */
require 'testBD.php';
//var_dump($personnes);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <title>Document</title>
</head>
<body>

<table id="personne_table" class="display">
    <thead>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>firstname</th>
        <th>path</th>
        <th>job</th>
        <th>age</th>
        <th>cin</th>
        <th>action</th>
    </tr>
    </thead>
    <tbody>
    <?php

    foreach ($personnes as $personne) {
        ?>

        <tr>
            <td><?= $personne->id ?></td>
            <td><?= $personne->name ?></td>
            <td><?= $personne->firstname ?></td>
            <td><?= $personne->age ?></td>
            <td><?= $personne->path ?></td>
            <td><?= $personne->cin ?></td>
            <td><?= $personne->job ?></td>
            <td>
                <a href="deletePersonne.php?id=<?= $personne->id?>">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                </a>
            </td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>

<script src="node_modules/jquery/dist/jquery.js"></script>
<!--<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>-->
<script src="node_modules/datatables.net/js/jquery.dataTables.js"></script>
<script src="assets/js/app.js"></script>

</body>
</html>