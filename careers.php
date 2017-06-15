<?php
/**
Template Name: Careers
**/

get_header(); ?>

<div class="content-wrap">
	<div class="section">
    	<div class="slider2" style="background-image:url(<?php bloginfo('template_directory'); ?>/images/head.jpg); background-size:cover; background-position:center;">
    		
            <div class="crumb">
            	<span style="color:#a2bacb; font-family:fjalla one">CONTACT |</span> <?php echo strtoupper(get_the_title()); ?>
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
                    
                    
                    
                    	<h2>
                        	Apply Online
                        </h2>
                        Complete our online <a href="<?php echo the_permalink(1072); ?>">Application for Employment</a>
                        <h2>
                        	Career Inquiry and Resume Upload
                        </h2>
                        
                        
                        <?php echo do_shortcode('[contact-form-7 id="622" title="Contact form 3"]'); ?>
                        
                        
                        
                        </div>
                        
                    	<!--<div class="story-box-pad">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    	<!--<?php the_content(); ?>-->
                        <?php endwhile; ?>
                        <?php endif; ?>
                        
                        
                        
                        
                        
                        
                        <?php the_field('info'); ?>
                        
                        
                        
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
                    <img src="<?php bloginfo('template_directory'); ?>/images/about-us-white.png" style="width:50px; padding-right:15px; ">
                    </div>
                    <div class="side-title">
                    Contact
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

<?php
get_footer();
