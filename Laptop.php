<?php/* Template Name: ELECTRONIC DEVICES 1 laptop */  ?>

<?php get_header(); ?>
<title>laptop</title>

<body>
   
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 main-category">
                    <div class="row">
                        <div id="categoryContent" class="col-12 col-lg-3 mt-3">
                            <div id="categoryHeader" class="header clearfix bg-light">
                                <span class="float-left mx-3 my-2">CATEGORY MENU</span>
                                <a class="btn btn-light float-right d-block d-lg-none" data-toggle="collapse"
                                    href="#collapseCategory" aria-expanded="true" aria-controls="collapseCategory">
                                    <i class="fas fa-bars"></i>
                                </a>
                            </div>
                            <div id="collapseCategory" class="collapse d-lg-block border"
                                aria-labelledby="categoryHeader" data-parent="#categoryContent">
                                <ul class="show list-group list-group-flush">
                                    <ul class="show list-group list-group-flush">
                                        <li class="list-group-item active "><a href="http://localhost:82/wordpress/index.php/electronic-devices-1-laptop/"
                                                class="nav-link">Laptop</a></li>

                                        <li class="list-group-item "><a href="http://localhost:82/wordpress/index.php/electronic-devices-1-computer-peripherals/"
                                                class="nav-link">Computer peripherals</a></li>
                                        <li class="list-group-item"><a href="http://localhost:82/wordpress/index.php/electronic-devices-1-pc-computer/" class="nav-link">PC
                                                Computer</a></li>
                                        <li class="list-group-item"><a href="http://localhost:82/wordpress/index.php/electronic-devices-1-mobile/ " class="nav-link">Mobile</a>
                                        </li>
                                        <li class="list-group-item"><a href="http://localhost:82/wordpress/index.php/electronic-devices-1-mobile_acc/"
                                                class="nav-link">Mobile accessories</a></li>
                                    </ul>
                            </div>
                        </div>
                        <div class="col-12 col-lg-9 category-show product-content">
                            <h3 class="display-4 mx-3"> laptop</h3>
                            <div class="row my-3">




        
                            <?php	$loop =new  WP_Query(array('post_type'=>'eleadd1_cat22','orderby'=>'post_id','order'=>'ASC'));
                
                
                
                
                ?>
                   <?php while($loop->have_posts()) : $loop-> the_post();  ?>
                   <?php $eleimg_ca2t_laptop=get_field('eleimg_cat22_laptop');  ?>








                                <div id="itemNewBook_1" class="item col-12 col-lg-6">
                                    <a href="#">
                                        <div class="row p-3">
                                            <div class="col-5">
                                                <img src="<?php echo $eleimg_ca2t_laptop['url']; ?>" class="img-thumbnail" alt="">
                                            </div>
                                            <div class="col-7">
                                                <h4 class="text-dark"><?php the_field('ele_title_cat2_laptop');  ?></h4>
                                                <p class="author text-dark"><?php the_field('ele_text_cat2_laptop');  ?>
                                                </p>
                                                <div class="reason-set">
                                                    <div class="star-container d-none d-lg-block">
                                                        <div class="tiny-star">
                                                            <div class="current-rating" style="width: <?php the_field('ele_tiny-star');  ?>;"></div>
                                                        </div>
                                                    </div>
                                                    <p class="product-price">
                                                        <span class="display-price"><?php the_field('ele_p_cat2_laptop');  ?></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                               
                                <?php endwhile; wp_reset_query();?>


                               



                            </div>
    </main>
    
</body>

<?php get_footer(); ?>