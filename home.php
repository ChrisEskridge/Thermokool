<?php
/**
Template Name: Home
**/

get_header(); ?>

<div class="content-wrap">
	<div class="section">
    	<div class="slider">
    		<?php echo do_shortcode('[meteor_slideshow]'); ?>
        </div>
    </div>
    <div class="section" style="background-color:#e0eaf3;">
    <div class="restrictor">
    	<div class="icon-wrap">
        	
            <div class="icons">
             	<a href="<?php the_permalink(346); ?>">
                    <div class="icon">
                        <img src="<?php bloginfo('template_directory'); ?>/images/about.png" style="width:100%;">
                    </div>
                    <div class="icon-title">
                        ABOUT US
                    </div>
                </a>
            </div>
            
            <div class="icons">
            	<a href="<?php the_permalink(338); ?>">
                    <div class="icon">
                        <img src="<?php bloginfo('template_directory'); ?>/images/contact.png" style="width:100%;">
                    </div>
                    <div class="icon-title">
                        CONTACT
                    </div>
                </a>
            </div>
            <div class="icons">
            	<a href="<?php the_permalink(9); ?>">
                    <div class="icon">
                        <img src="<?php bloginfo('template_directory'); ?>/images/green.png" style="width:100%;">
                    </div>
                    <div class="icon-title">
                        GREEN INITIATIVE
                    </div>
                </a>
            </div>
            <div class="icons">
            	<a href="<?php the_permalink(7); ?>">
                    <div class="icon">
                        <img src="<?php bloginfo('template_directory'); ?>/images/instal.png" style="width:100%;">
                    </div>
                    <div class="icon-title">
                        INSTALLATIONS
                    </div>
                </a>
            </div>
            <div class="icons">
            	<a href="<?php the_permalink(129); ?>">
                    <div class="icon">
                        <img src="<?php bloginfo('template_directory'); ?>/images/products.png" style="width:100%;">
                    </div>
                    <div class="icon-title">
                        PRODUCTS
                    </div>
                </a>
            </div>
        </div>
        </div>
    </div>
    <div class="section" style="background-image:url(<?php bloginfo('template_directory'); ?>/images/metal.jpg); background-size:cover; background-position:center;">
    	<div class="find-wrap">
            <div class="find">
            	<a href="<?php the_permalink(1268); ?>">
            	<div class="find-wrap2">
                    <div class="find-pic">
                        <!--<img src="<?php bloginfo('template_directory'); ?>/images/control-thumb.jpg" style="width:100%;">-->
                    </div>
                    <div class="find-text">
                    	<div class="text-bump">
                            Blast Chiller & Shock Freezer
                            <span class="span" >CONTROLLER VIDEOS</span>
                        </div>
                        <div class="text-button">
                            <img src="<?php bloginfo('template_directory'); ?>/images/grey-right-big.png" style="width:100%;">
                        </div>
                    </div>
                </div>
                </a>
            </div>
            <div class="find">
            <a href="<?php the_permalink(589); ?>">
            	<div class="find-wrap2">
                    <div class="find-pic2">
                        <!--<img src="<?php bloginfo('template_directory'); ?>/images/sales-thumb.jpg" style="width:100%;">-->
                    </div>
                    <div class="find-text">
                    	<div class="text-bump">
                        	Find Your Local
                        	<span class="span">SALES REPRESENTATIVES</span>
                        </div>
                        <div class="text-button">
                            <img src="<?php bloginfo('template_directory'); ?>/images/grey-right-big.png" style="width:100%;">
                        </div>
                    </div>
                </div>
                </a>
            </div>
            <div class="find">
            	<a href="<?php the_permalink(342); ?>">
            	<div class="find-wrap2">
                    <div class="find-pic3">
                        <!--<img src="<?php bloginfo('template_directory'); ?>/images/faq-thumb.jpg" style="width:100%;">-->
                    </div>
                    <div class="find-text">
                    	<div class="text-bump">
                            Frequently Asked
                            <span class="span">QUESTIONS & ANSWERS</span>
                        </div>
                        <div class="text-button">
                            <img src="<?php bloginfo('template_directory'); ?>/images/grey-right-big.png" style="width:100%;">
                        </div>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </div>
    <!--<div class="section" style="background-color:#FFFFFF;">
    	
            <div class="story-wrap">
            	<div class="feature">
                	Featured Story
                </div>
                <a href="<?php the_permalink(2018); ?>">
                <div class="more">
                	<div class="story-copy2">
                		more
                    </div>
                    <div class="story-image2">
                    <img src="<?php bloginfo('template_directory'); ?>/images/grey-right.png" style="width:20px; height:20px;">
                    </div>
                </div>
                </a>
                <div class="restrictor">
                
                
                <?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; ?>
                    		<?php $pub_query = new WP_Query(array( 'post_type' => 'featured', 'posts_per_page' => 1, 'orderby' => 'date', 'order' => 'dsc', 'paged' => $paged)); ?>
                     
            <?php if( $pub_query->have_posts() ) : 
	while( $pub_query->have_posts() ) : 
	$pub_query->the_post(); ?>
                
                
                <?php
$mycontent = $post->post_content; // wordpress users only
$word = str_word_count(strip_tags($mycontent));
$m = floor($word / 200);
$s = floor($word % 200 / (200 / 60));
$est = $m . ' minute' . ($m == 1 ? '' : 's') . ', ' . $s . ' second' . ($s == 1 ? '' : 's');
?>
                
                <div class="story-image">
                    <img src="<?php the_field('instal_thumb'); ?>" style="width:100%;">
                </div>
                <div class="story-text">
                	<div class="story-box2">
                    	<div class="title">
                        	<a href="<?php the_permalink(); ?>">
                                	<?php the_title(); ?>
                                    </a>
                        </div>
                        <div class="date">
                        	<?php echo the_time('M j, Y'); ?> <span style="color:#c5c5c5">|</span> <?php echo $est; ?> read time
                        </div>
                        <br>
                        <div class="feat-copy">
                        	<?php the_excerpt(25); ?>
                        </div>
                        <br>
                        <a href="<?php the_permalink(); ?>">
                        <div class="continue">
                                	<div class="cont-copy">
                                    continue reading 
                                    </div>
                                    <div class="cont-image">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/blue-right.png" style="width:20px; height:20px;">
                                    </div>
                                </div>
                        </a>
                    </div>
                    </div>
                    
                    
                    
                   <?php endwhile; endif; wp_reset_query(); ?> 
                    
                    
                    
                    
                </div>
            </div>
        
    </div> -->
    <div class="section" style="background-color:#226289; background-image:url(<?php bloginfo('template_directory'); ?>/images/texture.png); background-size:cover;">
    <div class="shadow">
        </div>
    	<div class="restrictor">
    		<div class="news-wrap">
                <div class="instal">
                	<div class="instal-title">
                    	<div class="instal-left">
                        	<div class="instal-image">
                            	<img src="<?php bloginfo('template_directory'); ?>/images/install.png" style="width:30px; height:30px;">
                            </div>
                            <div class="instal-copy">
                            	<span style="color:#a3bbcc;">INSTALLATIONS</span> | LATEST ARTICLES
                            </div>
                        </div>
                        <a href="<?php the_permalink(7); ?>">
                        <div class="instal-right">
                        	<div class="instal-copy2">
                        		more
                            </div>
                            <div class="instal-image2">
                        		<img src="<?php bloginfo('template_directory'); ?>/images/blue-right.png" style="width:20px; height:20px;">
                            </div>
                        </div>
                        </a>
                    </div>
                    
                    
                    <?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; ?>
                    		<?php $pub_query = new WP_Query(array( 'post_type' => 'installation', 'posts_per_page' => 2, 'orderby' => 'date', 'order' => 'dsc', 'paged' => $paged)); ?>
                     
            <?php if( $pub_query->have_posts() ) : 
	while( $pub_query->have_posts() ) : 
	$pub_query->the_post(); 
	
	// vars
												$image = get_field('instal_thumb');
	
	?> 
                    
                    <?php if(has_post_thumbnail()) { ?>
                    
                    <div class="entry2">
                    	<div class="story-text2">
                        <div class="story-img-wrap">
                        	<div class="story-img">
                            <?php the_post_thumbnail(array(80,80)); ?>
                            </div>
                        </div>
                            <div class="story-box">
                                <div class="title">
                                    <a href="<?php the_permalink(); ?>">
                                	<?php the_title(); ?>
                                    </a>
                                </div>
                                <div class="date">
                                    <?php echo the_time('M j, Y'); ?>
                                </div>
                                <br>
                                <div class="copy">
                                    <?php the_excerpt(15); ?>
                                </div>
                                <br>
                                <a href="<?php the_permalink(); ?>">
                                <div class="continue">
                                	<div class="cont-copy">
                                    continue reading 
                                    </div>
                                    <div class="cont-image">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/blue-right.png" style="width:20px; height:20px;">
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php } else { ?>
                    
                    <div class="entry2">
                    	<div class="story-text2">
                            <div class="story-box">
                                <div class="title">
                                    <a href="<?php the_permalink(); ?>">
                                	<?php the_title(); ?>
                                    </a>
                                </div>
                                <div class="date">
                                    <?php echo the_time('M j, Y'); ?>
                                </div>
                                <br>
                                <div class="copy">
                                    <?php the_excerpt(25); ?>
                                </div>
                                <br>
                                <a href="<?php the_permalink(); ?>">
                                <div class="continue">
                                	<div class="cont-copy">
                                    continue reading 
                                    </div>
                                    <div class="cont-image">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/blue-right.png" style="width:20px; height:20px;">
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    
                    <?php endwhile; endif; wp_reset_query(); ?>
                    
                    
                    
                    
                </div>
                <div class="news">
                	<div class="instal-title">
                    	<div class="instal-left">
                        	<div class="instal-image">
                            	<img src="<?php bloginfo('template_directory'); ?>/images/news.png" style="width:30px; height:30px;">
                            </div>
                            <div class="instal-copy">
                            	<span style="color:#a3bbcc;">NEWS</span> | LATEST ARTICLES
                            </div>
                        </div>
                        <a href="<?php the_permalink(82); ?>">
                        <div class="instal-right">
                        	<div class="instal-copy2">
                        		more
                            </div>
                            <div class="instal-image2">
                        		<img src="<?php bloginfo('template_directory'); ?>/images/blue-right.png" style="width:20px; height:20px;">
                            </div>
                        </div>
                        </a>
                    </div>
                    <?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; ?>
                    		<?php $pub_query = new WP_Query(array( 'post_type' => 'post', 'posts_per_page' => 3, 'orderby' => 'date', 'order' => 'dsc', 'paged' => $paged)); ?>
                     
            <?php if( $pub_query->have_posts() ) : 
	while( $pub_query->have_posts() ) : 
	$pub_query->the_post(); 
	
	// vars
												$image = get_field('instal_thumb');
	
	
	?> 
                    
                    
                    
                    <?php if(has_post_thumbnail()) { ?>
                    
                    <div class="entry2">
                    	<div class="story-text2">
                        <div class="story-img-wrap">
                        	<div class="story-img">
                            <?php the_post_thumbnail(array(80,80)); ?>
                            </div>
                        </div>
                            <div class="story-box">
                                <div class="title">
                                    <a href="<?php the_permalink(); ?>">
                                	<?php the_title(); ?>
                                    </a>
                                </div>
                                <div class="date">
                                    <?php echo the_time('M j, Y'); ?>
                                </div>
                                <br>
                                <div class="copy">
                                    <?php the_excerpt(15); ?>
                                </div>
                                <br>
                                <a href="<?php the_permalink(); ?>">
                                <div class="continue">
                                	<div class="cont-copy">
                                    continue reading 
                                    </div>
                                    <div class="cont-image">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/blue-right.png" style="width:20px; height:20px;">
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php } else { ?>
                    
                    <div class="entry2">
                    	<div class="story-text2">
                            <div class="story-box">
                                <div class="title">
                                    <a href="<?php the_permalink(); ?>">
                                	<?php the_title(); ?>
                                    </a>
                                </div>
                                <div class="date">
                                    <?php echo the_time('M j, Y'); ?>
                                </div>
                                <br>
                                <div class="copy">
                                    <?php the_excerpt(25); ?>
                                </div>
                                <br>
                                <a href="<?php the_permalink(); ?>">
                                <div class="continue">
                                	<div class="cont-copy">
                                    continue reading 
                                    </div>
                                    <div class="cont-image">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/blue-right.png" style="width:20px; height:20px;">
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    
                    <?php endwhile; endif; wp_reset_query(); ?>
                    
                    
                </div>
                <div class="turtle">
                	<div class="turtle-logo">
                    	<img src="<?php bloginfo('template_directory'); ?>/images/turtle-tracks.png" style="width:100%;">
                    </div>
                    <div class="turtle-head-wrap">
                        <div class="turtle-head">
                            THERMO-KOOL’S BIMONTHLY NEWSLETTER
                        </div>
                        
                        <?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; ?>
                    		<?php $pub_query = new WP_Query(array( 'post_type' => 'turtletrack', 'posts_per_page' => 1, 'orderby' => 'date', 'order' => 'dsc', 'paged' => $paged)); ?>
                     
								<?php if( $pub_query->have_posts() ) : 
                        while( $pub_query->have_posts() ) : 
                        $pub_query->the_post(); ?>
                        
                        <div class="dl2">
                    		<a href="<?php the_field('link'); ?>">
                                <div class="continue2">
                                	<div class="cont-wrap">
                                    <div class="cont-copy">
                                    download latest issue 
                                    </div>
                                    <div class="cont-image">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/blue-down.png" style="width:20px; height:20px;">
                                    </div>
                                    </div>
                                </div>
                            </a>
                            
                    </div>
                    
                    
                    
                    <div class="dl2b">
                    		<a href="<?php the_permalink(782); ?>">
                                <div class="continue2">
                                	<div class="cont-wrap2">
                                    <div class="cont-copy">
                                    view archive 
                                    </div>
                                    <div class="cont-image">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/blue-right.png" style="width:20px; height:20px;">
                                    </div>
                                    </div>
                                </div>
                            </a>
                            
                    </div>
                    </div>
                    
                </div>
                
                <?php endwhile; endif; wp_reset_query(); ?>
                
                 <?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; ?>
                    		<?php $pub_query = new WP_Query(array( 'post_type' => 'turtletrack', 'posts_per_page' => 1, 'orderby' => 'date', 'order' => 'dsc', 'paged' => $paged)); ?>
                     
								<?php if( $pub_query->have_posts() ) : 
                        while( $pub_query->have_posts() ) : 
                        $pub_query->the_post(); ?>
                
                <div class="dl">
                    		<a href="<?php the_field('link'); ?>">
                                <div class="continue2">
                                	<div class="cont-wrap">
                                    <div class="cont-copy">
                                    download latest issue 
                                    </div>
                                    <div class="cont-image">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/products.png" style="width:20px; height:20px;">
                                    </div>
                                    </div>
                                </div>
                            </a>
                    <?php endwhile; endif; wp_reset_query(); ?>
                    
                    
                    
                    </div>
                    <div class="dl">
                    		<a href="<?php the_permalink(782); ?>">
                                <div class="continue2">
                                	<div class="cont-wrap2">
                                    <div class="cont-copy">
                                    view archive 
                                    </div>
                                    <div class="cont-image">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/products.png" style="width:20px; height:20px;">
                                    </div>
                                    </div>
                                </div>
                            </a>
                            
                    </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
