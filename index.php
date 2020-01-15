<?php
/**
 * Kerrie Low
 * 1.15.20
 * Full Stack Software Development
 * http://www.klow.greenriverdev.com/328/chicken/index.php
 */
// turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);
$title = "Chicken";
$jumbotron = "index.php";
$description = "Git workflow demo";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- bootstrap -->
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- stylesheet -->
    <link rel="stylesheet" href="">
    <!-- title -->
    <title><?php echo $title ?></title>
</head>
<body>
<!-- header -->
<div class="container-fluid jumbotron jumbotron-fluid">
    <h2 class="text-center text-monospace"><?php echo $jumbotron ?></h2>
    <div class="container d-flex justify-content-between">
        <p><?php echo $description ?></p>
        <p class="lead">Written by Kerrie Low</p>
    </div>
</div> <!-- /header -->
<div class="container"> <!-- container -->

</div> <!-- /container -->
<!-- jQuery -->
<!-- slim jQuery does not support AJAX -->
<script src="//code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- my JS -->
<script src=""></script>
</body>
</html>
