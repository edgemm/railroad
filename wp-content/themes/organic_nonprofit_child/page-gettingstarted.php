<?php
/*
Template Name: Getting Started
*/
?>

<?php get_header(); ?>

<!-- BEGIN .container -->
<div class="container">

<!-- BEGIN feature image removed (moved to template file page-feature-image.php) -->

	<?php /*?><?php if ( has_post_thumbnail()) { ?>
		<div class="feature-img page"><?php the_post_thumbnail( 'featured-large' ); ?></div>
	<?php } else { ?>
		<div class="feature-img page"><img src="<?php bloginfo('template_directory'); ?>/images/default-page.png" alt="<?php the_title(); ?>" /></div>
	<?php } ?><?php */?>
    
     <div id="page-spacer"></div>
     
<!-- EDN feature image removed -->     
	
	<!-- BEGIN .row -->
	<div class="row">
		
		<!-- BEGIN .eight columns -->
		<div class="eight columns">
			
			<!-- BEGIN .postarea -->
		    <div <?php post_class('postarea'); ?> id="page-<?php the_ID(); ?>">
		
		        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		        
		        <h1 class="headline"><?php the_title(); ?></h1>
		        <?php the_content(__("Read More", 'organicthemes')); ?>
                
		        
		        <?php wp_link_pages(array(
		            'before' => '<p class="page-links"><span class="link-label">' . __('Pages:') . '</span>',
		            'after' => '</p>',
		            'link_before' => '<span>',
		            'link_after' => '</span>',
		            'next_or_number' => 'next_and_number',
		            'nextpagelink' => __('Next'),
		            'previouspagelink' => __('Previous'),
		            'pagelink' => '%',
		            'echo' => 1 )
		        ); ?>
		        
		        <div class="clear"></div>
		        
		        
		        <?php endwhile; else: ?>
		        
		        <p><?php _e("Sorry, no posts matched your criteria.", 'organicthemes'); ?></p>
		        
		        <?php endif; ?>
		    
		    <!-- END .postarea -->
		    </div>
		
		<!-- END .eight columns -->
		</div>
		
		<div class="four columns">
			<div class="sidebar">
				<?php get_sidebar( 'right-sidebar' ); ?>
			</div>
		</div>
	
	<!-- END .row -->
	</div>

<!-- END .container -->
</div>

<!-- Google Code for Filled out lead form Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 986519661;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "NOcyCNOz3Q0Q7bC01gM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/986519661/?value=0&amp;label=NOcyCNOz3Q0Q7bC01gM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>


<?php get_footer(); ?>