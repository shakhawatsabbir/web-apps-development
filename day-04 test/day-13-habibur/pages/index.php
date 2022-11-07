<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../asset/css/bootstrap.css">
    <link rel="stylesheet" href="../asset/css/all.css">
    <link rel="stylesheet" href="../asset/css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand">LOGO</a>
            <ul class="navbar-nav">
                <li><a href="" class="nav-link">Series</a> </li>
                <li><a href="" class="nav-link">String</a> </li>
                <li><a href="" class="nav-link">Array</a> </li>
            </ul>
        </div>
    </nav>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">My Series</div>
                        <div class="card-body">
                            <form action="action.php" method="POST">
                                <div class="row pb-3">
                                    <label class="col-form-label col-md-3">Starting Number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" required name="starting_number" />
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <label class="col-form-label col-md-3">Ending Number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" required name="ending_number" />
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <label class="col-form-label col-md-3">Odd / Even</label>
                                    <div class="col-md-9">
                                        <label> <input type="radio" name="odd_even" value="odd"/> Odd</label>
                                        <label> <input type="radio" name="odd_even" value="even"/> Even</label>
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <label class="col-form-label col-md-3">Result</label>
                                    <div class="col-md-9">
                                        <textarea type="text" class="form-control" readonly ><?php echo isset($result) ? $result: ' '; ?></textarea>
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <label class="col-form-label col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success" name="btn" value="Submit"  />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="../asset/js/jquery-3.6.1.js"></script>
    <script src="../asset/js/bootstrap.js"></script>
</body>
</html>