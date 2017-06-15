<?php
/**
Template Name: contact
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
                    
                    
                    
                    	<div class="contact-wrap">
                        	<div class="contact-title">
                            		<div class="side-image">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/icon-map.png" style="width:50px; padding-right:15px; ">
                                    </div>
                                    <div class="side-title">
                                    Address:
                                    </div>
                                    
                            </div>
                            <div class="contact-text">
                            <p>723 East 21st Street<br>
                                    Post Office Box 989<br>
                                    Laurel, MS 39441<br></p>
                            </div>
                        </div>
                        
                        <div class="contact-wrap">
                        	<div class="contact-title">
                            		<div class="side-image">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/icon-fax.png" style="width:50px; padding-right:15px; ">
                                    </div>
                                    <div class="side-title">
                                    Sales Fax:
                                    </div>
                                    
                            </div>
                            <div class="contact-text">
                            <p>601-649-0558</p>
                            </div>
                        </div>
                        
                        <div class="contact-wrap">
                        	<div class="contact-title">
                            		<div class="side-image">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/icon-phone.png" style="width:50px; padding-right:15px; ">
                                    </div>
                                    <div class="side-title">
                                    Phone (Local):
                                    </div>
                                    
                            </div>
                            <div class="contact-text">
                            <p>601-649-4600</p>
                            </div>
                        </div>
                        
                        <div class="contact-wrap">
                        	<div class="contact-title">
                            		<div class="side-image">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/icon-phone.png" style="width:50px; padding-right:15px; ">
                                    </div>
                                    <div class="side-title">
                                    Phone (Toll Free):
                                    </div>
                                    
                            </div>
                            <div class="contact-text">
                            <p>800-647-7074</p>
                            </div>
                        </div>
                    
                    
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    	<!--<?php the_content(); ?>-->
                        <?php endwhile; ?>
                        <?php endif; ?>
                        
                        
                        
                        
                        
                        
                        <?php the_field('info'); ?>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        </div>
                        
                    	<!--<div class="story-box-pad">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    	<!--<?php the_content(); ?>-->
                        <?php endwhile; ?>
                        <?php endif; ?>
                        
                        
                        
                        
                        
                        
                        <?php the_field('info'); ?>
                        
                        
                        
                        <!--</div>-->
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                  
                        
                        
                        
                        
                       <div id="sidebar">
		<?php // get_sidebar(); ?>
		<?php if( $post->post_parent == "5") { ?>
			<div id="sidebar-products-container">
            	
				<div class="table">
                	<div class="side-image">
                    <img src="<?php bloginfo('template_directory'); ?>/images/products.png" style="width:50px; padding-right:15px; ">
                    </div>
                    <div class="side-title" style="text-align:left;">
                    <?php echo strtoupper(get_the_title()); ?>
                    </div>
                </div>
				<?php $parent=$post->post_parent ?>
				<?php query_posts(array('showposts' => 20, 'post_parent' => "131", 'post_type' => 'page', 'orderby' => 'menu_order', 'order' => 'ASC')); while(have_posts()) : the_post(); ?>
				<div class="sidebar-product-box">
					
					<!--<div class="sidebar-product-box-photo">
						<img src="<?php the_field('product-photo2'); ?>" style="width:100%;">
					</div>-->
                    <a href="<?php echo the_permalink(); ?>" class="sidebar-product-link">
                    <div class="side-bar">
                    
                    <div class="side-image2">
                    
                    <img src="<?php the_field('product_image'); ?>" style="width:100%;">
                    </div>
                    
                    
                    
                    <div class="side-info">
                        <div class="side-title2">
                        	<?php the_title(); ?><br><br>
                        </div>
                        <?php the_field('product-blurb'); ?><br><br>
                        <?php the_field('dimension'); ?>
                        
                    </div>
                    
                    
                    
                    
                    
                    
                    
                    </div>
                    </a>
					<!--<p><?php $description = get_post_meta($post->ID, 'sidebar-blurb', true); echo $description; ?></p>-->
					<!--<a href="<?php echo the_permalink(); ?>" class="sidebar-product-link"><h4>Click to learn more about<br/><?php the_title(); ?></h4></a>-->
				</div>
				<?php endwhile; ?>
			</div>
		<?php } elseif( $post->post_parent == "11" ) { ?>
			<div id="sidebar-products-container">
				<h2>More About Us</h2>
				<?php $parent=$post->post_parent ?>
				<?php query_posts(array('showposts' => 20, 'post_parent' => $parent, 'post_type' => 'page', 'orderby' => 'menu_order', 'order' => 'ASC')); while(have_posts()) : the_post(); ?>
				<div class="sidebar-product-box">
					<h3><?php the_title(); ?></h3>
					<div class="sidebar-aboutus-box-photo">
						<?php if ( get_post_meta($post->ID, "subpage-photo", true) ) { ?>
						<img src="<?php echo $img_path['url'] ?>/<?php echo get_post_meta($post->ID, "subpage-photo", true); ?>" class="sidebar-aboutus-photo" />
						<?php } elseif ( get_post_meta($post->ID, "subpage-photo-sidebar", true) ) { ?>
						<img src="<?php echo $img_path['url'] ?>/<?php echo get_post_meta($post->ID, "subpage-photo-sidebar", true); ?>" class="sidebar-aboutus-photo" />
						<?php } ?>
					</div>
					<p><?php $description = get_post_meta($post->ID, 'sidebar-blurb', true); echo $description; ?></p>
					<a href="<?php echo the_permalink(); ?>" class="sidebar-product-link"><h4>See our <?php the_title(); ?></h4></a>
				</div>
				<?php endwhile; ?>
			</div>
		<?php } elseif( $post->post_parent == "13" ) { ?>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
			<div id="sidebar-products-container2">
            	
				<h2>Contact Thermo-Kool</h2>
				<div id="contact-form">
				<?php echo do_shortcode('[contact-form-7 id="380" title="Contact form 1"]'); ?>
				</div>
				
				
			</div>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
		<?php } ?>
	</div>  
                        
                        
                        
                        
                        
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                     
                      
                      
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
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
