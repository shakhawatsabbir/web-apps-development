<?php include 'pages/header.php' ?>

<section class="py-5">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-8">
                <div class=" border " >
                    <?php foreach ($blogs as $blog) {?>
                        <h3>Description / <?php echo $blog['title']; ?></h3>
                        <hr class="pb-0"/>
                        <img src="assets/img/<?php echo $blog['image'];?>" alt="" height="400" width="100%" class="pt-0">
                        <p class="p-3"><?php echo $blog['description']; ?></p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "pages/footer.php"; ?>
