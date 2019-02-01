<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <!-- SEO Specific Metas -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link rel="pingback" type="text/css" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
    <?php
        /*Get theme options*/
        $ac_options = get_option('ac_option_name');
        // var_dump($ac_options);
    ?>
    <!-- HEADER STARTS -->
    <header class="ac-header">
        <div class="container">
            <div class="row">
                <div class="box-modular style">
                    <div class="col-md-4">
                        <a  href="<?php echo home_url();?>">
                            <?php if( "" != $ac_options['ac_logo']) : ?>
                                <img class="logo  pull-left img-responsive" src="<?php echo esc_url($ac_options['ac_logo']); ?>" alt="<?php bloginfo('name'); ?>">
                            <?php endif; ?>
                        </a>
                    </div>
                    <div class="col-md-8">
                       
                                <div class="pull-right">
                                    <?php echo  htmlspecialchars_decode($ac_options['upper_cta']);?>
                                </div>
                            </div>
                            <div class="hidden-sm hidden-md hidden-xs">
                                <nav>
                                    <div id="main-navigation" class="pull-right">
                                        <?php
                                        /*Start Menu*/
                                        wp_nav_menu( array(
                                        'menu'              => 'primary',
                                        'theme_location'    => 'primary',
                                        'depth'             => 2,
                                        'container'         => false,
                                        ));
                                        ?> 
                                    </div>
                                </nav> 
                            </div>
                            <div class="hidden-lg visible-xs visible-sm visible-md">
                                <nav id="menu-primary">
                                    <div id="main-navigation-mobile">
                                      <button id="menu-toggle" ><i class="fa fa-bars"></i> Menu</button>
                                        <?php
                                        /*Start Menu*/
                                        wp_nav_menu( array(
                                        'menu'              => 'primary',
                                        'menu_id'           => 'menu-primary-items',
                                        'theme_location'    => 'primary',
                                        'depth'             => 2,
                                        'container'         => false,
                                        ));
                                        ?> 
                                    </div>
                                </nav> 
                            </div>
                        </div>                  
                    </div>                     
                </div>
            </div>
        </div>

<script type="text/javascript">
    var Comm100API = Comm100API || new Object;
    Comm100API.chat_buttons = Comm100API.chat_buttons || [];
    var comm100_chatButton = new Object;
    comm100_chatButton.code_plan = 1225;
    comm100_chatButton.div_id = 'comm100-button-1225';
    Comm100API.chat_buttons.push(comm100_chatButton);
    Comm100API.site_id = 60793 + 10006;    
    Comm100API.main_code_plan = 1019 + 206;   
    var comm100_lc = document.createElement('script');
    comm100_lc.type = 'text/javascript';
    comm100_lc.async = true;
    comm100_lc.src = 'https://chatserver.comm100.com/livechat.ashx?siteId=' + Comm100API.site_id;
    var comm100_s = document.getElementsByTagName('script')[0];
    comm100_s.parentNode.insertBefore(comm100_lc, comm100_s);
</script>


    </header>
    <!-- HEADER ENDS -->
    <!-- MAIN IMAGE CTA START-->
    <?php if ( is_front_page() ) :?>
        <div class="intro">
            <div class="main-cta">
                <img class="main-image"src="<?php echo $ac_options['ac_main_image'];?>" alt="<?php bloginfo('name'); ?>">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <?php if( "" != $ac_options['caption']) : ?>
                                <?php echo '<p class="ac-caption">' . htmlspecialchars_decode($ac_options['caption']) . '</p>'; ?>
                            <?php endif; ?>
                        </div>
                    </div>        
                </div>
            </div>
        </div>
    <?php endif; ?>    
    <!-- MAIN IMAGE CTA END-->
    <!-- MAIN CONTENT CONTAINER START-->
    <div class="container">
