


<?php/* Template Name:  ELECTRONIC DEVICES 1 laptop company*/  ?>
<?php get_header(); ?>
<title>laptop company</title>
<body>
   
    <main>
    <?php 
                            $index_image=get_field('index_image'); 
                            $index_image2=get_field('index_image2');
                            $index_h1=get_field('index_h1'); 
                        
                         
                            $index_h2=get_field('index_h2'); 
                            $index_h3=get_field('index_h3'); 
                            $index_h4=get_field('index_h4'); 
                            $index_h5=get_field('index_h5'); 

                         
						
							
							
							
							?>
            
        <div class="container ">
            <h2 class="display-2"> <?php echo $index_h1; ?></h2>
            <span class="fline"> </span>
             <ul>
                 <div class="a">
                     <div class="dada">
                <p class="one"><?php echo $index_h2; ?></p>
                <p class="tow"> <?php echo $index_h3; ?></p>
               </div>
                <div class="aa q"> <img src="<?php echo $index_image['url']; ?>"> </div></div>
               <br>
                <div class="a">     
                    
                  <div class="dada">
                 <p class="one"><?php echo $index_h4; ?></p>
               <p class="tow"><?php echo $index_h5; ?></p>
              </div>
              <div class="aa qq "> <img src="<?php echo $index_image2['url']; ?>"> </div></div>
            
        </div>
            
        </div>
    </main> 
   
</body>
<?php get_footer(); ?>   