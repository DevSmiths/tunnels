<?php/**
*@package tunnels
*/
 get_header()?>

<div id="left">
	<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php tunnels_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
	
</div>
	 
	<?php comments_template('', true)?>
	

<?php get_siderbar()?>
<?php get_footer()?>
