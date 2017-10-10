<?php
session_start();
require 'connection.php';
if(isset($_SESSION['login'])) {

    $id = $_SESSION['login'];
    $sql="SELECT * FROM employees INNER JOIN salary on employees.id=salary.id WHERE employees.id='$id' ";
    $result = mysqli_query($con,$sql);
    $row=mysqli_num_rows($result);
    #if($row==1) {
    while ($row=mysqli_fetch_array($result)):
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $row['emp_name']; ?>-mypage-</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">


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


    <!-- Modernizr JS -->
    <script src="../js/modernizr-2.6.2.min.js"></script><!-- js/modernizr-2.6.2.min.js"-->
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="../js/respond.min.js"></script>
    <![endif]-->

</head>


<body>


    <div class="fh5co-loader"></div>

    <div id="fh5co-page">
        <section id="fh5co-header">
            <div class="container" style="background-color: darkcyan">
                <nav role="navigation">

                    <ul class="pull-left left-menu">
                        <li><a href="../index.html">Home</a></li>
                        <li><a href="../about.html">About</a></li>
                        <li><a href="../pricing.html">Pricing</a></li>
                        <li><a href="logout.php">logout</a></li>
                    </ul>
                    <h1 id="fh5co-logo"><a href="../index.html">IOC<span>.</span></a></h1>

                </nav>
            </div>
        </section>
        <!-- #fh5co-header -->

        <section id="fh5co-hero2" data-next="yes">
            <div class="fh5co-overlay"></div>
            <div class="container">

            </div>

        </section>
        <!-- END #fh5co-hero-->


        <section id="fh5co-pricing" style="background-color: white">
            <div class="container">
                <div class="row">
                    <div class="row row-bottom-padded-lg">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <h2 class="fh5co-lead animate-box"><sup>hi/</sup><?php echo $row['emp_name']; ?></h2>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 animate-box">


                        <div class="price"><?php echo $row['Career title']; ?>
                            <small>/Career Title</small>
                        </div>

                        <hr>
                        <ul class="pricing-info">

                            <li><img src="../images/<?php echo $row['emp_img']; ?>" alt="image not found" width="200" height="200"></li>
                            <li>Identification Number : <?php echo $row['Ident_num']; ?></li>
                        </ul>

                    </div>
                    <div class="col-md-6 col-sm-6 animate-box">


                        <div class="price"><?php echo $row['Birthes']; ?>
                            <small>/Birth</small>
                        </div>

                        <hr>
                        <ul class="pricing-info">
                            <li><?php echo $row['sex']; ?></li>

                            <li>Grade : <?php echo $row['Grade']; ?></li>
                            <li>Actual working hours : <?php echo $row['Actual working hours']; ?></li>
                            <li>Time attendance :<?php echo $row['Time attendance']; ?></li>
                            <li>Time to leave : <?php echo $row['Time to leave']; ?></li>
                            <li>Actual working hours : <?php echo $row['Actual working hours']; ?></li>

                        </ul>

                    </div>

                    <div class="col-md-12 col-md-offset-1 animate-box">
                        <br><br>
                        <hr>

                        <div class="price"><?php echo $row['Total salary']; ?>
                            <small>/Total salary </small>
                        </div>
                        <hr>
                    </div>

                    <div class="col-md-6 col-sm-6 animate-box">
                        <ul class="pricing-info">
                            <li>Nominal salary : <?php echo $row['Nominal salary']; ?></li>
                            <li>Premium : <?php echo $row['Premium']; ?></li>


                            <li>Outcome : <?php echo $row['Outcome']; ?></li>
                            <li>Marrige :<?php echo $row['Marrige']; ?></li>
                            <li>Chlidren : <?php echo $row['Chlidren']; ?>/<?php echo $row['no.chlidren']; ?>(Number of chlidren)</li>
                            <li>Retirment : <?php echo $row['Retirment']; ?></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-6 animate-box">
                        <ul class="pricing-info">
                            <li>Abcences : <?php echo $row['Abcences']; ?></li>
                            <li>Working hours : <?php echo $row['Working hours']; ?></li>
                            <li>Actual hours : <?php echo $row['Actual hours']; ?></li>
                            <li>Daily vacation : <?php echo $row['Daily vacation']; ?></li>
                            <li>Time vacation : <?php echo $row['Time vacation']; ?></li>
                            <li>Extra hours : <?php echo $row['Extra hours']; ?></li>
                        </ul>

                </div>


            </div>
    </div>
    </section>

    <?php
#}
        endwhile;?>
        <!-- END #fh5co-pricing -->





        <!-- END #fh5co-testimonials -->


        <!-- END #fh5co-subscribe -->

        <footer id="fh5co-footer">

            <div class="fh5co-copyright animate-box">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="fh5co-left">
                                <small>&copy; 2017 <a href="../index.html">IOC</a> All Rights Reserved.</small>
                            </p>
                            <p class="fh5co-right">
                                <small class="fh5co-right">Designed by Applications team and Database team of HQ6
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END #fh5co-footer -->
    </div>
    <!-- END #fh5co-page -->


    <!-- jQuery -->
    <script src="../js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="../js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="../js/jquery.waypoints.min.js"></script>
    <!-- Flexslider -->
    <script src="../js/jquery.flexslider-min.js"></script>
    <!-- Magnific Popup -->
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/magnific-popup-options.js"></script>

    <!-- Main JS (Do not remove) -->
    <script src="../js/main.js"></script>


</body>
</html>

    <?php
}

else {
    header('location:login.php');
    mysqli_close($con);
}
?>