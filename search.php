<?php
/**
 * @package WordPress
 * @subpackage Lmsecurite_2
 */
get_header();
?>
<div class="issearch displayMiddle">
<?php if (have_posts()) : ?>

		<h1 class="page-title"><?php printf( __( 'Resultats de recherche pour: %s', 'lmsecurite_2' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		<?php if (is_search()) { ?>
			<p class="queryBlog">You have searched the blog archives for <strong>'<?php the_search_query(); ?>'</strong>.</p>
		<?php } ?>

 <?php $once = 1 ; ?>	
 <div class="resultTypeTitle fondBleu"> Pages </div>
<?php while (have_posts()) : the_post(); ?>

 <?php if ($post->post_type != 'page' && $once) { $once = 0;?>
 <div class="resultTypeTitle fondOrange"> Autre </div>
  <?php } ?>
  
<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
<div class="storyheader <?php if(is_single()) : ?>singlepost<?php endif; ?>">
		<h3 class="storytitle"><span class="storyComment"><?php /**comments_popup_link(__('0'), __('1'), __('%'), 'on', 'off');**/ ?></span><span class="postDate"><?php /**echo strftime('%m.%d.%y',strtotime(get_the_time('m/d/Y')));**/ ?></span> <span class="titleName"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></span></h3>
		</div>
</div>

<?php endwhile; else: ?>
		<h2 class="searchtitle">No Search Results Found</h2>
		<p class="queryBlog">Try a different search?</p>
		<?php get_search_form(); ?>
<?php endif; ?>

<div class="navi">
	<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
	<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
</div>

</div>
<?php get_footer(); ?>
