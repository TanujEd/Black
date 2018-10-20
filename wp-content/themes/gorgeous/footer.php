 
 <!-- <h5>Unique things is always unique</h5>

 	<?php //echo get_theme_mod('unique_list') ?>

 <?Php //get_footer(); ?> -->

 

    <footer class="site-footer">

		<h4>dhdsahdsfhfdshsdhsadf</h4>

<div class="site-footer__inner container container--narrow">

<div class="group">

<div class="site-footer__col-one">
 
  <?php if ( is_active_sidebar( 'natural-footer-1' ) ) : ?>
  <?php dynamic_sidebar( 'natural-footer-1' ); ?>
  <?php endif; ?>
  </div>
  
  <div class="site-footer__col-two-three-group">
  <div class="site-footer__col-two">


   <?php if ( is_active_sidebar( 'natural-footer-2' ) ) : ?>
	<?php dynamic_sidebar( 'natural-footer-2' ); ?>
   <?php endif; ?>

   </div>
	<div class="site-footer__col-three">

	<?php if ( is_active_sidebar( 'natural-footer-3' ) ) : ?>
	<?php dynamic_sidebar( 'natural-footer-3' ); ?>
	<?php endif; ?>
  </div>
 </div>

<div class="site-footer__col-four">
  <?php if ( is_active_sidebar( 'natural-footer-4' ) ) : ?>
	<?php dynamic_sidebar( 'natural-footer-4' ); ?>
	<?php endif; ?>
  </div>
 </div>

</div>


</footer>


</div>   

<?php wp_footer(); ?>
