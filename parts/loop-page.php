<?php
/**
 * Template part for displaying page content in page.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">


  <header class="article-header">
    <div class="grid-container">
      <div class="grid-x grid-margin-x">
        <div class="cell large-12 medium-12 small-12">
          <h1 class="page-title"><?php the_title(); ?></h1>
        </div>
      </div>
    </div>
  </header> <!-- end article header -->

  <section class="entry-content" itemprop="text">
    <div class="grid-container">
      <div class="grid-x grid-margin-x">
        <div class="cell large-12 medium-12 small-12">
          <?php the_content(); ?>
        </div>
      </div>
      <?php get_template_part('parts/layout', 'cards') ?>
      <?php get_template_part('parts/layout', 'comments') ?>
      <?php get_template_part('parts/layout', 'accordion') ?>
    </div>
  </section> <!-- end article section -->

	<footer class="article-footer">
		 <?php wp_link_pages(); ?>
	</footer> <!-- end article footer -->

	<?php comments_template(); ?>

</article> <!-- end article -->
