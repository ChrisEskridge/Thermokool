<?php
/*
Template Name: Frost Bites Page
*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php bloginfo('name'); ?>
	</title>
	
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" type="image/x-icon" />
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<link href='http://fonts.googleapis.com/css?family=BenchNine' rel='stylesheet' type='text/css'>

	<?php wp_enqueue_script('jquery'); ?>
	
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-34750448-1']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>

	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/jquery.jscrollpane.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/jquery.mousewheel.js"></script>
	<script type="text/javascript">
		jQuery(function(){
			jQuery('.fbp').jScrollPane(
				{
					verticalDragMinHeight: 20,
					verticalDragMaxHeight: 50
				}
			);
		});
	</script>
	
</head>

<body <?php body_class(); ?>>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="fb-container">

	<div id="fb-nav">
		<div id="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'fb-menu' ) ); ?>
			<div class="search2">
                        	<div id="search-bar">
                                <form action="<?php bloginfo('siteurl'); ?>" id="searchform" method="get">
                                    <div>
                                        <input type="text" id="s" name="s" value="" placeholder="Search..." />
                                        <input type="submit" value="&nbsp;" id="searchsubmit" />
                                    </div>
                                </form>
                            </div>
                        </div>	
		</div>
	</div>
	
	<div id="fb-page-content">
		<div id="fb-nav-logo">
		</div>
	
		<div id="fb-header">
			<a href="<?php echo home_url(); ?>" id="fb-header-logo-link"></a>
			<a href="http://www.facebook.com/ThermoKoolWalkIns/" id="fb-header-facebook-link" target="_BLANK"></a>
			<a href="http://www.twitter.com/torimckool/" id="fb-header-twitter-link" target="_BLANK"></a>
		</div>
	
		<ul>
	
			<?php $count=0 ?>
			<?php $videoquery = new WP_Query( array( 'post_type' => 'fbites', 'posts_per_page' => 3 ) ); ?>
			<?php while ( $videoquery->have_posts() ) : $videoquery->the_post(); ?>
			<?php $count++; ?>
			<?php if($count == 1) { ?>
				<li class="fb-shelf fb-shelf-1">
					<div class="fb-shelf-shadow-below">
					</div>
					<h2>"<?php the_title(); ?>"</h2>
					<h3><?php echo the_time('M. j'); ?></h3>
					<div class="fbp">
						<p><?php the_field('video_description'); ?></p>
					</div>
					<?php the_field('video_embed_link'); ?>
				</li>
				<li class="fb-shelf-like"><div class="fb-like" data-href="http://www.facebook.com/ThermoKoolWalkIns/" data-send="false" data-layout="button_count" data-width="50" data-show-faces="false" data-colorscheme="dark"></div></li>
			<?php } elseif ($count == 2) { ?>
				<li class="fb-shelf fb-shelf-2">
					<div class="fb-shelf-shadow-below">
					</div>
					<h2>"<?php the_title(); ?>"</h2>
					<h3><?php echo the_time('M. j'); ?></h3>
					<div class="fbp">
						<p><?php the_field('video_description'); ?></p>
					</div>
					<?php the_field('video_embed_link'); ?>
				</li>
				<li class="fb-shelf-like"><div class="fb-like" data-href="http://www.facebook.com/ThermoKoolWalkIns/" data-send="false" data-layout="button_count" data-width="50" data-show-faces="false" data-colorscheme="dark"></div></li>
			<?php } elseif ($count == 3) { ?>
				<li class="fb-shelf fb-shelf-3">
					<div class="fb-shelf-shadow-below">
					</div>
					<h2>"<?php the_title(); ?>"</h2>
					<h3><?php echo the_time('M. j'); ?></h3>
					<div class="fbp">
						<p><?php the_field('video_description'); ?></p>
					</div>
					<?php the_field('video_embed_link'); ?>
				</li>
				<li class="fb-shelf-like"><div class="fb-like" data-href="http://www.facebook.com/ThermoKoolWalkIns/" data-send="false" data-layout="button_count" data-width="50" data-show-faces="false" data-colorscheme="dark"></div></li>
			<?php } else { ?>
				<li class="fb-shelf">
					<div class="fb-shelf-shadow-below">
					</div>
					<h2>"<?php the_title(); ?>"</h2>
					<h3><?php echo the_time('M. j'); ?></h3>
					<div class="fbp">
						<p><?php the_field('video_description'); ?></p>
					</div>
					<?php the_field('video_embed_link'); ?>
				</li>
				<li class="fb-shelf-like"><div class="fb-like" data-href="http://www.facebook.com/ThermoKoolWalkIns/" data-send="false" data-layout="button_count" data-width="50" data-show-faces="false" data-colorscheme="dark"></div></li>
			<?php } ?>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
		
		</ul>
		
		<div id="fb-archive">
			<div class="fb-shelf-shadow-below">
			</div>
			<p><span class="archive-margin">Frost Bites Archive</span>
				<?php $archivequery = new WP_Query( array( 'post_type' => 'fbites', 'posts_per_page' => 9999, 'orderby' => 'menu_order', 'order' => 'desc' ) ); ?>
				<?php while ( $archivequery->have_posts() ) : $archivequery->the_post(); ?>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			</p>
			<div id="fb-archive-sub">
				<p>
				<a href="<?php home_url(); ?>">Home</a> | <a href="<?php echo get_page_link(923); ?>">Attributions</a>
				</p>
			</div> 
		</div>
	
	</div>

</div>

</body>

</html>