<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Icon
 */

?>


	
	
<footer class="bg-light">
        <div class="foot">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="d-block mb-2 margintoleft">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="14.31" y1="8" x2="20.05" y2="17.94"></line>
                            <line x1="9.69" y1="8" x2="21.17" y2="8"></line>
                            <line x1="7.38" y1="12" x2="13.12" y2="2.06"></line>
                            <line x1="9.69" y1="16" x2="3.95" y2="6.06"></line>
                            <line x1="14.31" y1="16" x2="2.83" y2="16"></line>
                            <line x1="16.62" y1="12" x2="10.88" y2="21.94"></line>
                        </svg>
                        <small class="d-block mb-3 text-muted">&copy; 2020-2021</small>
                    </div>
                    <div class="col-6 col-md">
                        <h5>Features</h5>
                        <ul class="list-unstyled text-small">

                            <a class="text-muted" href="http://localhost:82/wordpress/index.php/electronic-devices-1-random-features/">Random feature</a>
                            </li>
                            <li>
                                <a class="text-muted" href="http://localhost:82/wordpress/index.php/electronic-devices-1-team-features/">Team feature</a>
                            </li>

                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5>Resources</h5>
                        <ul class="list-unstyled text-small">
                            <li>
                                <a class="text-muted" href="http://localhost:82/wordpress/index.php/electronic-devices-1-onlineshop/">Phone Company</a>
                            </li>
                            <li>
                                <a class="text-muted" href="http://localhost:82/wordpress/index.php/electronic-devices-1-laptop-company/">Laptop Company</a>
                            </li>

                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5>About</h5>
                        <ul class="list-unstyled text-small">
                            <li>
                                <a class="text-muted" href="http://localhost:82/wordpress/index.php/electronic-devices-1-about/">About</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5 class="marginleft">method payment</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted page" href="http://localhost:82/wordpress/index.php/electronic-devices-1-pyment/#credit-card"><img class="wi"
                                        src="<?php bloginfo('stylesheet_directory') ; ?>/images/payment method.png"></a></li>
                            <!-- <i class="fa fa-credit-card" aria-hidden="true"> </i>-->
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="modal fade" id="myCart" tabindex="-1" role="dialog" aria-labelledby="myCart" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Your Cart</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-flud">
                        <div class="row">
                            <div class="col-4">
                                <img src="<?php bloginfo('stylesheet_directory') ; ?>/images/لاب-توب-أسوس.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-8">
                                <h3>Ausus laptop</h3>
                                <p class="author"> New version of laptops capable of installing any operating system</p>
                                <p class="display-price text-danger h4">$200</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Pay Now</button>
                </div>
            </div>
        </div>
    </div>
	
<script src="<?php bloginfo('stylesheet_directory') ; ?>/js/jquery.js"></script>
    <script src="<?php bloginfo('stylesheet_directory') ; ?>/https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory') ; ?>/https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory') ; ?>/js/owl.carousel.js"></script>
    <script src="<?php bloginfo('stylesheet_directory') ; ?>/js/main.js"></script>


<?php wp_footer(); ?>

</body>
</html>
