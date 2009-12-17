

<div id="sidebar">
<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar() ) : ?>

		<div id="author">
			<h3><?php _e('The Author'); ?></h3>
			<p><?php bloginfo('description'); ?></p>
		</div>
		
		<div id="pages">
			<h3><?php _e('The Pages'); ?></h3>
				<ul>
					<?php wp_list_pages('title_li='); ?>
				</ul>
		</div>
		
		<h3>The Search</h3>
			<p class="searchinfo">search site archives</p>
			<div id="search">
				<div id="search_area">
					<form id="searchform" method="get" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                    <div>
						<input class="searchfield" type="text" name="s" id="s" value="" title="Enter keyword to search" />
						<input class="submit" type="submit" value="search" title="Click to search archives" />
                    </div>
					</form>
				</div>
			</div>
		
		<h3><?php _e('The Associates'); ?></h3>
			<ul>
				<?php get_links('-1', '<li>', '</li>', '', 0, 'name', 0, 0, -1, 0); ?>
			</ul>
		
		<h3><?php _e('The Archives'); ?></h3>
			<ul>
		 		<?php wp_get_archives('type=monthly'); ?>
 			</ul>
		
			<h3><?php _e('The Categories'); ?></h3>
				<ul>
					<?php wp_list_cats(); ?>
				</ul>	
		
			<h3><?php _e('The Meta'); ?></h3>
				<ul>
					<li><?php // wp_register(); ?></li>
					<li><?php wp_loginout(); ?></li>
					<li><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>">Site Feed</a></li>
					<li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>">Comments Feed</a></li>
					<li><a href="#content" title="back to top">Back to top</a></li>
					<?php wp_meta(); ?>
				</ul>
		<?php endif; ?>

			<?php if (function_exists('wp_theme_switcher')) { ?>
			<h3><?php _e('The Themes' ); ?></h3>
			<div class="themes">
				<?php wp_theme_switcher(); ?>
			</div>
			<?php } ?>
</div>
