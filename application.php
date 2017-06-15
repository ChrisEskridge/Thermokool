<?php
/**
Template Name: Application
**/

get_header(); ?>

<div id="page-content">
	
	<div class="section">
    	<div class="slider2" style="background-image:url(<?php bloginfo('template_directory'); ?>/images/head.jpg); background-size:cover; background-position:center;">
    		
            <div class="crumb">
            	<span style="color:#a2bacb; font-family:fjalla one">CAREERS |</span> <?php echo strtoupper(get_the_title()); ?>
            </div>
        </div>
    </div>
	
	
	<div class="restrictor">
	<div id="app-content">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; endif; ?>

	</div>
    </div>

</div>

<?php
get_footer();
