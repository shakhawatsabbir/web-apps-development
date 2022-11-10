<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<section>
    <div class="container-fluid">
        <div class="row">
           <div class="col-12">
               <nav>
                   <div class="navbar navbar-expand-md bg-light ">
                       <div class="navbar-brand"><a href="action.php?page=home " class="text-dark text-decoration-none">LOGO</a></div>
                       <ul class="navbar-nav">
                           <li><a href="action.php?page=home" class=" btn">Home</a></li>
                           <li class="">
                               <?php foreach ($categories as $category){ ?>
                                   <a href="action.php?page=category&&id= <?php echo $category['id']; ?>" class="btn"><?php echo $category['name'] ?></a>
                               <?php } ?>
                           </li>
                       </ul>
                   </div>
               </nav>
           </div>
        </div>
    </div>
</section>

<!---->
<!--<section style="height: 60px; width: 100%; padding-top: 20px">-->
<!--        <a href="action.php?page=home" class="btn btn-outline-warning">Home</a>-->
<!--        --><?php //foreach ($categories as $category){ ?>
<!--            <a href="action.php?page=category&&id= --><?php //echo $category['id']; ?><!--" class="btn btn-outline-warning">--><?php //echo $category['name'] ?><!--</a>-->
<!--        --><?php //} ?>
<!---->
<!--    </div>-->
<!--</section>-->