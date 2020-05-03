<footer>
      <div class="container ptb-25">
          <div class="row">
              <div class="column-30">
                   <!--logo and social-->
                <div class="footer-logo">
                    <img src="image/logo.png" alt="" class="responsive-image">
                </div>
                <ul class="footer-social">
                    <li><a href="#"><img src="social/facebook.png" alt="facebook"></a></li>
                    <li><a href="#"><img src="social/youtube.png" alt="youtube"></a></li>
                    <li><a href="#"><img src="social/twitter.png" alt="twitter"></a></li>
                    <li><a href="#"><img src="social/instagram.png" alt="instagram"></a></li>
                </ul>
                <address>
                    GREEN ROAD, DHAKA, BANGLADESH - 1205
                </address>
              </div>
              <div class="column-20">
                  
    <!--Category-->
                    <div class="sec-title">Category</div>
                    <ul class="footer-cat">
                      <?php
                        $sql="SELECT * FROM menu";

                        $run=mysqli_query($con,$sql);

                        while($row=mysqli_fetch_array($run)){
                          $id=$row['id'];
                          $name=$row['name'];

                          ?>

                           <li> <a href="#"><?php echo $name;?></a></li>
                          <?php

                        }



                   ?>
                            
                    </ul>
              </div>
              <div class="column-20">
            <div class="sec-title">Recent News</div>
            <ul
             <?php
    $sql="SELECT * FROM news order by rand()  LIMIT 6";

                        $run=mysqli_query($con,$sql);

                        while($row=mysqli_fetch_array($run)){
                          $head=$row['head'];
                          $cat_id=$row['id'];
                          
                         
                          ?>
                    <li> <a href="single_blog.php?id=<?php echo $cat_id;?>"><?php echo $head?></a></li>
                   <?php }?>
            </ul>
        </div>
              <div class="column-30">
                  
    <!--Photo Gallery-->
                    <div class="sec-title">Photo Gallery</div>
                    <ul class="footer-gallery">
                        <li class="column-33"><img src="news/02.jpg" alt="image not found"></li>
                        
                        <li class="column-33"><img src="news/02.jpg" alt="image not found"></li>
                        
                        <li class="column-33"><img src="news/02.jpg" alt="image not found"></li>
                        
                        <li class="column-33"><img src="news/02.jpg" alt="image not found"></li>
                        
                        <li class="column-33"><img src="news/02.jpg" alt="image not found"></li>
                        
                        <li class="column-33"><img src="news/02.jpg" alt="image not found"></li>
                    </ul>
              </div>
          </div>
      </div>
<div class="footer-bottom">
    <a href="#">noushinpro</a> NEWS WEBSITE &copy; 2019
</div>
  </footer>
   


  

    <!--Photo Gallery-->
</body>
</html>