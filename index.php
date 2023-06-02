<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- CSS IN Big_Project -->
    <link rel="stylesheet" href="CSS/index_style.css">
    <link rel="stylesheet" href="CSS/line-icons.css">

    <!-- BOXICON -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Akathospital</title>
  </head>
  <?php use AltoRouter as Router;

require_once 'vendor/autoload.php'; ?>
  <body data-bs-spy="scroll" data-bs-target=".navbar">

    <!-- ----------------------------------------------------NAVBAR------------------------------------------------------ -->
    <?php include('./front_end/navbar.php') ?>
    <!-- ----------------------------------------------------NAVBAR------------------------------------------------------ -->

    <!-- ----------------------------------------------------HERO------------------------------------------------------ -->
    <?php include('./front_end/hero.php') ?>
    <!-- ----------------------------------------------------HERO------------------------------------------------------ -->

    <!-- ----------------------------------------------------Services------------------------------------------------------ -->
    <?php include('./front_end/service.php') ?>
    <!-- ----------------------------------------------------Services------------------------------------------------------ -->

    <!-- ----------------------------------------------------About------------------------------------------------------ -->
    <?php include('./front_end/about.php') ?>
    <!-- ----------------------------------------------------About------------------------------------------------------ -->

    <!-- ----------------------------------------------------Features------------------------------------------------------ -->
    <?php include('./front_end/features.php') ?>
    <!-- ----------------------------------------------------Features------------------------------------------------------ -->

    <!-- ----------------------------------------------------Counters------------------------------------------------------ -->
    <?php include('./front_end/counters.php') ?>
    <!-- ----------------------------------------------------Counters------------------------------------------------------ -->

    <!-- ----------------------------------------------------reviews------------------------------------------------------ -->
    <?php include('./front_end/reviews.php') ?>
    <!-- ----------------------------------------------------reviews------------------------------------------------------ -->

    <!-- ----------------------------------------------------Blog------------------------------------------------------ -->
    <?php include('./front_end/blog.php') ?>
    <!-- ----------------------------------------------------Blog------------------------------------------------------ -->

    <!-- ----------------------------------------------------Contact------------------------------------------------------ -->
    <?php include('./front_end/contact.php') ?>
    <!-- ----------------------------------------------------Contact------------------------------------------------------ -->

    <!-- ----------------------------------------------------Footer------------------------------------------------------ -->
    <?php include('./front_end/footer.php') ?>
    <!-- ----------------------------------------------------Footer------------------------------------------------------ -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- JS -->
    <script src="JS/app.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>