<?php include 'pages/header.php' ?>

<?php foreach ($blogs as $blog) { ?>
    <div class="div">
        <img src="assets/img/<?php echo $blog['image']; ?>" alt="" height="250" width="300">
        <div class="">
            <h5 class="title"><?php echo $blog['title']; ?></h5>
            <a href="action.php?page=description&&id= <?php echo $blog['id']; ?>" class="btn-blog">Read More</a>
        </div>
    </div>

<?php } ?>



<?php include 'pages/footer.php'?>
