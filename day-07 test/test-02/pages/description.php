<?php include 'pages/header.php'?>

<div >
    <?php foreach ($blogs as $blog) {?>
        <div class="category-div">
            <h1><?php echo $blog['title']; ?></h1>
            <hr/>
            <img src="assets/img/<?php echo $blog['image']; ?>" alt="" class="img-center">
            <p><?php echo $blog['description'];?></p>
        </div>
    <?php } ?>
</div>

<?php include 'pages/footer.php'?>
