<?php
session_start();
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>News Portal | Home Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <?php include('includes/header.php'); ?>

    <div class="container">
        <div class="row pt-5">
            <a href="index.php" class="button-dark" style="width: fit-content;">
                &nbsp;<i class="fas fa-chevron-left" aria-hidden="true"></i>
                &nbsp;&nbsp;Back &nbsp;
            </a>
        </div>
    </div>

    <section class="container pt-4 pb-4">
        <div class="row">
            <div class="col-6 align-items-center">
                <div class="heading-col">
                    <span class="heading"> Latest Video </span>
                </div>
            </div>
            <!-- <div class="col-6 text-end align-items-center d-grid justify-content-end" >
          <a href="view-all.php" class="button-light" style="width: fit-content;"> Subscribe </a>
      </div> -->
        </div>
        <div class="lv-hline"></div>
    </section>

    <!-- Page Content -->
    <div class="container pb-5">
        <div class="row">
            <div class="col-12">
                <div class="all-video-section row">
                    <?php
                    $query = mysqli_query($con, "SELECT * FROM `video` ORDER BY `video_id` ASC") or die(mysqli_error());
                    while ($fetch = mysqli_fetch_array($query)) {
                    ?>
                        <div class="col-md-4">
                            <div class="single-video">
                                <video width="100%" height="240" controls>
                                    <source src="/newsportal/admin/<?php echo $fetch['location'] ?>">
                                </video>

                                <div class="col-md-12" style="word-wrap:break-word;">
                                    <h5 class="text-primary"><?php echo $fetch['video_name'] ?></h5>
                                </div>
                                <div class="row col-md-12">
                                    <div class="col-md-4" style="word-wrap:break-word;">
                                        <h5 class="text-primary"><?php echo $fetch['video_name'] ?></h5>
                                    </div>
                                    <div class="col-md-4" style="word-wrap:break-word;">
                                        <h5 class="text-primary"><?php echo $fetch['video_name'] ?></h5>
                                    </div>
                                    <div class="col-md-4" style="word-wrap:break-word;">
                                    </div>
                                </div>
                                <div class="row col-md-12">
                                    <a href="index.php" class="button-dark" style="width: fit-content;">
                                        Subscribe
                                    </a>
                                </div>
                                <br style="clear:both;" />
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php include('includes/footer.php'); ?>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/custom.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>

</body>

</html>