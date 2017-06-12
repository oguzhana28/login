<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>inlogscherm</title>
    <link rel="stylesheet" href="<?= URL ?>public/css/style.css">
</head>

<body>
<?php var_dump($_SESSION)?>
<?php if ($_SESSION['loggedIn'] == 1){ ?>
    <div id="menu">
    <ul>
        <li>
            Hi, <?= $_SESSION['username'], $_SESSION['email'] ?>
        </li><br>
        <li>
            <a href="<?= URL ?>home/logout">logout</a>
        </li>
    </ul>
</div>
<?php } ?>
