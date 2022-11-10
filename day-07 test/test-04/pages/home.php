<?php include 'pages/header.php'?>


<section class="">
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              <h3 class="bg-dark  text-center  pb-3 pt-3 "><a href="action.php?page=home" class="text-decoration-none text-white">All Blog Post</a></h3>
          </div>
        </div>
    </div>
</section>
<section class="py-2">
    <div class="container-fluid">
        <div class="row">
            <?php foreach ($blogs as $blog){ ?>
                <div class="col-3   pb-3 " >
                    <img src="assets/img/<?php echo $blog['image']; ?>" alt="" height="250" width="100%">
                    <div class="border pb-3 ps-3">
                        <h5 class="pt-2 pb-3"><?php echo $blog['title']; ?></h5>
                        <a href="action.php?page=description&&id= <?php echo $blog['id']; ?>" class="btn btn-outline-danger">Read More</a>
                    </div>
                 </div>
            <?php } ?>
        </div>
    </div>
</section>
<!--<div>-->
<!--    --><?php //foreach ($blogs as $blog){ ?>
<!--        <div class="blog-div" >-->
<!--            <img src="assets/img/--><?php //echo $blog['image']; ?><!--" alt="" height="250" width="320">-->
<!--            <h3>--><?php //echo $blog['title']; ?><!--</h3>-->
<!--            <a href="action.php?page=description&&id= --><?php //echo $blog['id']; ?><!--" class="blog-btn">Read More</a>-->
<!--        </div>-->
<!--    --><?php //} ?>
<!---->
<!--</div>-->

<?php include 'pages/footer.php'?>
