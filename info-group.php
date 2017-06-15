<?php
/**
Template Name: Info Group
**/

get_header(); ?>

<div class="content-wrap">
	<div class="section">
    	<div class="slider3" style="background-image:url(<?php bloginfo('template_directory'); ?>/images/head.jpg); background-size:cover; background-position:center;">
    		<div class="restrictor">
            <div class="info-menu">
            	<a href="<?php the_permalink(2054); ?>">
            	<div class="info-tab-white">
                	LATEST
                </div>
                </a>
                <!--<a href="<?php the_permalink(2018); ?>">
                <div class="info-tab">
                	FEATURED
                </div>
                </a>-->
                <a href="<?php the_permalink(82); ?>">
                <div class="info-tab">
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
    
     <!--<div class="section" style="background-color:#FFFFFF;">
    	
            <div class="story-wrap3">
            	
                
                <div class="restrictor">
                 <?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; ?>
                    		<?php $pub_query = new WP_Query(array( 'post_type' => 'featured', 'posts_per_page' => 1, 'orderby' => 'date', 'order' => 'dsc', 'paged' => $paged)); ?>
                     
            <?php if( $pub_query->have_posts() ) : 
	while( $pub_query->have_posts() ) : 
	$pub_query->the_post(); ?>
                
                
                
                
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
                        	<?php echo the_time('M j, Y'); ?> <span style="color:#c5c5c5">|</span> 10 minute read
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
        
    </div>-->
    
    <!--<div class="section" style="background-color:#e0eaf3;">
    <div class="restrictor">
    	<div class="story-wrap">
            	
                <div class="restrictor">
                <div class="feature2">
                	FEATURED STORIES
                </div>
                <a href="<?php the_permalink(2018); ?>">
                <div class="more2">
                	<div class="story-copy2">
                		| &nbsp; more
                    </div>
                    <div class="story-image2">
                    <img src="<?php bloginfo('template_directory'); ?>/images/grey-right.png" style="width:20px; height:20px;">
                    </div>
                </div>
                </a>
                
                <div class="info-wrap">
                    
                
                
                
                
                
                <?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; ?>
                    		<?php $pub_query = new WP_Query(array( 'post_type' => 'featured', 'posts_per_page' => 3, 'orderby' => 'date', 'order' => 'dsc', 'paged' => $paged)); ?>
                     
            <?php if( $pub_query->have_posts() ) : 
	while( $pub_query->have_posts() ) : 
	$pub_query->the_post(); ?>              
                          
                 	
                          
                 
                
                
                
                
                
                
                
                
                
                    <div class="info-box">
                        <div class="inner-info">
                        	<div class="info-pic">
                            	
                            	<img src="<?php the_field('instal_thumb'); ?>" style="width:100%;">
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
                   
                   
                   
                   
                </div>
                
                </div>
            </div>
        </div>
    </div>-->
    <div class="section" style="background-color:#FFFFFF;">
    	
            <div class="restrictor">
    	<div class="story-wrap">
            	
                <div class="restrictor">
                <div class="feature2">
                	NEWS
                </div>
                <a href="<?php the_permalink(82); ?>">
                <div class="more-news">
                	<div class="story-copy2">
                		| &nbsp; more
                    </div>
                    <div class="story-image2">
                    <img src="<?php bloginfo('template_directory'); ?>/images/grey-right.png" style="width:20px; height:20px;">
                    </div>
                </div>
                </a>
                
                <div class="info-wrap">
                    <div class="info-wrap">
                
                
                
                
                
                
                
                
                
                <?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; ?>
                    		<?php $pub_query = new WP_Query(array( 'post_type' => 'post', 'posts_per_page' => 3, 'orderby' => 'date', 'order' => 'dsc', 'paged' => $paged)); ?>
                     
            <?php if( $pub_query->have_posts() ) : 
	while( $pub_query->have_posts() ) : 
	$pub_query->the_post(); ?>              
                          
                 	
                          
                 
                
                
                
                
                
                
                
                
                
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
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                    
                </div>
                </div>
                
                </div>
            </div>
        </div>
        <div class="restrictor">
        <div class="bar">
        </div>
        </div>
    </div>
    <div class="section" style="background-color:#FFFFFF;">
    	
            <div class="restrictor">
    	<div class="story-wrap">
            	
                <div class="restrictor">
                <div class="feature2">
                	INSTALLATIONS
                </div>
                <a href="<?php the_permalink(7); ?>">
                <div class="more-installation">
                	<div class="story-copy2">
                		| &nbsp; more
                    </div>
                    <div class="story-image2">
                    <img src="<?php bloginfo('template_directory'); ?>/images/grey-right.png" style="width:20px; height:20px;">
                    </div>
                </div>
                </a>
                <div class="info-wrap">
                
                
                
                
                
                
                
                
                
                <?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; ?>
                    		<?php $pub_query = new WP_Query(array( 'post_type' => 'installation', 'posts_per_page' => 3, 'orderby' => 'date', 'order' => 'dsc', 'paged' => $paged)); ?>
                     
            <?php if( $pub_query->have_posts() ) : 
	while( $pub_query->have_posts() ) : 
	$pub_query->the_post(); ?>              
                          
                 	
                          
                 
                
                
                
                
                
                
                
                
                
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
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                    
                </div>
                
                </div>
            </div>
        </div>
        
    </div>
    
    <div class="section" style="background-color:#226289; background-image:url(<?php bloginfo('template_directory'); ?>/images/texture.png); background-size:cover;">
    <div class="shadow">
        </div>
    	<div class="restrictor">
        
        
        
        
      
        
        
        
        
        
        
    		<div class="story-wrap">
            	
                <div class="restrictor">
                <div class="feature3">
                	TURTLE TRACKS NEWSLETTER
                </div>
                <a href="<?php the_permalink(782); ?>">
                <div class="more-turtle">
                	<div class="story-copy2">
                		| &nbsp; more
                    </div>
                    <div class="story-image2">
                    <img src="<?php bloginfo('template_directory'); ?>/images/grey-right.png" style="width:20px; height:20px;">
                    </div>
                </div>
                </a>
                
                
                
                <div class="info-wrap">
                
                <?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; ?>
                    		<?php $pub_query = new WP_Query(array( 'post_type' => 'turtletrack', 'posts_per_page' => 3, 'orderby' => 'date', 'order' => 'dsc', 'paged' => $paged)); ?>
                     
								<?php if( $pub_query->have_posts() ) : 
                        while( $pub_query->have_posts() ) : 
                        $pub_query->the_post();
						
						// vars
												$image = get_field('turtle_tracks_thumb');
						
						
						 ?> 
                    <div class="info-box">
                        <div class="inner-info">
                        
                        
                        
                        
                        
                        	             
                                              
                                        
                        	<div class="info-pic">
                            	<?php if( $image != '' ): ?>
                            	<img src="<?php the_field('turtle_tracks_thumb'); ?>" style="width:100%;">
                                <?php endif; ?>
                            </div>
                            <div class="info-text">
                            	
                                <div class="info-date2">
                                	<?php the_title(); ?>
                                </div>
                           
                                 <a href="<?php the_field('link'); ?>">
                                		<div class="continue3">
                                            <div class="cont-copy">
                                            download 
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
                    
                    
                </div>
                
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <!--<div class="section" style="background-color:#FFFFFF;">
    	
            <div class="story-wrap">
            	<div class="feature">
                	Featured Story
                </div>
                <a href="<?php the_permalink(); ?>">
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
                <div class="story-image">
                    <img src="<?php bloginfo('template_directory'); ?>/images/products.png" style="width:100%;">
                </div>
                <div class="story-text">
                	<div class="story-box2">
                    	<div class="title">
                        	How Thermo-Kool changed everything
                        </div>
                        <div class="date">
                        	April 20, 2016 <span style="color:#c5c5c5">|</span> 10 minute read
                        </div>
                        <br>
                        <div class="feat-copy">
                        	“I had been working in the industry for 20 years, and constantly had issues keeping the kitchen organized. Despite my best efforts, I consistently found issues with the shoddy design of walk-ins that my company insisted on using. Every environment is different and we needed a versatile solution to solve the conundrum of storage. When I became CEO, I knew I had to solve this problem and fast...”
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
            </div>
        
    </div>
    
    <div class="section" style="background-color:#e0eaf3;">
    <div class="restrictor">
    	<div class="icon-wrap">
        	
            <div class="icons">
             	<a href="<?php the_permalink(); ?>">
                    <div class="icon">
                        <img src="<?php bloginfo('template_directory'); ?>/images/about.png" style="width:100%;">
                    </div>
                    <div class="icon-title">
                        ABOUT US
                    </div>
                </a>
            </div>
            
            <div class="icons">
            	<a href="<?php the_permalink(); ?>">
                    <div class="icon">
                        <img src="<?php bloginfo('template_directory'); ?>/images/contact.png" style="width:100%;">
                    </div>
                    <div class="icon-title">
                        CONTACT
                    </div>
                </a>
            </div>
            <div class="icons">
            	<a href="<?php the_permalink(); ?>">
                    <div class="icon">
                        <img src="<?php bloginfo('template_directory'); ?>/images/green.png" style="width:100%;">
                    </div>
                    <div class="icon-title">
                        GREEN INITIATIVE
                    </div>
                </a>
            </div>
            <div class="icons">
            	<a href="<?php the_permalink(); ?>">
                    <div class="icon">
                        <img src="<?php bloginfo('template_directory'); ?>/images/instal.png" style="width:100%;">
                    </div>
                    <div class="icon-title">
                        INSTALLATIONS
                    </div>
                </a>
            </div>
            <div class="icons">
            	<a href="<?php the_permalink(); ?>">
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
    
    
    <div class="section" style="background-color:#FFFFFF;">
    	
            <div class="story-wrap">
            	<div class="feature">
                	Featured Story
                </div>
                <a href="<?php the_permalink(); ?>">
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
                <div class="story-image">
                    <img src="<?php bloginfo('template_directory'); ?>/images/products.png" style="width:100%;">
                </div>
                <div class="story-text">
                	<div class="story-box2">
                    	<div class="title">
                        	How Thermo-Kool changed everything
                        </div>
                        <div class="date">
                        	April 20, 2016 <span style="color:#c5c5c5">|</span> 10 minute read
                        </div>
                        <br>
                        <div class="feat-copy">
                        	“I had been working in the industry for 20 years, and constantly had issues keeping the kitchen organized. Despite my best efforts, I consistently found issues with the shoddy design of walk-ins that my company insisted on using. Every environment is different and we needed a versatile solution to solve the conundrum of storage. When I became CEO, I knew I had to solve this problem and fast...”
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
            </div>
        <div class="bar">
        </div>
    </div>
    
    
    <div class="section" style="background-color:#FFFFFF;">
    	
            <div class="story-wrap">
            	<div class="feature">
                	Featured Story
                </div>
                <a href="<?php the_permalink(); ?>">
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
                <div class="story-image">
                    <img src="<?php bloginfo('template_directory'); ?>/images/products.png" style="width:100%;">
                </div>
                <div class="story-text">
                	<div class="story-box2">
                    	<div class="title">
                        	How Thermo-Kool changed everything
                        </div>
                        <div class="date">
                        	April 20, 2016 <span style="color:#c5c5c5">|</span> 10 minute read
                        </div>
                        <br>
                        <div class="feat-copy">
                        	“I had been working in the industry for 20 years, and constantly had issues keeping the kitchen organized. Despite my best efforts, I consistently found issues with the shoddy design of walk-ins that my company insisted on using. Every environment is different and we needed a versatile solution to solve the conundrum of storage. When I became CEO, I knew I had to solve this problem and fast...”
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
            </div>
        
    </div>
    
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
                        <a href="<?php the_permalink(); ?>">
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
                    <div class="entry">
                    	<div class="story-text2">
                            <div class="story-box">
                                <div class="title">
                                    How Thermo-Kool changed everything
                                </div>
                                <div class="date">
                                    April 20, 2016
                                </div>
                                <br>
                                <div class="copy">
                                    “I had been working in the industry for 20 years, and constantly had issues keeping the kitchen organized. Despite my best efforts, I consistently found issues with the shoddy design of walk-ins that my company insisted on using. Every environment is different and we needed a versatile solution to solve the conundrum of storage. When I became CEO, I knew I had to solve this problem and fast...”
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
                    <div class="entry">
                    	<div class="story-text2">
                            <div class="story-box">
                                <div class="title">
                                    How Thermo-Kool changed everything
                                </div>
                                <div class="date">
                                    April 20, 2016
                                </div>
                                <br>
                                <div class="copy">
                                    “I had been working in the industry for 20 years, and constantly had issues keeping the kitchen organized. Despite my best efforts, I consistently found issues with the shoddy design of walk-ins that my company insisted on using. Every environment is different and we needed a versatile solution to solve the conundrum of storage. When I became CEO, I knew I had to solve this problem and fast...”
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
                        <a href="<?php the_permalink(); ?>">
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
                    <div class="entry">
                    	<div class="story-text2">
                            <div class="story-box">
                                <div class="title">
                                    How Thermo-Kool changed everything
                                </div>
                                <div class="date">
                                    April 20, 2016
                                </div>
                                <br>
                                <div class="copy">
                                    “I had been working in the industry for 20 years, and constantly had issues keeping the kitchen organized. Despite my best efforts, I consistently found issues with the shoddy design of walk-ins that my company insisted on using. Every environment is different and we needed a versatile solution to solve the conundrum of storage. When I became CEO, I knew I had to solve this problem and fast...”
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
                    <div class="entry">
                    	<div class="story-text2">
                            <div class="story-box">
                                <div class="title">
                                    How Thermo-Kool changed everything
                                </div>
                                <div class="date">
                                    April 20, 2016
                                </div>
                                <br>
                                <div class="copy">
                                    “I had been working in the industry for 20 years, and constantly had issues keeping the kitchen organized. Despite my best efforts, I consistently found issues with the shoddy design of walk-ins that my company insisted on using. Every environment is different and we needed a versatile solution to solve the conundrum of storage. When I became CEO, I knew I had to solve this problem and fast...”
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
                    <div class="entry">
                    	<div class="story-text2">
                            <div class="story-box">
                                <div class="title">
                                    How Thermo-Kool changed everything
                                </div>
                                <div class="date">
                                    April 20, 2016
                                </div>
                                <br>
                                <div class="copy">
                                    “I had been working in the industry for 20 years, and constantly had issues keeping the kitchen organized. Despite my best efforts, I consistently found issues with the shoddy design of walk-ins that my company insisted on using. Every environment is different and we needed a versatile solution to solve the conundrum of storage. When I became CEO, I knew I had to solve this problem and fast...”
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
                </div>
                <div class="turtle">
                	<div class="turtle-logo">
                    	<img src="<?php bloginfo('template_directory'); ?>/images/turtle-tracks.png" style="width:100%;">
                    </div>
                    <div class="turtle-head-wrap">
                        <div class="turtle-head">
                            THERMO-KOOL’S BIMONTHLY NEWSLETTER
                        </div>
                        <div class="dl2">
                    		<a href="<?php the_permalink(); ?>">
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
                    		<a href="<?php the_permalink(); ?>">
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
                <div class="dl">
                    		<a href="<?php the_permalink(); ?>">
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
                            
                    </div>
                    <div class="dl">
                    		<a href="<?php the_permalink(); ?>">
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
    </div>-->
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
	
    
   
    
    
</div>

<?php
get_footer();
