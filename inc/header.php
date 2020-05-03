<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News Website Design with HTML5 and CSS3 || Noushin Pro</title>
    <link rel="stylesheet" href="style.css">
    
  
</head>
<body>
<?php include('inc/db.php');?>


    <!--Header-->
<header>

    <!--Header top-->
<div class="header_top">
  <div class="container">
      <div class="row">
          <div class="column-30">
              <div class="logo">
                  <a href="#"><img src="image/logo.png" alt="noushin pro" class="responsive-image"></a>
              </div>
            </div>
              <div class="column-70">
                    <a href="#"><img src="image/header-ad.jpg" alt="Advertisement"class="responsive-image"></a>
          </div>
      </div>
  </div>
</div>
    <!--Navigation-->
<nav>
    <div class="container">
<ul>
  <li> <a href="index.php">Home</a></li>
    <li> <a href="about.php">About</a></li>
    <li> <a href="international.php">International</a></li>
    <li> <a href="entertainment.php">Entertainment</a></li>
    <li> <a href="sports.php">Sports</a></li>
    <li> <a href="audio.php">Audio & Video</a></li>
</ul>
</div>
</nav>
    <!--Breaking News-->
    <div class="breaking_news">
        <div class="container">
            <div class="row">
                <div class="column-20">
                    <div class="update-left"> UPDATES</div>
                </div>
                <div class="column-80">
                    <div class="update-right">
                      <?php
                      $sql="SELECT * FROM news order by rand()  LIMIT 0,4";

                        $run=mysqli_query($con,$sql);

                        $row=mysqli_fetch_array($run);
                          $head=$row['head'];
                          
                         
                          ?>
                    <marquee><?php echo $head;?></marquee>
                  <?php ?>
                </div>
                </div>
            </div>
        </div>

    </div>
</header>
   
