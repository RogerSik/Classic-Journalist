<?php get_header(); ?>

<div id="content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<?php // Post dates off by default the_date('','<h2>','</h2>'); ?>
	<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>	
	<?php if (is_page()) { ?>
		<div class="meta"><?php _e("Posted by"); ?> <?php the_author() ?> <?php _e('on') ?> <?php the_time('F jS, Y') ?> <?php edit_post_link(__('Edit This')); ?></div>
	<?php } else { ?>
		<div class="meta"><?php _e("Posted in"); ?> <?php the_category(',') ?> by <?php the_author() ?> <?php _e('on') ?> <?php the_time('F jS, Y') ?> <?php edit_post_link(__('Edit This')); ?></div>
	<?php } ?>
	<div class="main">
		<?php the_content(__('(more...)')); ?>
	</div>
	<div class="tags">
	<?php the_tags(__('Tagged with: '),', ',' '); ?>
	</div>
	<div class="comments">
		<?php wp_link_pages(); ?>
		<?php comments_popup_link(__('no comments yet'), __('<strong>1</strong> comment'), __('<strong>%</strong> comments')); ?>
	</div>
	
	<!--
	<?php trackback_rdf(); ?>
	-->
	

<?php if ( comments_open() ) comments_template(); ?>

<?php endwhile; else: ?>
<div class="warning">
	<p><?php _e('Sorry, no posts matched your criteria, please try and search again.'); ?></p>
</div>
<?php endif; ?>

<div id="postnav"><?php posts_nav_link(' &#8212; ', __('&laquo; Previous Page'), __('Next Page &raquo;')); ?></div>

</div> <!-- End content -->

<?php get_sidebar(); ?>

<div class="clearleft"></div>

<?php get_footer(); ?>
