<?php
    include('inc/header.php');
?>

<!--Content-->

<iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Flocalhost%2Fmithu%2F&layout=button_count&size=small&width=78&height=20&appId" width="78" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>

<div class="content ptb-25">
<!--Headlines-->
<div class="container">
    <div class="row">
        <div class="column-60">
            <div class="main_headline" style="background-image: url('image/banner-2.jpg')">
               <div class="headline"> Clean Kitchen for Good Life

               </div>
            </div>
        </div>





        <div class="column-40">
            <div class="side_headline">
                <!--side-News 01-->
                

  <!--side-News 02-->
            <?php
                        $sql="SELECT * FROM news order by rand()  LIMIT 0,2";

                        $run=mysqli_query($con,$sql);

                        while($row=mysqli_fetch_array($run)){
                          $head=$row['head'];
                          $s_p=$row['s_p'];
                          $cat_id=$row['id'];
                          $img=$row['img1'];
                         
                          ?>

                           <div class="side_news">
                            <div class="row">
                            <div class="column-40">
                            <div class="side-news-image"
                            style="background-image: url('admin_area/product_images/m/<?php echo $img;?>')">
                             </div>
                             </div>
                             <div class="column-60">
                                <div class="side-news-data">
                                <h2><a href="single_blog.php?id=<?php echo $cat_id;?>"><?php echo $head;?></a></h2>
                             <p><?php echo $s_p;?></p> 
                             <button class="btn btn-primary"><a href="single_blog.php?id=<?php echo $cat_id;?>">Details</a></button>  
                              </div>
                            </div>
                              </div>
                             </div>
                          <?php

                        }






                   ?>
                

  <!--side-News 03-->
                
                
            </div>
        </div>
    </div>
</div>
<div class="container ptb-25" >
<div class="row">
    <div class="column-70">
<!--Trending News-->
<div class="sec-title">News On Trending</div>
<div class="row">
    <?php
    $sql="SELECT * FROM news order by rand()  LIMIT 6";

                        $run=mysqli_query($con,$sql);

                        while($row=mysqli_fetch_array($run)){
                          $head=$row['head'];
                          $s_p=$row['s_p'];
                          $cat_id=$row['id'];
                          $img=$row['img1'];
                          $cat_name=$row['cat_name'];
                         
                          ?>
    <div class="column-33">
        <div class="news">
            <div class="news-image" style="background-image: url('admin_area/product_images/m/<?php echo $img;?>')"></div>
            <h2><a href="single_blog.php?id=<?php echo $cat_id;?>"><?php echo $head;?></a></h2>
            <ul class="category">
                <li><?php echo $cat_name;?></li>
                
            </ul>
            <p><?php echo $s_p;?>
            </p>
            <a href="single_blog.php?id=<?php echo $cat_id;?>" class="read-more">Read More &rarr;</a>
        </div>
    </div>
<?php }?>
   


   

    
   </div>
 </div>
    <div class="column-30">
        <!--sidebar-->
        <div class="sidebar">
            <div class="sidebar-widget">
        <div class="sec-title">Category</div>
        <ul>
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
    <div class="sidebar-widget">
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
        <div class="sidebar-widget">
            <a href="#"><img src="image/sidebar-ad.jpg" alt="" class="responsive-image"></a>
        </div>
</div>
</div>
</div>

</div>


<!--Section 01-->
<div class="news-section">
    <div class="container">
        
            <div class="sec-title">National</div>
        <div class="row">


             <?php
                         $sql="SELECT * FROM news where cat_id='3' order by rand()  LIMIT 6";

                        $run=mysqli_query($con,$sql);

                        while($row=mysqli_fetch_array($run)){
                          $head=$row['head'];
                          $s_p=$row['s_p'];
                          $cat_id=$row['id'];
                          $img=$row['img1'];
                          $cat_name=$row['cat_name'];
                         
                          ?>
                     <div class="column-20">
                         <div class="news">
                            <div class="news-image" style="background-image: url('News/<?php echo $img;?>')"></div>
                            <h2><a href="single_blog.php?id=<?php echo $cat_id;?>"><?php echo $head;?></a></h2>
                          
                        </div>
                     </div>

                 <?php }?>

                     
                            
                                    
        </div>
    </div>
</div>

<!--Section 02-->
    <div class="news-section">
        <div class="container">
            <div class="sec-title">International</div>
            <div class="row">
            <?php
                         $sql="SELECT * FROM news where cat_id='4' order by rand()  LIMIT 6";

                        $run=mysqli_query($con,$sql);

                        while($row=mysqli_fetch_array($run)){
                          $head=$row['head'];
                          $s_p=$row['s_p'];
                          $cat_id=$row['id'];
                          $img=$row['img1'];
                          $cat_name=$row['cat_name'];
                         
                          ?>
          
                <div class="column-20">
                         <div class="news">
                            <div class="news-image" style="background-image: url('News/<?php echo $img;?>')"></div>
                            <h2><a href="single_blog.php?id=<?php echo $cat_id;?>"><?php echo $head;?></a></h2>
                          
                        </div>
                     </div>

                 <?php }?>                                  
            </div>
       </div>
    </div>
    <!--footer-->
  <?php include('inc/footer.php');?>