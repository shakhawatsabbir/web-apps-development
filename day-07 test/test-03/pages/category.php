<?php include 'pages/header.php'?>

<div>
    <?php foreach ($blogs as $blog) {?>
        <img src="assets/img/<?php echo $blog['image']; ?>" alt="" height="250" width="300">
        <div >
            <h3><?php echo $blog['title']; ?></h3>
            <a href="">Read More</a>
        </div>
    <?php } ?>
</div>

<?php include 'pages/footer.php' ?>

