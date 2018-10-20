<html <?php language_attributes(); ?> >
<body>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<?php wp_head();?>
	</head>
	<body>

        <div id="wrapper">
            <header class="site-header">
                <div class="container">
                    <h1 class="school-logo-text float-left"><a href="<?php echo site_url()?>"><strong><?php echo get_bloginfo('name')?></strong></a></h1>
                    <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
                    <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
                    <div class="site-header__menu group">
                        <?php
                            wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_class' => 'main-navigation' ) );
                        ?>
                        
                        <div class="site-header__util">
                            <a href="#" class="btn btn--small btn--orange float-left push-right"><?php echo e('Login')?></a>
                            <a href="#" class="btn btn--small  btn--dark-orange float-left"><?php echo e('Sign Up')?></a>
                            <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
                        </div>
                    </div>
                </div>
            </header>
    
	