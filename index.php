<?php get_header(); ?>

<div id="container">

	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(3) ) : else : ?>
     <?php endif; ?>
    
         
        <div id="containerIn">
			<a href="index.php"><img src="<?php echo bloginfo('template_url'); ?>/images/button/imnew.gif" class="imgButton" alt="imnew" /></a>
            <a href="?page_id=2" ><img src="<?php echo bloginfo('template_url'); ?>/images/button/connect.gif" class="imgButton" alt="connect" /></a>
           	<a href="?page_id=27"><img src="<?php echo bloginfo('template_url'); ?>/images/button/serve.gif" class="imgButton" alt="serve" /></a>
            <a href="?page_id=25"><img src="<?php echo bloginfo('template_url'); ?>/images/button/give.gif" class="imgButton marginZero" alt="give" /></a>
        </div>
    </div>
 
    <?php get_footer(); ?>