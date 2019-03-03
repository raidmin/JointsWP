<?php
/*
Template Name: Fullpage Scroller
*/

get_header(); ?>

<div id="fullpage">

  <div class="section fp-auto-height-responsive">

      <?php
      $section1 = new WP_Query('pagename=startseite');
      while ($section1->have_posts()) : $section1->the_post(); ?>
          <?php get_template_part('parts/loop', 'homepage'); ?>
      <?php endwhile;
      wp_reset_postdata();
      ?>

  </div>

  <div class="section fp-auto-height-responsive">
      <?php
      $section2 = new WP_Query('pagename=funktionsweise');
      while ($section2->have_posts()) : $section2->the_post(); ?>
          <?php get_template_part('parts/loop', 'page'); ?>
      <?php endwhile;
      wp_reset_postdata();
      ?>
  </div>

  <div class="section fp-auto-height-responsive">
      <?php
      $section3 = new WP_Query('pagename=zielgruppe');
      while ($section3->have_posts()) : $section3->the_post(); ?>
          <?php get_template_part('parts/loop', 'page'); ?>
      <?php endwhile;
      wp_reset_postdata();
      ?>
  </div>

  <div class="section fp-auto-height-responsive">
      <?php
      $section4 = new WP_Query('pagename=haeufige-fragen');
      while ($section4->have_posts()) : $section4->the_post(); ?>
          <?php get_template_part('parts/loop', 'page-height'); ?>
      <?php endwhile;
      wp_reset_postdata();
      ?>
  </div>

  <div class="section fp-auto-height-responsive">
      <?php
      $section5 = new WP_Query('pagename=kontakt');
      while ($section5->have_posts()) : $section5->the_post(); ?>
          <?php get_template_part('parts/loop', 'page'); ?>
      <?php endwhile;
      wp_reset_postdata();
      ?>
      <div style="height: 1em"></div>
      <?php get_footer(); ?>
  </div>

</div> <!-- end #content -->

<script>
  <?php $anchors = array() ?>
  <?php foreach(get_field('nav::links') as $link): ?>
    <?php $page = $link['nav::page'] ?>
    <?php array_push($anchors, $page->post_name) ?>
  <?php endforeach ?>

  new fullpage('#fullpage', {
    anchors: <?php echo json_encode($anchors) ?>,
    autoScrolling: true,
    scrollHorizontally: false,
    slidesNavigation: true,
    slidesNavPosition: 'right',
    responsiveWidth: 1024,
    responsiveHeight: 640,
    fitToSection: false,
    menu: '#navigation'
  });

  //methods
  // fullpage_api.setAllowScrolling(false);
</script>
