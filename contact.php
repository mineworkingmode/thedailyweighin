
  <?php
  include('includes/config.php');
  if ((isset($_POST['name']) && !empty($_POST['name']))
    && (isset($_POST['email']) && !empty($_POST['email']))
    && (isset($_POST['subject']) && !empty($_POST['subject']))
  ) {
    //if((isset($_POST['name']) && (!empty($_POST['name']))) && (isset($_POST['email']) && !empty($_POST['email'])) && (isset($_POST['subject']) && !empty($_POST['subject']))){
    print_r($_POST);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "manpreetitinfonity@gmail.com";
    $headers = "From : " . $email;

    if (mail($to, $subject, $message, $headers)) {
      echo "E-Mail Sent successfully, we will get back to you soon.";

      mysqli_query($con, "INSERT INTO `contact` VALUES('', '$name', '$email', '$subject', '$messgae')") or die(mysqli_error());

    }
  }

  ?>
  <html>

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

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

    <link rel="stylesheet" href="styles.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

  <body>
  <?php include('includes/header.php'); ?>

    <div class="container">
      <form class="form-contact" method="POST">
        <h2 class="form-contact-heading">Contact Us</h2>
        <label for="inputName" class="sr-only">Name</label>
        <input type="name" name="name" id="inputName" class="form-control" placeholder="Your Name" required>
        <label for="inputEmail" class="sr-only">E-Mail</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="name@email.com" required>
        <label for="inputSubject" class="sr-only">Subject</label>
        <input type="name" name="subject" id="inputSubject" class="form-control" placeholder="Your Subject Line" required>
        <label for="inputMessage" class="sr-only">Message</label>
        <textarea name="message" class="form-control" id="inputMessage" rows="3"></textarea>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Send</button>
      </form>
    </div>


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