<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Creative CV</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/aos.css?ver=1.1.0" rel="stylesheet">
    <link href="css/bootstrap.min.css?ver=1.1.0" rel="stylesheet">
    <link href="css/main.css?ver=1.1.0" rel="stylesheet">
    <noscript>
      <style type="text/css">
        [data-aos] {
            opacity: 1 !important;
            transform: translate(0) scale(1) !important;
        }
      </style>
    </noscript>

        <!-- موقع خطوط جوجل -->
    <!-- https://fonts.google.com/ --> 
    <!-- عند تغير الخط يجب تغير هذا السطر ويمكن الحصول عليه من خلال موقع خطوط جوجل -->
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@700&display=swap" rel="stylesheet">
    <!--  خط الموقع كاملا ويمكنك تغيره من خلال موقع خطوط جوجل-->
    <style>body{font-family: 'El Messiri', sans-serif; font-size: 18px;}</style>
<title>Select Cars data</title>
  </head>
  <body id="top">
    <header>
      <div class="profile-page sidebar-collapse">
        <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-primary" color-on-scroll="400">
          <div class="container">
            <div class="navbar-translate"><a class="navbar-brand"  rel="tooltip">Leddark</a>
              <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
              <ul class="navbar-nav">

                <li class="nav-item"><a class="nav-link smooth-scroll" href="index.html">Home Page</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <div class="page-content">
      <div>
<div class="profile-page">
  <div class="wrapper">
    <div class="page-header page-header-small" filter-color="green">
      <div class="page-header-image" data-parallax="true" style="background-image: url('images/cc-bg-1.jpg')"></div>
      <div class="container">
        <div class="content-center">
          <div class="cc-profile-image"><a href="#"><img src="images/anthony.jpg" alt="Image"/></a></div>
          <div class="h2 title">محمد منير اليازجي</div>
          <p class="category text-white">مطور مواقع , مصمم مواقع , برمجة مواقع وتطبيقات الإنترنت</p>

          <a class="btn btn-primary" href="index.html" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Home Page</a>
          <a class="btn btn-primary smooth-scroll mr-2" href="send.html" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Insert Cars data</a>
          <a class="btn btn-primary" href="data.php" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Show Cars data</a>
          <a class="btn btn-primary" href="car.php" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Select Cars data</a>

        </div>
      </div>

    </div>
  </div>
</div>

<br><br>
<br><br>
<br>






<div class="page-content container jumbotron">

    <div style="background-color: #378C3F; text-align: center;" class="alert alert-success" role="alert">
        بيانات هذه السيارة 
      </div>
      <br>

    <table class="table table-bordered table-hover table-sm table-striped">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Car Name</th>
                <th>Car NO</th>
                <th>Car Color</th>
                <th>Car Year</th>

    
            </tr>
        </thead>
        <tbody>
     
        <?php

          include_once ("connect.php");
          $sql = "SELECT * FROM cardata WHERE carName = 'BMW'";
          $result = $conn->query($sql);
          $i = 1;
          if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {

        ?>
            <tr>
                <td> <?php echo $i; ?> </td>
                <td> <?php echo $row["CarName"]; ?> </td>
                <td> <?php echo $row["CarNo"]; ?> </td>
                <td> <?php echo $row["CarColor"]; ?> </td>
                <td> <?php echo $row["Yeer"]; ?> </td>
            </tr>
        <?php
                  $i++;
                
                }
            }
        ?>

        </tbody>
    </table>


    
</div>






</div>

    </div>
  
    <footer class="footer" id="footer">
      <hr>
      <div class="container text-center"><a class="cc-facebook btn btn-link" target="_blank" href="https://www.facebook.com/profile.php?id=100008101786963"><i class="fa fa-facebook fa-2x " aria-hidden="true"></i></a><a class="cc-twitter btn btn-link " target="_blank"  href="https://twitter.com/Mohamme53471543"><i class="fa fa-twitter fa-2x " aria-hidden="true"></i></a><a target="_blank" class="cc-instagram btn btn-link" href="https://www.instagram.com/mohammedyazje/"><i class="fa fa-instagram fa-2x " aria-hidden="true"></i></a></div>
      <div class="h4 title text-center">محمد اليازجي</div>
      <div class="text-center text-muted">
        <p>&copy; جميع الحقوق محفوظة <br>لصالح المبرمج  - <a class="credit"  target="_blank">محمد اليازجي</a></p>
      </div>
    </footer>
    <script src="js/core/jquery.3.2.1.min.js?ver=1.1.0"></script>
    <script src="js/core/popper.min.js?ver=1.1.0"></script>
    <script src="js/core/bootstrap.min.js?ver=1.1.0"></script>
    <script src="js/now-ui-kit.js?ver=1.1.0"></script>
    <script src="js/aos.js?ver=1.1.0"></script>
    <script src="scripts/main.js?ver=1.1.0"></script>
  </body>
</html>