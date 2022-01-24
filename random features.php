

<?php/* Template Name:  ELECTRONIC DEVICES 1 random features*/  ?>
<?php get_header(); ?>
<title>random featurest</title>

<body>
   
    <main>
        <div class="container">

        <?php 
                            $index_h1=get_field('index_h1'); 
                            $index_h2=get_field('index_h2'); 
                            $index_h3=get_field('index_h3'); 
                            $index_h4=get_field('index_h4'); 
                            $index_h5=get_field('index_h5'); 
                            $index_h6=get_field('index_h6');
                            $index_h7=get_field('index_h7'); 
                            $index_h8=get_field('index_h8');
                            $index_h9=get_field('index_h9');
                            $index_h10=get_field('index_h10');
                            $index_h11=get_field('index_h11');
						
							
							
							
							?>
            <h2 class="display-2"> <?php echo $index_h1; ?></h2>
            <span class="fline"> </span>
            <p><?php echo $index_h2; ?></p>
            <p><?php echo $index_h3; ?></p>
            <p><?php echo $index_h4; ?></p>
           <p> <?php echo $index_h5; ?></p>
            <ul>
                <li><?php echo $index_h6; ?></li>
                <li><?php echo $index_h7; ?></li>
                <li><?php echo $index_h8; ?></li>
            </ul>
            <h3>Contact Info</h3>
            <ul>
                <li><?php echo $index_h9; ?></li>
                <li><?php echo $index_h10; ?></li>
                <li><?php echo $index_h11; ?></li>
            </ul>
   
        </div>
    </main>
    
   
</body>
<?php get_footer(); ?>

