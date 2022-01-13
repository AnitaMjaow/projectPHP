<?php

require_once 'php/php_init.php';
include 'navbar.php';

$profileId = $_GET['id']  ?? '';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/index.css" rel="stylesheet">
    <link rel="stylesheet" href="css/posts.css">
    <title>Document</title>
</head>

<body>
    <div class="profile-pic">
        <?php include 'php/php_showgallery.php'; ?>
    </div>
</body>

</html>