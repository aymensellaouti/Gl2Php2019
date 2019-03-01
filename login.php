<?php
session_start();
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

<form action="authentification.php" method="post">
    <input type="text" class="form-control" name="username">
    <input type="password" class="form-control" name="password">
    <input type="submit" class="btn btn-success">
</form>
<?php
    if (isset($_SESSION['messageError'])) {
?>
<div class="alert alert-danger">
    <?= $_SESSION['messageError'] ?>
</div>
<?php
        unset($_SESSION['messageError']);
 }
?>
</body>
</html>
