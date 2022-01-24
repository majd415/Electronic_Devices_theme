
<?php/* Template Name:  ELECTRONIC DEVICES 1 about*/  ?>
<?php get_header(); ?>
<title>about</title>

<body>
   
    <main>
        <div class="container">
        <?php 
                            $p1_about=get_field('p1_about'); 
                            $p2_about=get_field('p2_about'); 
                            $p3_about=get_field('p3_about'); 

                            $l1_about=get_field('l1_about'); 
                            $l2_about=get_field('l2_about'); 
                            $l3_about=get_field('l3_about'); 

                            $l12_about=get_field('l12_about'); 
                            $l22_about=get_field('l22_about'); 
                            $l23_about=get_field('l23_about'); 


                            $link_about=get_field('link_about'); 
							
							
							
							
							?>
            <h2 class="display-2"><img src="<?php bloginfo('stylesheet_directory') ; ?>/images/logo03.png" alt="" class="w-50"></h2>
         <p><?php echo $p1_about; ?><p>

         <p>   <?php echo $p2_about; ?></p>
            
           <p> <?php echo $p3_about; ?></p>
            
           <ul>
                <li><?php echo $l1_about; ?></li>
                <li><?php echo $l2_about; ?></li>
                <li><?php echo $l3_about; ?></li>
            
            
        </ul>


            <h3>Contact Info</h3>
            
            
            <ul>
                <li><?php echo $l12_about; ?></li>
                <li><?php echo $l22_about; ?></li>
                <li><?php echo $l23_about; ?></li>
            </ul>
            <h3>Company office</h3>
            <iframe class="w-100" src="<?php echo $link_about; ?>"
                width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </main>
    
    
</body>

<?php get_footer(); ?>