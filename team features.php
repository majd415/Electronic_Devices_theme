


<?php/* Template Name:  ELECTRONIC DEVICES 1 team features*/  ?>
<?php get_header(); ?>
<title>team features</title>

<body>
   
    <main>
        <div class="container ">
        <?php 
                            $index_h1=get_field('index_h1'); 
                            $index_h2=get_field('index_h2'); 
                            $index_h3=get_field('index_h3'); 
                            $index_h4=get_field('index_h4'); 
                            $index_h5=get_field('index_h5'); 
                            $index_h6=get_field('index_h6');
                            $index_h7=get_field('index_h7'); 
                            $index_h8=get_field('index_h8');
                           
						
							
							
							
							?>
            <h2 class="display-2"> <?php echo $index_h1; ?></h2>
            <span class="fline"> </span>
            <p class="para"><?php echo $index_h2; ?></p>
            <p><?php echo $index_h3; ?></p>
            <p><?php echo $index_h4; ?></p>
           <p> <?php echo $index_h5; ?></p>
            <ul>
                <li><?php echo $index_h6; ?></li>
                <li><?php echo $index_h7; ?></li>
                <li><?php echo $index_h8; ?></li>
            </ul>
         
    
        </div>
  
    </main>
   
    
</body>

<?php get_footer(); ?>