<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div>
    <a href="action.php?page=home">Home</a> ||
    <?php foreach ($categoris as $category) { ?>
        <a href="action.php?page=category&&id=<?php echo $category['id'];?>"><?php echo $category['name']; ?></a> ||
    <?php } ?>
    <hr/>
</div>