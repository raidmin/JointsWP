
<?php if (($accordion = get_field('layout::accordion')) != null): ?>
    <div style="height: 100%" class="grid-x grid-margin-x">
      <div class="cell large-12 medium-12 small-12">
        <ul style="height: 100%" class="accordion" data-accordion data-slide-speed="0">
        <?php $count = 1 ?>
        <?php foreach ($accordion as $item): ?>
          <li class="accordion-item <?php echo $count == 1 ? 'is-active' : '' ?>" data-accordion-item>
            <a href="#" class="accordion-title">
              <span><?php echo $count++ ?>) </span>
              <span><?php echo $item['accordion::title'] ?></span>
            </a>

            <div class="accordion-content" data-tab-content>
              <p><?php echo $item['accordion::text'] ?></p>
            </div>
          </li>
        <?php endforeach ?>
        </ul>
      </div>
    </div>
<?php endif ?>
