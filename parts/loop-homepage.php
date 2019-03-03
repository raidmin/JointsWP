
<div class="flex-container position-relative">
  <div class="background-cover">
    <?php echo wp_get_attachment_image(get_field('home::background')['id'], 'original') ?>
  </div>
  <div class="grid-x grid-padding-y grid-margin-y grid-padding-x grid-margin-x" style="z-index: 5; color: white">
    <div class="cell large-12 medium-12 small-12 h2">
      <?php echo get_field('home::text') ?>
    </div>
  </div>
</div>
