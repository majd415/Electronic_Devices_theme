
<?php/* Template Name: ELECTRONIC DEVICES 1 login */  ?>


<title>login</title>



<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ; ?>/css/bootstrap.min.css">
    <link href="<?php bloginfo('stylesheet_directory') ; ?>/https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ; ?>/css/main.css">
</head>

<body>

    <section class="login-page">
        <div class="h-100">
            <div class="container h-100">
                <div class="row justify-content-md-center h-100">
                    <div class="con-logo card border-0 bg-transparent">
                        <div class="logo-login card-img-top align-middle text-center my-1 my-md-5">
                            <img src="<?php bloginfo('stylesheet_directory') ; ?>/images/logo03.png" class="w-100 logo ll" alt="BookShop Logo">
                        </div>
                        <div class="card-body box-shadow rounded bg-light">
                            <h4 class="card-title">Login</h4>
                            
                           <?php  
                           
                           $login_ele=get_field('login_ele'); 
                           echo $login_ele;
                           
                           
                           
                           
                           ?>







                        </div>
                        <div class="card-footer text-center bg-transparent py-5">
                            <p class="text-muted">Copyright &copy; 2021 &mdash; Book Shop</p>
                            <a href="http://localhost:82/wordpress/" class="btn btn-outline-dark">Back to Homepage</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php bloginfo('stylesheet_directory') ; ?>/js/jquery.js"></script>
    <script src="<?php bloginfo('stylesheet_directory') ; ?>/https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory') ; ?>/https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory') ; ?>/js/owl.carousel.js"></script>
    <script src="<?php bloginfo('stylesheet_directory') ; ?>/js/main.js"></script>
</body>

</html>