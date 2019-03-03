
<?php if (($cards = get_field('layout::cards')) != null): ?>
    <div class="grid-x grid-margin-x" data-equalizer data-equalize-on="medium">
        <?php $count = 1 ?>
        <?php foreach ($cards as $card): ?>
            <div class="cell large-4 medium-6 small-12" style="text-align: center">
                <div class="card" data-equalizer-watch>
                    <div class="card-divider flex-container align-center-middle">
                        <div class="number-label with-border" num="<?php echo $count++ ?>"></div>
                    </div>
                    <div class="card-section" style="padding-top: 0">
                        <p class="has-primary-color"><?php echo $card['card::text'] ?></p>
                    </div>
                    <div class="card-footer flex-container align-center-middle" style="min-height: 5rem">
                        <img src="<?php echo $card['card::image']['url'] ?>" />
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
<?php endif ?>
