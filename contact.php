
<?php/* Template Name:  ELECTRONIC DEVICES 1 contact*/  ?>
<?php get_header(); ?>
<title>contact</title>
<?php

$login_cont=get_field('login_cont'); 

$login_tel_link=get_field('login_tel_link');
$login_email_link=get_field('login_email_link');

$login_email_text=get_field('login_email_text');

$login_tel_text=get_field('login_tel_text');


?>





<body>
   
    <main>
        <div class="container">
            <h3 class="display-3">Contact</h3>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="card border-0">
                        <div class="card-img-top w-50 m-5">
                            <img class="w-100 text-center" src="<?php bloginfo('stylesheet_directory') ; ?>/images/mail.png" alt="Card image cap">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Contact Us</h5>
                            <p class="card-text text-muted">You have problems? Do you need support. Please enter your information to contact us. We will try to answer all your questions.</p>
                        </div>




                        <div class="mx-3">
                        <?php  
                           
                           
                           echo $login_cont;
                           
                        
                           ?>
                           




                             <div class="card-body">
                            <a href="<?php echo $login_tel_link; ?>" class="card-link text-dark"><?php echo $login_email_text; ?></a>
                            <a href="<?php echo $login_email_link; ?>" class="card-link text-dark"><?php echo $login_tel_text; ?></a>
                             </div>
                            </div>
                </div>
                <div class="col-12 col-lg-6">
                <?php  
                           
                           $contact_ele_iframe=get_field('contact_ele_iframe'); 
                           
                           
                           
                          
                           
                           ?>
                    <iframe class="w-100" src="<?php echo $contact_ele_iframe;  ?>"
                        width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </main>
   
   
</body>
<?php get_footer(); ?>