<?php/* Template Name: Home ELECTRONIC DEVICES 1*/  ?>
<?php get_header(); ?>
<title>Electronic Devices</title>
<body>

    <main>
        <!-- <section class="row w-100 m-0 slides-show">
            <div class="col px-0 w-100 m-0">
                <div class="owl-carousel owl-carousel-primary owl-theme">
                    <div class="item">
                        <a href="product.html">
                            <img class="owl-lazy" data-src="images/slide-1.png" alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="product.html">
                            <img class="owl-lazy" data-src="images/slide-2.png" alt="">
                        </a>
                     </div> -->
        <!-- <div class="item">
                    <a href="#">
                            <img class="owl-lazy" data-src="images/slide-3.png" alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img class="owl-lazy" data-src="images/slide-4.png" alt="">
                        </a>
                    </div>  -->
        </div>
        </div>
        </section>
        </section>


        <div class="container">
            <div class="row recommend">
                <div class="col-12 product-header py-3 mb-sm-3 mb-md-0 clearfix">
                    <h3 class="title display-4">Recommend For You</h3>
                </div>
                <div class="col-12">
                    <div class="recommend-list row _owl-carousel owl-theme w-100 m-0 p-0">


					<?php 
                $loop =new  WP_Query(array('post_type'=>'eleadd','orderby'=>'post_id','order'=>'ASC'));
                
                
                
                
                ?>
                   <?php while($loop->have_posts()) : $loop-> the_post();  ?>
                   <?php $eleimg=get_field('eleimg_image');  ?>
                        <div id="book-1" class="item col-12 col-lg-4 p-3">
                            <a href="#">
                                <div class="box-horizontal d-flex">
                                    <div class="box-image w-50 mr-3">
                                        <img src="<?php echo $eleimg['url']; ?>" alt="" class="w-100 hightofpec ">
                                    </div>
                                    <div class="box-body">
                                        <h3 class="display-5 text-light mt-5"><?php the_field('ele_title');  ?> </h3>
                                        <p class="author text-light"> <?php the_field('ele_text');  ?>  </p>
                                        <div class="reason-set d-block">
                                            <div class="star-container">
                                                <div class="tiny-star">
                                                    <div class="current-rating" style="width: <?php the_field('ele_tiny-star');  ?>;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="b" href="<?php the_field('ele_link');  ?>">
                                            <span class="btn btn-light mt-3">
                                                LEARN MORE
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
						<?php endwhile; wp_reset_query();?>
						

                    </div>
                </div>
            </div>

            <div class="row product-list mt-3">
                <div class="col-12 product-header py-md-3 mb-sm-3 mb-md-0 clearfix">
                    <h3 class="title display-4">Best Seller</h3>
                </div>
                <div class="col-12 product-content py-md-3">
                    <div class="row">

				<?php	$loop =new  WP_Query(array('post_type'=>'eleadd1','orderby'=>'post_id','order'=>'ASC'));
                
                
                
                
                ?>
                   <?php while($loop->have_posts()) : $loop-> the_post();  ?>
                   <?php $eleimg=get_field('ele1img_image');  ?>


                        <div id="item_1" class="item col-12 col-md-6 col-xl-4">
                            <a href="#">
                                <div class="row p-3">
                                    <div class="col-5 p-0">
                                        <img class="img-thumbnail" src="<?php echo $eleimg['url']; ?>">
                                        <div class="product-gift bg-danger">
                                            <i class="fas fa-gift"></i> <?php the_field('ele_p1');  ?>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <h3 class="h5 text-dark"><?php the_field('ele_title');  ?></h3>
                                        <p class="author text-dark"><?php the_field('ele_text');  ?></p>
                                        <div class="reason-set clearfix">
                                            <div class="star-container">
                                                <div class="tiny-star">
                                                    <div class="current-rating" style="width: <?php the_field('ele_tiny-star');  ?>;"></div>
                                                </div>
                                            </div>
                                            <p class="product-price">
                                                <span class="full-price text-muted"><?php the_field('ele_p2');  ?></span>
                                                <span class="display-price"><?php the_field('ele_p3');  ?></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
						</div>
						<?php endwhile; wp_reset_query();?>

                       
                        
                        
                    </div>
                </div>
                <div class="col-12 text-right">
                    <a href="http://localhost:82/wordpress/index.php/electronic-devices-1-categor/" class="btn btn-outline-success">MORE <i
                            class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="row audioBook mt-3">
                <div class="col-12">
                    <div class="card flex-md-row mb-4 box-shadow h-md-250 border-0 c"
                        style="background-color: #e0f7fa;">
                        <div class="card-body d-flex flex-column audio-book cc">
							<?php 
							$lable_ele=get_field('lable_ele'); 
							$image_ele_1=get_field('image_ele_1'); 
							
							
							
							?>
                            <h3 class="">
                                <a class="text-dark" href="#!"><?php echo $lable_ele; ?></a>
                            </h3>
                            <p class="">
                                <a href="<?php bloginfo('stylesheet_directory') ; ?>/audio.php" class="btn btn-outline ">Learn More</a>
                            </p>
                        </div>
                        <img class="card-img-right flex-auto d-sm-block w-50 h-50 m" src="<?php echo $image_ele_1['url'];  ?>"
                            data-holder-rendered="true">
                    </div>
                </div>
            </div>

        </div>
        <div class="bg-dark text-light register">
            <div class="container">
                <div class="row py-md-3 mb-3 mb-md-0">
                    <div class="col-12 col-md-4 mt-5 mt-lg-0">
                        <img src="<?php bloginfo('stylesheet_directory') ; ?>/images/mail.png" class="w-25 mb-3 d-none d-md-block" alt="">
                        <h2>Get our Newsletter</h2>
                        <p class="caption">Renew yourself by reading books</p>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="input-group input-group-lg py-5">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-lg">
                                    <i class="fas fa-envelope"></i>
                                </span>
                            </div>
                            <input type="email" class="form-control" placeholder="example@example.com"
                                aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                            <div class="input-group-append">
                                <button class="btn btnhover" type="button">SUBSCRIBE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 
</body>


        


    



<?php get_footer(); ?>