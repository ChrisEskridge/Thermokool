<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Thermokool.com
 */

?>

	
<div class="footer-wrap">
	<div class="restrictor">
        <div class="social">
        	
            
            
            
            
            
            
            <div class="social-wrap">
            	
                <a href="https://www.youtube.com/channel/UC9BsmCsJgPS-0p7iJXd1aFw">
            		<img class="soc-img" src="<?php bloginfo('template_directory'); ?>/images/youtube.png" >
            	</a>
                <a href="https://www.facebook.com/ThermoKoolWalkIns">
            		<img class="soc-img" src="<?php bloginfo('template_directory'); ?>/images/facebook.png" >
                </a>
                <a href="https://twitter.com/thermokool">
            		<img class="soc-img" src="<?php bloginfo('template_directory'); ?>/images/twitter.png" >
            	</a>
                
            </div>
            
            
            
            
            
            <!--<?php if( have_rows('social_media') ):?>
                <div id="social">
                
            	<ul id="social-link-wrapper">
                	<?php while(have_rows('social_media')) : the_row(); ?>
						<?php if(get_row_layout() == 'sm_facebook') : ?>
                        
                            <li id="social-links">
                                <a class="social" href="<?php the_sub_field('sm_facebook_url'); ?>">
                                    <div class="social-icon">
                                        <img class="social-image" src="<?php bloginfo('template_directory'); ?>/images/facebook.png" width="50px";>
                                    </div>    
                                    <div class="social-text">
                                        <?php the_sub_field('sm_facebook_title'); ?>
                                    </div>
                                </a>
                            </li>
                        <?php elseif(get_row_layout() == 'sm_twitter') : ?>
                        
                        <li id="social-links">
                            <a class="social" href="<?php the_sub_field('sm_twitter_url'); ?>">
                                <div class="social-icon">
                                    <img class="social-image" src="<?php bloginfo('template_directory'); ?>/images/twitter.png" width="50px";>
                                </div>    
                                <div class="social-text">
                                    <?php the_sub_field('sm_twitter_title'); ?>
                                </div>
                            </a>
                        </li>
                        <?php elseif(get_row_layout() == 'sm_instagram') : ?>
                        
                        <li id="social-links">
                            <a class="social" href="<?php the_sub_field('sm_instagram_url'); ?>">
                                <div class="social-icon">
                                    <img class="social-image" src="<?php bloginfo('template_directory'); ?>/images/insta.png" width="50px";>
                                </div>    
                                <div class="social-text">
                                    <?php the_sub_field('sm_instagram_title'); ?>
                                </div>
                            </a>
                        </li>
					   <?php endif; ?>
                		<?php endwhile; ?>
                </ul>      
            </div>
            <?php endif; ?>-->
            
            
            
            
            
            
            
            
            
            
        </div>
        <div class="footer-text">
        	<div class="foot-top">
        		Thermo-Kool / Mid-South Industries, Inc.
            </div>
            <div class="foot-mid">
        		723 East 21st Street  |  Post Office Box 989  |  <span style="white-space:nowrap">Laurel, MS 39441</span>
            </div>
            <br>
			<div class="foot-bottom">
        		© 2015 Thermo-Kool. All rights reserved.
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>










<script type="text/javascript">
<!--
    function toggle_visibility(id) 
{
    var e = document.getElementById(id);
	
	
    if (e.style.display == 'none' || e.style.display=='')
    {
        e.style.display = 'inline-block';
		
		
    }
    else 
    {
        e.style.display = 'none';
    }
	
	
    
}




jQuery(window).on('load resize', function(event){
	var windowWidth = jQuery(window).width();
	if(windowWidth < 850){
		
		
		
		jQuery(document).ready(function(){
			jQuery('.menu-item-has-children').on("click", function(e){
				if(jQuery(this).hasClass('active')){
					jQuery(this).find('.sub-menu').hide();
					jQuery(this).removeClass('active');
				} else {
					jQuery(this).parent().parent().find('.sub-menu').hide();
					jQuery(this).parent().parent().find('.active').removeClass('active');
					jQuery(this).addClass('active');
					jQuery(this).find('.sub-menu').show();
				}
				e.preventDefault();
				return true;
			});
			jQuery('.sub-menu li').on("click", function(e){
				e.stopPropagation();
			});
			
			
	
		});
	}
});



	jQuery(document).ready(function(){
		jQuery('.drop-title').on("click", function(e){
			if(jQuery(this).hasClass('active')){
				jQuery(this).parent().find('.drop-detail').hide();
				jQuery(this).removeClass('active');
			} else {
				jQuery(this).parent().parent().find('.drop-detail').hide();
				jQuery(this).parent().parent().find('.active').removeClass('active');
				jQuery(this).addClass('active');
				jQuery(this).parent().find('.drop-detail').show();
			}
			e.preventDefault();
			return true;
		});
		
    	jQuery('.drop-detail').on("click", function(e){
			e.stopPropagation();
    	});
		

	});
	
	jQuery(document).ready(function(){
		jQuery('.drop-title').on("click", function(e){
			if(jQuery(this).hasClass('active')){
				jQuery(this).parent().parent().find('.drop-title-image2').hide();
				jQuery(this).parent().parent().find('.drop-title-image').show();
				jQuery(this).parent().find('.drop-title-image2').show();
				jQuery(this).parent().find('.drop-title-image').hide();
			} else {
				jQuery(this).parent().find('.drop-title-image2').hide();
				jQuery(this).parent().find('.drop-title-image').show();
			}
			e.preventDefault();
			return true;
		});
		
    	
		

	});
	
	
	
	

</script>

<script type="text/javascript">
	jQuery(document).ready(function($){
		var url = window.location.hash;
		if(url == '#vfd'){
			controlleft();
		} else if(url == '#led'){
			controlright();
		} else {
			$(".control-left-list").hide();
			$(".control-right-list").hide();
		}	
		$(".control-disclaimer").hide();
		$(".control-hidden").delay(2000).removeClass("control-hidden");
		$(".control-left").click(function(){
			controlleft();
		});
		$(".control-right").click(function(){
			controlright();
		});
		
		function controlleft(){
			$("html, body").animate({
				scrollTop: $(".control-left").offset().top
			}, 500);
			$(".control-left-list").show();
			$(".video-arrow-left").show();
			$(".control-right-list").hide();
			$(".video-arrow-right").hide();
			$(".control-left").addClass("bright").removeClass("dim");
			$(".control-right").addClass("dim").removeClass("bright");
		}
		
		function controlright(){
			$("html, body").animate({
				scrollTop: $(".control-right").offset().top
			}, 500);
			$(".control-right-list").show();
			$(".video-arrow-right").show();
			$(".control-left-list").hide();
			$(".video-arrow-left").hide();
			$(".control-right").addClass("bright").removeClass("dim");
			$(".control-left").addClass("dim").removeClass("bright");
		}
		$(".list-video a").click(function(){
			$(this).parent().siblings().removeClass("current-video");
			$(this).parent().addClass("current-video");
			var videoID = $(this).parent().find("input.video_url");
			$(".control-list iframe").attr("src", "http://www.youtube.com/embed/"+$(videoID).val()+"?rel=0");
			return false;
		});
	});
</script>


<!--</script> 


<!--<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('.menu-item-has-children').on("click", function(e){
			if(jQuery(this).hasClass('active')){
				jQuery(this).find('.sub-menu').hide();
				jQuery(this).removeClass('active');
			} else {
				jQuery(this).parent().parent().find('.sub-menu').hide();
				jQuery(this).parent().parent().find('.active').removeClass('active');
				jQuery(this).addClass('active');
				jQuery(this).find('.sub-menu').show();
			}
			e.preventDefault();
			return true;
		});
    	jQuery('.sub-menu li').on("click", function(e){
			e.stopPropagation();
    	});
		

	});
</script>-->


<!--<script type="text/javascript">

</script>-->




 



