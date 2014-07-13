<?php
/**
*@package tunnels
*/
 get_header()?>
<?php get_siderbar()?>
<div id="left">
	<?php while(have_posts()): the_post()?>
	
	<h2><?php the_title()?></h2>
	<?php the_content(__('Continue Reading'));?>
	
	<?php endwhile;?>
	
</div>
	 
	<?php comments_template('', true)?>
	


<?php get_footer()?>
