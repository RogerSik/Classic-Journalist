<?php get_header(); ?>

<div id="content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<?php // Post dates off by default the_date('','<h2>','</h2>'); ?>
	<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>	
	<?php if (is_page()) { ?>
		<div class="meta"><?php printf(__('Written by %s', 'classic-journalist'), the_author('', false));?> <?php _e('on', 'classic-journalist') ?> <?php the_time(__('F jS, Y', 'classic-journalist'));?> <?php edit_post_link(__('Edit', 'classic-journalist') );?></div>
	<?php } else { ?>
		<div class="meta"><?php printf(__('Posted in %s by', 'classic-journalist'), get_the_category_list(','));?> <?php the_author() ?> <?php _e('on', 'classic-journalist') ?> <?php the_time('F jS, Y', 'classic-journalist') ?> <?php edit_post_link(__('Edit This', 'classic-journalist')); ?></div>
	<?php } ?>
	<div class="main">
		<?php the_content(__('Read the rest of this entry &raquo;', 'classic-journalist'));?>
	</div>
	<div class="tags">
	<?php the_tags( '<p>' . __('Tags:', 'classic-journalist') . ' ', ', ', '</p>'); ?>
	</div>
	<div class="comments">
		<?php wp_link_pages(); ?>
		<a href="<?php comments_link(); ?>"><?php comments_number(__('without comments', 'classic-journalist'),__('with one comment', 'classic-journalist'),__('with % comments', 'classic-journalist') );?>
	</div>

<?php if ( comments_open() ) comments_template('', true); ?>

<?php endwhile; else: ?>
<div class="warning">
	<p><?php _e('Apologies, but we were unable to find what you were looking for. Perhaps searching will help.', 'classic-journalist'); ?></p>
</div>
<?php endif; ?>

<div id="postnav"><?php posts_nav_link(' &#8212; ', __('&laquo; Previous Page', 'classic-journalist'), __('Next Page &raquo;', 'classic-journalist')); ?></div>

</div> <!-- End content -->

<?php get_sidebar(); ?>

<div class="clearleft"></div>

<?php get_footer(); ?>
