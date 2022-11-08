<?php include 'pages/header.php'?>

<?php foreach ($blogs as $blog) { ?>
    <div class="discription-div margin-top">
        <h5 class="title">Description / <?php echo $blog['title']; ?></h5>
        <hr/>
        <img src="assets/img/<?php echo $blog['image']; ?>" alt="" class="center" >
        <p><?php echo $blog['description']; ?> </p>
    </div>


<?php } ?>

<?php include 'pages/footer.php'?>
