
<?php/* Template Name:  ELECTRONIC DEVICES 1 product */  ?>
<?php get_header(); ?>
<title>product  </title>
<body>
   
    <main>
        <div class="container">
            <div class="row my-3 main-product-info rounded border-0">
                <div class="col-12 px-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb" style="background-color: transparent">
                            <li class="breadcrumb-item">
                                <a href="http://localhost:82/wordpress/">Store</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="http://localhost:82/wordpress/index.php/electronic-devices-1-categor/">Others Contry Books</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Novel</li>
                        </ol>
                    </nav>
                </div>
                <?php 
							$pro_text=get_field('pro_text'); 
							$pro_imag=get_field('pro_imag'); 
                            $pro_include_num=get_field('pro_include_num');
                            $pro_saved=get_field('pro_saved');
                            $pro_rrp=get_field('pro_rrp');
                            $pro_saved_2=get_field('pro_saved_2');
                            
							
							$pro_Learn_more_linkpage=get_field('pro_Learn_more_linkpage');
							?>
                <div class="col-12 col-md-4 product-image p-5 m-0">
                    <img src="<?php echo $pro_imag['url']; ?>" class="w-100" alt="Product">
                </div>
                <div class="col-12 col-md-8 product-info">
                    <h1 class="h3 font-weight-normal pb-3"><?php echo $pro_text; ?></h1>
                    <div class="row">
                        <div class="col-12 col-md-8">
                            <div class="product-block">
                                <div class="display-price">
                                    <span class="h4 text-danger"><?php echo $pro_include_num; ?></span>
                                    <span class="text-muted">
                                        <small>Include VAT</small>
                                    </span>
                                </div>
                                <div class="price-money-info">
                                    <span class="text-muted">Saved: </span>
                                    <span class="text-danger"><?php echo $pro_saved; ?></span>
                                    <span class="text-muted">($&nbsp;<?php echo $pro_saved_2; ?>)</span>
                                </div>
                                <div class="full-price">
                                    <span class="text-muted">
                                        RRP:
                                        <del><?php echo $pro_rrp; ?></del>
                                    </span>
                                </div>
                            </div>
                            <div class="list-price-footer border-top mt-3">
                                <div class="giftMessage my-3">
                                    <img src="<?php bloginfo('stylesheet_directory') ; ?>/images/gift.png" class="d-inline" alt="Gift Message" width="28"
                                        height="28">
                                    <p class="d-inline ml-3">
                                        <span class="font-weight-bold">Want to gift and send cards?</span>
                                        <a class="addtocart" href="<?php echo $pro_Learn_more_linkpage; ?>">Learn more.</a>
                                    </p>
                                </div>
                                <div class="d-flex w-100">
                                    <div class="input-group mt-3 mr-2 w-100">
                                        <div class="input-group-prepend ">
                                            <button id="cartMinus" class="btn btn-outline" type="button">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                        <input type="text" id="cartAmount" class="form-control" value="1">
                                        <div class="input-group-append">
                                            <button id="cartPlus" class="btn btn-outline" type="button">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <a href="#!" class="btn-outline btn text-light mt-3 d-inline">
                                        <i class="fas fa-cart-plus mr-3"></i> Add to Cart</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="recommend product-content col-12 m-0 p-0">
                    <h3 class="display-4">Maybe You Like</h3>
                    <div class="row">



                    <?php	$loop =new  WP_Query(array('post_type'=>'eleadd_mybe','orderby'=>'post_id','order'=>'ASC'));
                
                
                
                
                ?>
                   <?php while($loop->have_posts()) : $loop-> the_post();  ?>
                   <?php $pro_eleimg=get_field('pro_eleimg');  ?>
                        <div id="item_1" class="item col-12 col-md-6 col-xl-4">
                            <a href="#">
                                <div class="row p-3">
                                    <div class="col-5 p-0">
                                        <img class="img-thumbnail" src="<?php echo $pro_eleimg['url']; ?>">
                                        <div class="product-gift bg-danger">
                                            <i class="fas fa-gift"></i> <?php the_field('ele_pro_p');  ?>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <h3 class="h5 text-dark"><?php the_field('ele_p_lable');  ?></h3>
                                        <p class="author text-dark"><?php the_field('ele_p_text');  ?></p>
                                        <div class="reason-set clearfix">
                                            <div class="star-container">
                                                <div class="tiny-star">
                                                    <div class="current-rating" style="width: <?php the_field('ele_tiny-star');  ?>;"></div>
                                                </div>
                                            </div>
                                            <p class="product-price">
                                                <span class="full-price text-muted"><?php the_field('ele_pro_p2');  ?></span>
                                                <span class="display-price"><?php the_field('ele_pro_p3');  ?></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php endwhile; wp_reset_query();?>
                        



                    </div>
                </div>
                <div id="product-detail" class="col-12 product-detail p-0 m-0 mt-5 ">
                    <div class="card text-center">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item" id="introduceBook">
                                    <a class="nav-link active" href="#!" data-toggle="collapse"
                                        data-target="#introduce-book" aria-expanded="true"
                                        aria-controls="introduce-book">Description of the device</a>
                                </li>
                                <li class="nav-item" id="infoBook">
                                    <a href="#!" class="nav-link" data-toggle="collapse" data-target="#info-book"
                                        aria-expanded="true" aria-controls="info-book">device Details</a>
                                </li>
                            </ul>
                        </div>
                        <?php 
							$lable_info_pro=get_field('lable_info_pro'); 
                            $text_info_pro=get_field('text_info_pro'); 
                            $text_info_pro2=get_field('text_info_pro2'); 
							
							
							
							?>
                        <div class="card-body rrr">
                            <div id="introduce-book" class="collapse show text-left" aria-labelledby="introduceBook"
                                data-parent="#product-detail">
                                <h5 class="card-title"><?php echo $lable_info_pro; ?></h5>
                                <h6><?php echo $text_info_pro; ?></h6>
                                <p><?php echo $text_info_pro2; ?></p>
                               
                                <a href="#" class="btn btn-outline">Buy Now</a>

                            </div>
                            <div id="info-book" class="collapse text-left" aria-labelledby="infoBook"
                                data-parent="#product-detail">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">The company: <span class="float-right"> Huawie</span>
                                    </li>
                                    <li class="list-group-item">Version: <span class="float-right"> 2014....2015</span>
                                    </li>
                                    <li class="list-group-item">ISBN-10: <span class="float-right"> 1846042844</span>
                                    </li>
                                    <li class="list-group-item">Language: <span class="float-right"> Vietnamese</span>
                                    </li>
                                    <li class="list-group-item">Product Dimensions: <span class="float-right">14.4 x 2 x
                                            22.2 cm</span></li>
                                    <li class="list-group-item">Hardcover: <span class="float-right"> 224 pages</span>
                                    </li>
                                </ul>
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