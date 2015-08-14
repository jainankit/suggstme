<?php 
/* 

Template Name: Full Width 

*/

get_header(); 

?>

	<!--BEGIN #content -->
    <div id="content">
    	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<!--BEGIN .hentry -->
		<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			
			<!--BEGIN .post-meta .post-header-->
			<div class="post-meta post-header">
			
				<h1 class="page-title"><?php the_title(); ?></h1>
		
			<!--END .post-meta post-header -->
			</div>
			
			<!--BEGIN .post-content -->
			<div class="post-content">
				<?php the_content(); ?>
			<!--END .post-content -->
			</div>
        
		<!--END .hentry-->  
		</div>
		
		<?php comments_template('', true); ?>

		<?php endwhile; else : ?>

			<p><?php _e('No posts found', 'engine'); ?></p>

		<?php endif; ?>

	</div><!-- #content -->

<?php get_footer(); ?>