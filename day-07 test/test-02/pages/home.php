<?php include 'pages/header.php'?>

 <div class="">
     <?php foreach ($blogs as $blog) {?>
        <div class="blog">
            <img src="assets/img/<?php echo $blog['image']; ?>" alt="" height="250" width="320">
            <div>
                <h3><?php echo $blog['title']; ?></h3>
                <a href="action.php?page=description&&id=<?php echo $blog['id']; ?> ">Read More</a>
            </div>
        </div>
     <?php } ?>
 </div>

<?php include 'pages/footer.php' ?>
