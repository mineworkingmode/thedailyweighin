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

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <?php include('includes/header.php'); ?>
  <section class="container-fluid banner-section pt-md-5 pb-md-5">
    <div class="row banner-row pt-5 pb-5">
      <h2 class="text-center pt-5"> Lorem Ipsum Dummy Text </h2>
      <p class="text-center text-banner pb-5"> Lorem Ipsum Dummy Text </p>
    </div>
  </section>
  <section class="container pt-4 pb-4">
    <div class="row">
      <div class="col-6 align-items-center">
        <div class="heading-col">
          <span class="heading"> Latest Video </span>
        </div>
      </div>
      <div class="col-6 text-end align-items-center d-grid justify-content-end" >
          <a href="view-all.php" class="button-light" style="width: fit-content;"> Subscribe </a>
      </div>
    </div>
    <div class="lv-hline"></div>
  </section>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="video-section">
          <?php
          $query = mysqli_query($con, "SELECT * FROM `video` ORDER BY `video_id` ASC") or die(mysqli_error());
          while ($fetch = mysqli_fetch_array($query)) {
          ?>
            <div class="col-md-12">
              <div class="single-video">
                <video width="100%" height="240" controls>
                  <source src="/newsportal/admin/<?php echo $fetch['location'] ?>">
                </video>
              </div>
              <div class="col-md-4" style="word-wrap:break-word;">
                <h5 class="text-primary"><?php echo $fetch['video_name'] ?></h5>
              </div>

              <br style="clear:both;" />
            </div>
          <?php
          }
          ?>
        </div>
      </div>

      <!-- Blog Entries Column -->
      <!-- <div class="col-md-8">
        <?php
        if (isset($_GET['pageno'])) {
          $pageno = $_GET['pageno'];
        } else {
          $pageno = 1;
        }
        $no_of_records_per_page = 8;
        $offset = ($pageno - 1) * $no_of_records_per_page;
        $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
        $result = mysqli_query($con, $total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);


        $query = mysqli_query($con, "select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
        while ($row = mysqli_fetch_array($query)) {
        ?>

          <div class="card mb-4">
            <img class="card-img-top" src="admin/postimages/<?php echo htmlentities($row['PostImage']); ?>" alt="<?php echo htmlentities($row['posttitle']); ?>">
            <div class="card-body">
              <h2 class="card-title"><?php echo htmlentities($row['posttitle']); ?></h2>
              <p>
                
                <a class="badge bg-secondary text-decoration-none link-light" href="category.php?catid=<?php echo htmlentities($row['cid']) ?>" style="color:#fff"><?php echo htmlentities($row['category']); ?></a>
                
                <a class="badge bg-secondary text-decoration-none link-light" style="color:#fff"><?php echo htmlentities($row['subcategory']); ?></a>
              </p>

              <a href="news-details.php?nid=<?php echo htmlentities($row['pid']) ?>" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on <?php echo htmlentities($row['postingdate']); ?>

            </div>
          </div>
        <?php } ?>

        <ul class="pagination justify-content-center mb-4">
          <li class="page-item"><a href="?pageno=1" class="page-link">First</a></li>
          <li class="<?php if ($pageno <= 1) {
                        echo 'disabled';
                      } ?> page-item">
            <a href="<?php if ($pageno <= 1) {
                        echo '#';
                      } else {
                        echo "?pageno=" . ($pageno - 1);
                      } ?>" class="page-link">Prev</a>
          </li>
          <li class="<?php if ($pageno >= $total_pages) {
                        echo 'disabled';
                      } ?> page-item">
            <a href="<?php if ($pageno >= $total_pages) {
                        echo '#';
                      } else {
                        echo "?pageno=" . ($pageno + 1);
                      } ?> " class="page-link">Next</a>
          </li>
          <li class="page-item"><a href="?pageno=<?php echo $total_pages; ?>" class="page-link">Last</a></li>
        </ul>

      </div> -->
    </div>
    <!-- /.row -->
    <section class="container pt-4 pb-4">
      <div class="row">
        <div class="col-6 align-items-center">
          <div class="heading-col">
            <span class="heading"> Past Video </span>
          </div>
        </div>
        <div class="col-6 text-end align-items-center d-grid justify-content-end" >
          <a href="view-all.php" class="button-light" style="width: fit-content;"> Subscribe </a>
        </div>
      </div>
      <div class="lv-hline"></div>
    </section>
    <div class="row">
      <div class="col-12">
        <div class="video-section">
          <?php
          $query = mysqli_query($con, "SELECT * FROM `video` ORDER BY `video_id` DESC") or die(mysqli_error());
          while ($fetch = mysqli_fetch_array($query)) {
          ?>
            <div class="col-md-12">
              <div class="video-content">
                <div class="single-video">
                  <video width="100%" height="240" controls>
                    <source src="/newsportal/admin/<?php echo $fetch['location'] ?>">
                  </video>
                </div>
                <div class="col-md-4" style="word-wrap:break-word;">
                  <h5 class="text-primary"><?php echo $fetch['video_name'] ?></h5>
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


  </head>
</body>

</html>