<!doctype html>
<html lang="en">
<head>
    <!DOCTYPE html>
    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ch</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="../favicon.ico">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,600,400italic,700' rel='stylesheet' type='text/css'>

    <!-- Animate.css -->
    <link rel="stylesheet" href="../css/animate.css">
    <!-- Flexslider -->
    <link rel="stylesheet" href="../css/flexslider.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="../css/icomoon.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="../css/bootstrap.css">


    <link rel="stylesheet" href="../css/style.css">




</head>
<body>
<?php
require 'connection.php';
session_start();
$usname=strip_tags($_POST['username']);
$passw=strip_tags($_POST['password']);
$usname=mysqli_real_escape_string($con,$usname);
$passw=mysqli_real_escape_string($con,$passw);

$sql="SELECT * FROM employees WHERE emp_name='$usname' AND password='$passw' ";

$result = mysqli_query($con,$sql);

if (!$row=mysqli_fetch_assoc($result))
{
    ?>

<div id="fh5co-page">
    <section id="fh5co-pricing">
        <div class="container">
            <div class="row">
                <div class="row row-bottom-padded-lg">
                    <div class="col-md-6 col-md-offset-3 text-center">
                    <form   action="login.php">
                        <h2>>_<
                            <br><br>Oops
                            <br><br>
                            The Username <br>OR <br> Password error
                        </h2>
                        <input type="submit"value="Retype User Name or Password">
                    </form>
                </div>


            </div>
        </div>
        </div>
    </section>
</div>
<?php
}
else
{
    $_SESSION[login]=$row['id'];;

    header('location:empinfo.php');

}
mysqli_close($con);
?>
</body>
</html>
