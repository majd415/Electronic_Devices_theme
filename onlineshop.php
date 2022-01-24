<!-- https://www.amazon.com/books-used-books-textbooks/b?ie=UTF8&node=283155
https://arabic.alibaba.com/?src=sem_ggl&cmpgn=598377801&adgrp=29266229202&fditm=&tgt=kwd-192475886202&locintrst=2818&locphyscl=2760&mtchtyp=b&ntwrk=g&device=c&dvcmdl=&creative=483215995437&plcmnt=&plcmntcat=&p1=&p2=&aceid=&position=&gclid=CjwKCAjwvMqDBhB8EiwA2iSmPDzdsAOdOO3LLjQW9vQjGAzeCy24W8qxFksbmEu9rGECnCn99fibmhoCAowQAvD_BwE -->



<?php/* Template Name:  ELECTRONIC DEVICES 1 OnlineShop*/  ?>
<?php get_header(); ?>
<title>OnlineShop</title>
<body>
   
    <main>

    <?php 
                            $index_image=get_field('index_image'); 
                            $index_h1=get_field('index_h1'); 
                            $index_href1=get_field('index_href1');
                            $index_href2=get_field('index_href2');
                            $index_href3=get_field('index_href3');
                            $index_h2=get_field('index_h2'); 
                            $index_h3=get_field('index_h3'); 
                            $index_h4=get_field('index_h4'); 
                            $index_h5=get_field('index_h5'); 

                            $index_link1_text=get_field('index_link1_text');

                            $index_link2_text=get_field('index_link2_text');

                            $index_link3_text=get_field('index_link3_text');
                        
						
							
							
							
							?>
        <div class="container">
            <h2 class="display-2"><img src="<?php echo $index_image['url']; ?>" alt="" class="w-50"></h2>
            <div class="ltreffect wid">
            <p class="para"><?php echo $index_h1; ?></p>
            <ul class="laib  ">
             <li class="firstlaib">
                <i class="fas fa-book"></i>
                 <a class="link" href=" <?php echo $index_href1; ?>"> <?php echo $index_link1_text; ?></a>
                </li>
                <li class="firstlaib">
                    <i class="fas fa-book"></i>
                    <a class="link" href="<?php echo $index_href2; ?>"> <?php echo $index_link2_text; ?></a>
                   </li>
                   <li class="firstlaib">
                    <i class="fas fa-book"></i>
                    <a class="link" href="<?php echo $index_href3; ?>"> <?php echo $index_link3_text; ?></a>
                   </li>      
            </ul>
        </div>
            <div class=" mar ltreffect">
            <p class="par"><?php echo $index_h2; ?> </p>
            <!-- <h3 class="par">Contact Info</h3> -->
            <ul class="lu ">
                <li><?php echo $index_h3; ?></li>
                <li><?php echo $index_h4; ?></li>
                <li><?php echo $index_h5; ?></li>
            </ul>
        </div>    
    </main>
    
</body>

<?php get_footer(); ?>        