<?php
/**
Template Name: Controller Videos
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
            	<div class="story-text3">
                	<div class="story-box3">
                    	<div class="story-box-pad">
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    <div id="video-main-content">
		
		<h1 class="control-choose"><span class="white-bg">Select Your Controller</span></h1>
		<div class="control-panels">
			<div class="control-left"><img src="<?php bloginfo('template_directory'); ?>/images/control-panel01.png" /></div>
			<div class="control-right"><img src="<?php bloginfo('template_directory'); ?>/images/control-panel02.png" /></div>
		</div>
		
		<div id = "vfd" class="control-left-list control-list control-hidden">
			<img src="<?php bloginfo('template_directory'); ?>/images/video_arrow.png" class="video-arrow-left" />
			<?php if(have_rows('vfd_operation_videos') || have_rows('vfd_programming_videos')) : ?>
			<div class="video-list">
				<p>
					<?php if(have_rows('vfd_operation_videos')) : ?>
					<h2 class="video-list-title">Operation</h2>
					<?php while(have_rows('vfd_operation_videos')) : the_row(); ?>
					<h3 class="list-video">
						<?php $videoName = get_sub_field('video_name'); ?>
						<?php $videoUrl = get_sub_field('video_link'); ?>
						<a href="#"><?php echo $videoName; ?><input class="video_url" type="hidden" name="video_url" value="<?php echo $videoUrl; ?>" /></a>
					</h3>
					<?php endwhile; endif; ?>
					<?php if(have_rows('vfd_programming_videos')) : ?>
					<h2 class="video-list-title">Programming</h2>
					<?php while(have_rows('vfd_programming_videos')) : the_row(); ?>
					<h3 class="list-video">
						<?php $videoName = get_sub_field('video_name'); ?>
						<?php $videoUrl = get_sub_field('video_link'); ?>
						<a href="#"><?php echo $videoName; ?><input class="video_url" type="hidden" name="video_url" value="<?php echo $videoUrl; ?>" /></a>
					</h3>
					<?php endwhile; endif; ?>
				</p>
			</div>
			<iframe width="100%" height="auto" frameborder="0" allowfullscreen="true"></iframe>
            <div class="frame">
			<p class="video-begin">Click on a Video Title to Begin</p>
            </div>
			<?php else : ?>
			<img src="<?php bloginfo('template_directory'); ?>/images/video_arrow.png" class="video-arrow-left" />
			<div class="video-list">
				<p><em>Content coming soon</em></p>
			</div>
			<?php endif; ?>
		</div>
		
		<div id="led" class="control-right-list control-list control-hidden">
			<img src="<?php bloginfo('template_directory'); ?>/images/video_arrow.png" class="video-arrow-right" />
			<?php if(have_rows('led_operation_videos') || have_rows('led_programming_videos')) : ?>
			<div class="video-list">
				<p>
					<?php if(have_rows('led_operation_videos')) : ?>
					<h2 class="video-list-title">Operation</h2>
					<?php while(have_rows('led_operation_videos')) : the_row(); ?>
					<h3 class="list-video">
						<?php $videoName = get_sub_field('video_name'); ?>
						<?php $videoUrl = get_sub_field('video_link'); ?>
						<a href="#"><?php echo $videoName; ?><input class="video_url" type="hidden" name="video_url" value="<?php echo $videoUrl; ?>" /></a>
					</h3>
					<?php endwhile; endif; ?>
					<?php if(have_rows('led_programming_videos')) : ?>
					<h2 class="video-list-title">Programming</h2>
					<?php while(have_rows('led_programming_videos')) : the_row(); ?>
					<h3 class="list-video">
						<?php $videoName = get_sub_field('video_name'); ?>
						<?php $videoUrl = get_sub_field('video_link'); ?>
						<a href="#"><?php echo $videoName; ?><input class="video_url" type="hidden" name="video_url" value="<?php echo $videoUrl; ?>" /></a>
					</h3>
					<?php endwhile; endif; ?>
				</p>
			</div>
			<iframe width="100%" height="360" frameborder="0" allowfullscreen="true"></iframe>
            <div class="frame">
			<p class="video-begin">Click on a Video Title to Begin</p>
            </div>
			<?php else : ?>
			<img src="<?php bloginfo('template_directory'); ?>/images/video_arrow.png" class="video-arrow-left" />
			<div class="video-soon">Content coming soon</div>
			<?php endif; ?>
		</div>

		<p class="control-disclaimer">This video player requires a JavaScript enabled browser to function correctly. If you are having trouble viewing this page, you can access all of our Blast Chiller / Shock Freezer Controller Videos <a href="http://www.youtube.com/user/ThermoKoolWalkIns" target="_BLANK">here</a>.</p>
	
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
                    <img src="<?php bloginfo('template_directory'); ?>/images/products-white.png" style="width:50px; padding-right:15px; ">
                    </div>
                    <div class="side-title">
                    All Products
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
