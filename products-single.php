<?php
/**
Template Name: Products-Single
**/

get_header(); ?>

<div class="content-wrap">
	<div class="section">
    	<div class="slider2" style="background-image:url(<?php bloginfo('template_directory'); ?>/images/head.jpg); background-size:cover; background-position:center;">
    		
            <div class="crumb">
            	<span style="color:#a2bacb; font-family:fjalla one">PRODUCTS |</span> <?php echo strtoupper(get_the_title()); ?>
            </div>
        </div>
    </div>
    
    <div class="section" style="background-image:url(<?php bloginfo('template_directory'); ?>/images/metal-bg.jpg); background-size:cover; background-position:center;">
    	<div class="shadow">
        </div>
    	<div class="restrictor">
            <div class="story-wrap2">
            	<div class="left">
            	<div class="story-text3b">
                	<div class="story-box3">
                    	
                    
                        
                        
                        
                        
                        
                           <div class="slider4" style="background-image:url(<?php bloginfo('template_directory'); ?>/images/blue-bg.jpg); background-size:cover; background-position:center;">                     
                        	
                            <div class="slider2-img">
                            <img src="<?php the_field('product_cutout'); ?>" style="width:100%;">
                            </div>
                            <div class="slider2-txt">
                            	Model<br>
                            	<div class="slider2-title">
                                	<?php echo strtoupper(get_the_title()); ?>
                                </div><br>
                                <?php the_field('product-blurb'); ?>
                                <br>
                                <a href="<?php the_field('spec_sheet'); ?>">
                                <div class="spec">
                                	Spec Sheet
                                    <img src="<?php bloginfo('template_directory'); ?>/images/blue-right.png" style="width:32px; padding-left:15px; padding-top:5px;">
                                </div><br>
                                </a>
                                <a href="<?php the_permalink(1268); ?>">
                                <div class="vid">
                                	Controller Video
                                    <img src="<?php bloginfo('template_directory'); ?>/images/blue-right.png" style="width:32px; padding-left:15px; padding-top:5px;">
                                </div>
                                </a>
                            </div>
                        	</div>
                        
                        
                        
                        
                        
                        
                        
                    </div>
                    
                    </div>
                   <div class="story-text3b"> 
                    
                    
                    
                    
                    
                    
                    
                    
                    
            
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                   <?php if( have_rows('spec_repeater') ): ?>

	
	<?php while( have_rows('spec_repeater') ): the_row(); 

		// vars
		$title = get_sub_field('title');
		
		

		?> 
                    
                    
                    <div class="story-box33">
                    	<div class="story-box-pad">
                        <div class="single-title">
                    	<h2>
                        <?php echo $title; ?>
                        </h2>
                        </div>
                        
                            	
                           <?php if( have_rows('value_repeater') ): ?>

	<?php while( have_rows('value_repeater') ): the_row(); 

		// vars
		$value = get_sub_field('value');
		
		?>     
                              
                            		<img src="<?php bloginfo('template_directory'); ?>/images/check.png" style="width:32px; padding-right:15px; padding-top:5px; float:left;">
                                
                                
                            	<p style="float:left; width:calc(100% - 32px)"><?php echo $value; ?></p><br>
                            
                        
                        
                        <?php endwhile; ?>

<?php endif; ?>        
                         <?php wp_reset_query(); ?>
                        </div>
                    </div>
                    
                    
                    <?php endwhile; ?>

<?php endif; ?>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
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
                <div class="right">
                <div class="story-image3">
                	<div class="shadow2">
                    </div>
                    <div id="sidebar">
		<?php // get_sidebar(); ?>
		<?php if( $post->post_parent == "131") { ?>
			<div id="sidebar-products-container">
            	
				<div class="table">
                	<div class="side-image">
                    <img src="<?php bloginfo('template_directory'); ?>/images/products-white.png" style="width:50px; padding-right:15px; ">
                    </div>
                    <div class="side-title" style="text-align:left;">
                    ROLL-IN BLAST CHILLER / SHOCK 
FREEZER MODELS
                    
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
                        <?php echo strtoupper(get_the_title()); ?><br><br>
                        	
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
			<div id="sidebar-products-container">
				<h2>Contact Thermo-Kool</h2>
				<div id="contact-form">
				<?php echo do_shortcode('[contact-form-7 id="380" title="Contact form 1"]'); ?>
				</div>
				<?php $parent=$post->post_parent ?>
				<?php query_posts(array('showposts' => 20, 'post_parent' => $parent, 'post_type' => 'page', 'orderby' => 'menu_order', 'order' => 'ASC')); while(have_posts()) : the_post(); ?>
				<div class="sidebar-contact-link">
					<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
				</div>
				<?php endwhile; ?>
			</div>
		<?php } ?>
	</div>
                </div>
                </div>
                
            </div>
        </div>
    </div>
    
</div>

<?php
get_footer();
