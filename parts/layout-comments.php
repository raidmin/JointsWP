
<?php if (($comments = get_field('layout::comments')) != null): ?>
    <div class="grid-x grid-margin-x">
        <?php $count = 1 ?>
        <?php foreach ($comments as $comment): ?>
            <div class="cell large-12 medium-12 small-12">
                <div class="comment">
                  <div class="number-label" num="<?php echo $count++ ?>"></div>
                  <div style="font-weight: 400">
                    <p><?php echo $comment['comment::text'] ?></p>
                    <div class="person">
                      <span><?php echo $comment['comment::person'] ?></span>
                      <?php echo wp_get_attachment_image($comment['comment::image']['id'], 'thumbnail') ?>
                    </div>
                  </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
<?php endif ?>
