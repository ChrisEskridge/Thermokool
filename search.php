<?php get_header(); ?>

<div class="content-wrap">
	<div class="section">
    	<div class="slider2" style="background-image:url(<?php bloginfo('template_directory'); ?>/images/head.jpg); background-size:cover; background-position:center;">
    		
            <div class="crumb">
            	<span style="color:#a2bacb; font-family:fjalla one"></span> SEARCH RESULTS
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
                    
					
                    
                    
                    
                    
              
			
			
			
			
		
                    
                    
                   
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        <div id="main-content">
		<div id="search-content">
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<?php if(has_post_thumbnail()) { ?>
					<div id="post-<?php the_ID(); ?>" class="search-result-box">
						<a href="<?php the_permalink(); ?>" class="search-result-link">
							<div class="entry entry-thumb">	
							<h3><?php the_title(); ?></h3>
							<?php the_post_thumbnail(array(80,80)); ?>
							<p><?php the_excerpt(40); ?></p>	
							</div>	
						</a>
					</div>
				<?php } else { ?>
					<div id="post-<?php the_ID(); ?>" class="search-result-box">
						<a href="<?php the_permalink(); ?>" class="search-result-link">
							<div class="entry entry-thumb">	
							<h3><?php the_title(); ?></h3>
							<p><?php the_excerpt(60); ?> ...</p>	
							</div>	
						</a>
					</div>
				<?php } ?>
			<?php endwhile; ?>	
			<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>	
			<?php else : ?>	
			<h2>No posts found.</h2>	
			<?php endif; ?>
		</div>
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
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    </div>
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
                <div class="story-image3">
                	<div class="shadow2">
                    </div>
                    <div id="sidebar">
		<?php // get_sidebar(); ?>
		
			<div id="sidebar-products-container">
            	
				<div class="table">
                	<div class="side-image">
                    <img src="<?php bloginfo('template_directory'); ?>/images/products.png" style="width:50px; padding-right:15px; ">
                    </div>
                    <div class="side-title">
                    Thermo-Kool
                    </div>
                </div>
				<?php $parent=$post->post_parent ?>
				<?php query_posts(array('showposts' => 20, 'post_parent' => $parent, 'post_type' => 'page', 'orderby' => 'menu_order', 'order' => 'ASC')); while(have_posts()) : the_post(); ?>
				<div class="sidebar-product-box">
					
					<!--<div class="sidebar-product-box-photo">
						<img src="<?php the_field('product-photo2'); ?>" style="width:100%;">
					</div>-->
                    <a href="<?php echo the_permalink(); ?>" class="sidebar-product-link">
                    <div class="h3-wrap">
                    <h3><?php the_title(); ?></h3>
                    </div>
                    </a>
					<!--<p><?php $description = get_post_meta($post->ID, 'sidebar-blurb', true); echo $description; ?></p>-->
					<!--<a href="<?php echo the_permalink(); ?>" class="sidebar-product-link"><h4>Click to learn more about<br/><?php the_title(); ?></h4></a>-->
				</div>
				<?php endwhile; ?>
			</div>
		
	</div>
                </div>
                
            </div>
        </div>
    </div>
    
</div>
<?php get_footer(); ?>