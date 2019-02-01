<?php get_header(); ?>


<div class="row value-prop">


    <div class="col-md-12">


        <h1 class="main-color bold text-center">Alcohol Rehab and Drug Treatment Centers RED BANK NJ</h1>


        <h2 class="text-center">CALL  <a href="tel:7324551268">(732) 455-1268</a> NOW!</h2>


        <p>If you’re suffering from drug abuse or addiction in RED BANK NJ call Drug Treatment Centers Red Bank for recovery and rehabilitation. </p>


    </div>


</div>
<div class="row features">


  
    <div class="col-md-3">


     <a href="tel:7324551268"><h3>Click To Call Us Today!</h3>
     

        <?php  echo '<img src="' . get_template_directory_uri() . '/assets/img/feature-3.jpg" alt="' . get_bloginfo('name') . '">' ;?></a>


        <p>A caring rehabilitation specialist is waiting to give you a free addicition assessment, call now and begin your road to recovery.</p>


        <a href="tel:7324551268" class="main-color clear">Click to Call Here</a> 


    </div>


    <div class="col-md-3">


        <a href="#" onclick="Comm100API.open_chat_window(event, 1225);"><h3>24/7 Live Support</h3>


        <?php  echo '<img src="' . get_template_directory_uri() . '/assets/img/feature-4.jpg" alt="' . get_bloginfo('name') . '">' ;?> </a>


        <p>We are available 24 hours, 7 days a week to answer your questions conserning recovery. If you or a loved one are seeking recovery chat with us!</p> 


        <a href="#" class="main-color clear" onclick="Comm100API.open_chat_window(event, 1225);"> Click to Start Chat</a>


    </div>                


  <div class="col-md-3">


        <a href="/drug-abuse-prevention/"><h3>Drug Abuse Prevention</h3>


        <?php  echo '<img src="' . get_template_directory_uri() . '/assets/img/feature-1.jpg" alt="' . get_bloginfo('name') . '">' ;?></a>


        <p>The main goal in drug abuse prevention is to ensure that a patient not only achieves sobriety, but that their sobriety is life-long.</p>


        <a href="/drug-abuse-prevention/" class="main-color clear">Learn More Here</a>


    </div>


    <div class="col-md-3">


        <a href="/alcohol-rehab/"><h3>Alcohol Rehab</h3>


        <?php  echo '<img src="' . get_template_directory_uri() . '/assets/img/feature-2.jpg" alt="' . get_bloginfo('name') . '">' ;?></a>


        <p>Drug and alcohol rehab can help people with even the most severe cases of addiction overcome the disease. </p>


        <a href="/alcohol-rehab/" class="main-color clear">Learn More Here</a>


    </div>



</div>


<div class="row">


    <div class="col-md-8 ac-content">


        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>


            <?php the_content(); ?>


        <?php endwhile; else: ?>


        <p><?php _e('No pages were found. Sorry!'); ?></p>


        <?php endif; ?>


        <!-- Columns for Insurance Companies -->


        <?php if ( !function_exists('dynamic_sidebar')


                || !dynamic_sidebar("Upper Footer") ) : ?>  


        <?php endif; ?>   


    </div>


    <?php get_sidebar(); ?>                 


</div>


<?php get_footer(); ?>