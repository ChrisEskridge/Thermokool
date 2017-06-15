<?php
/**
Template Name: News
**/

get_header(); ?>




<div class="content-wrap">

	<div class="section">
    	<div class="slider3" style="background-image:url(<?php bloginfo('template_directory'); ?>/images/head.jpg); background-size:cover; background-position:center;">
    		<div class="restrictor">
            <div class="info-menu">
            	<a href="<?php the_permalink(2054); ?>">
            	<div class="info-tab">
                	LATEST
                </div>
                </a>
                <!--<a href="<?php the_permalink(2018); ?>">
                <div class="info-tab">
                	FEATURED
                </div>
                </a>-->
                <a href="<?php the_permalink(82); ?>">
                <div class="info-tab-white">
                	NEWS
                </div>
                </a>
                <a href="<?php the_permalink(7); ?>">
                <div class="info-tab">
                	INSTALLATIONS
                </div>
                </a>
                <a href="<?php the_permalink(782); ?>">
                <div class="info-tab">
                	TURTLE TRACKS
                </div>
                </a>
            </div>
            <!--<a href="<?php the_permalink(782); ?>">
            <div class="info-newsletter">
            	
                <div class="cont-copy">
                                    subscribe to our e-newsletter 
                                    </div>
                                    <div class="cont-image">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/blue-right.png" style="width:20px; height:20px;">
                                    </div>
            </div>
            </a>-->
            </div>
            
        </div>
    </div>
    
     
    
    
    <div class="section" style="background-color:#FFFFFF;">
    	
            <div class="restrictor">
    	<div class="story-wrap">
            	
                <div class="restrictor">
                <div class="feature2">
                	NEWS
                </div>
                
                
                <div class="info-wrap">
                    <div class="info-wrap">
                
                
                
                
                
                
                
                
                
                <?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; ?>
                    		<?php $pub_query = new WP_Query(array( 'post_type' => 'post', 'posts_per_page' => 9, 'orderby' => 'date', 'order' => 'dsc', 'paged' => $paged)); ?>
                     
            <?php if( $pub_query->have_posts() ) : 
	while( $pub_query->have_posts() ) : 
	$pub_query->the_post(); 
	
	
	// vars
												$image = get_field('instal_thumb');
	
	?>              
                          
                 	
                          
                 
                
                
                
                
                
                
                
                
                
                    <div class="info-box">
                        <div class="inner-info">
                        	<div class="info-pic">
                            	<?php if('instal_thumb'): ?>
                            	<img src="<?php the_field('instal_thumb'); ?>" style="width:100%;">
                                <?php endif; ?>
                                
                            	<?php //if(has_post_thumbnail()): ?>
                            	<?php //the_post_thumbnail(array(80,80)); ?>
                                <?php //endif; ?>
                            </div>
                            <div class="info-text">
                            	<div class="info-title">
                                	<a href="<?php the_permalink(); ?>">
                                	<?php the_title(); ?>
                                    </a>
                                </div>
                                <div class="info-date">
                                	<?php echo the_time('M j, Y'); ?>
                                </div>
<div class="info-copy">
                            	<?php the_excerpt(25); ?>
                                </div>                                <a href="<?php the_permalink(); ?>">
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
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   <?php endwhile; endif; wp_reset_query(); ?>
                   
                   
                   
                    <div id="search-page-numbers">
	<?php global $pub_query;
		$big = 999999999;
		echo paginate_links ( array (
		'base' => str_replace ( $big, '%#%', esc_url ( get_pagenum_link ( $big ) ) ) ,
		'format' => '?paged=%#%',
		'current' => max ( 1, get_query_var ( 'paged' ) ) ,
		'total' => $pub_query->max_num_pages
		) );
	?>
</div>
                   
                   
                   
                   
                   
                   
                   
                    
                </div>
                </div>
                
                </div>
            </div>
        </div>
        
    </div>
    
    
    
    
    
</div>















































<!--<div class="content-wrap">
	<div class="section">
    	<div class="slider2" style="background-image:url(<?php bloginfo('template_directory'); ?>/images/head.jpg); background-size:cover; background-position:center;">
    		
            <div class="crumb">
            	<span style="color:#a2bacb; font-family:fjalla one">ABOUT US |</span> <?php echo strtoupper(get_the_title()); ?>
            </div>
        </div>
    </div>
    
    <div class="section" style="background-image:url(<?php bloginfo('template_directory'); ?>/images/metal-bg.jpg); background-size:cover; background-position:center;">
    	<div class="shadow">
        </div>
    	<div class="restrictor">
            <div class="story-wrap2">
            	<div class="story-text3">
                
                
                
                
                
                
                	<div class="story-box3">
                    	
                        
                        
                        
                        
                        
                        
                        
                        
                    	<div class="story-box-pad">
                    
					
                    
                    
                    
                    
              
			
			
			
			
		
		
                    
                 
                    
                    
                    
                    
                    
                    
                    
                    
                    		<?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; ?>
                    		<?php $pub_query = new WP_Query(array( 'post_type' => 'post', 'posts_per_page' => 5, 'orderby' => 'date', 'order' => 'dsc', 'paged' => $paged)); ?>
                     
            <?php if( $pub_query->have_posts() ) : 
	while( $pub_query->have_posts() ) : 
	$pub_query->the_post(); ?>              
                          
                 	<div class="news-excerpt">
				<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
				<span class="news-feed-date"><?php echo the_time('M j, Y'); ?></span><br />
				<?php if(has_post_thumbnail()) { ?>
					<a href="<?php the_permalink(); ?>" class="post-thumbnail"><?php the_post_thumbnail(); ?></a>
					<div class="news-excerpt-pt"><p><?php the_excerpt(25); ?>&nbsp;
					<a href="<?php echo the_permalink(); ?>" class="news-feed-continue">(continue reading)</a></p></div>
				<?php } else { ?>
					<div class="news-excerpt-p"><p><?php the_excerpt(50); ?>&nbsp;
					<a href="<?php echo the_permalink(); ?>" class="news-feed-continue">(continue reading)</a></p></div>
				<?php } ?>
                
               
                
			</div>
                          
                 <?php endwhile; endif; wp_reset_query(); ?>
                    
                     
                    
                    
                    
                    <div id="search-page-numbers">
	<?php global $pub_query;
		$big = 999999999;
		echo paginate_links ( array (
		'base' => str_replace ( $big, '%#%', esc_url ( get_pagenum_link ( $big ) ) ) ,
		'format' => '?paged=%#%',
		'current' => max ( 1, get_query_var ( 'paged' ) ) ,
		'total' => $pub_query->max_num_pages
		) );
	?>
</div>
                    
                        
                        
                        
                        </div>
                        
                       <!-- <div class="story-box-blue">
                        
                        	
                        
                        
                        
                        
                        
                        
                        
                       <!-- <?php if( have_rows('details') ): ?>

						<h2><?php the_field('details_title'); ?></h2>
    
<div class="drop-title-wrap-wrap">
	<?php while( have_rows('details') ): the_row(); 

		// vars
		$drop = get_sub_field('detail_drop');
		$title = get_sub_field('detail_title');

		?>

		
        
        
        				
                        
                        <?php if( $drop ): ?>
                        <div class="drop-title-wrap">
                        	<div class="drop-title" style="cursor:pointer;">
                            	<div class="drop-title-image">
                            		<img src="<?php bloginfo('template_directory'); ?>/images/down.png" style="width:100%; padding-right:15px; padding-top:3.5px;">
                                </div>
                                <div class="drop-title-image2">
                            		<img src="<?php bloginfo('template_directory'); ?>/images/up.png" style="width:100%; padding-right:15px; padding-top:3.5px;">
                                </div>
                            	<?php echo $title; ?>
                            </div>
                            
                            <div id="dropdown" class="drop-detail">
                            	<?php echo $drop; ?>
                            </div>
                        </div> 
        				<?php else: ?>
                        <div class="drop-title-wrap">
                        	<div class="drop-title2">
        					<?php echo $title; ?>
                            
                            </div>
                        </div>
        				<?php endif; ?>
                        
                        
                        
                        
                        
                        

	

	<?php endwhile; ?>

	</div>

<?php endif; ?>-->
                        
                        
                        
                        
                        
                        
                        
                        
                        <!--</div>-->
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    <!--</div>
                </div>
            	<!--<div class="feature">
                	Featured Story
                </div>
                <a href="<?php the_permalink(); ?>">
                <div class="more">
                	<div class="story-copy2">
                		more
                    </div>
                    <div class="story-image2">
                    <img src="<?php bloginfo('template_directory'); ?>/images/products.png" style="width:20px; height:20px;">
                    </div>
                </div>
                </a>-->
                <!--<div class="story-image3">
                	<div class="shadow2">
                    </div>
                    <div id="sidebar">
		<?php // get_sidebar(); ?>
		
			<div id="sidebar-products-container">
            	
				<div class="table">
                	<div class="side-image">
                    <img src="<?php bloginfo('template_directory'); ?>/images/about-us-white.png" style="width:50px; padding-right:15px; ">
                    </div>
                    <div class="side-title">
                    About Us
                    </div>
                </div>
				<?php $parent=$post->post_parent ?>
				<?php query_posts(array('showposts' => 20, 'post_parent' => $parent, 'post_type' => 'page', 'orderby' => 'menu_order', 'order' => 'ASC')); while(have_posts()) : the_post(); ?>
				<div class="sidebar-product-box">
					
					<!--<div class="sidebar-product-box-photo">
						<img src="<?php the_field('product-photo2'); ?>" style="width:100%;">
					</div>-->
                   <!-- <a href="<?php echo the_permalink(); ?>" class="sidebar-product-link">
                    <div class="h3-wrap">
                    <h3><?php the_title(); ?></h3>
                    </div>
                    </a>
					<!--<p><?php $description = get_post_meta($post->ID, 'sidebar-blurb', true); echo $description; ?></p>-->
					<!--<a href="<?php echo the_permalink(); ?>" class="sidebar-product-link"><h4>Click to learn more about<br/><?php the_title(); ?></h4></a>-->
				<!--</div>
				<?php endwhile; ?>
			</div>
		
	</div>
                </div>
                
            </div>
        </div>
    </div>-->
    
<!--</div>-->

<?php
get_footer();
