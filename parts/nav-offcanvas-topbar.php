<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-left float-left">

	</div>
	<div class="top-bar-right show-for-medium">
		<?php joints_top_nav(); ?>
    <ul id="navigation" class="menu">
      <?php foreach(get_field('nav::links') as $link): ?>
        <?php $page = $link['nav::page'] ?>
        <?php if ($link['nav::linktype'] == 'anchor'): ?>
          <li data-menuanchor="<?php echo $page->post_name ?>">
            <a href="#<?php echo $page->post_name ?>"><?php echo $page->post_title ?></a>
          </li>
        <?php else: ?>
          <li>
            <a href="/<?php echo $page->post_name ?>"><?php echo $page->post_title ?></a>
          </li>
        <?php endif; ?>
      <?php endforeach ?>
    </ul>
	</div>
	<div class="top-bar-right float-right show-for-small-only">
		<ul class="menu">
			<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
			<li><a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswp' ); ?></a></li>
		</ul>
	</div>
</div>
