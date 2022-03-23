<?php // Global
$logo    = wp_get_attachment_image(dt_get_option('cta_logo'), 'full');
?>
<section class="section-cases">
    <div class="container">
        <div class="cases-grid">
            <?php foreach (get_sub_field('prices') as $item): ?>
                <article class="case-item case-item-pricing">
                    <h3 class="case-item-title"><?php echo $item['title'] ?></h3>
                    <div class="case-item-logo">
                        <?php echo $logo; ?>
                    </div>

                    <div class="case-item-price">
                        from <span class="<?php echo $item['button-color']; ?>"><?php echo $item['price']; ?></span> /monthly
                    </div>

                    <div class="case-item-description">
                        <?php echo $item['description']; ?>
                    </div>

                    <div class="case-item-advantages">
                        <?php echo $item['advantages']; ?>
                    </div>

                    <?php $permalink = $item['button']; ?>
                    <?php if ($permalink): ?>
                        <div class="btn-wrap">
                            <a href="<?php echo $permalink['url'] ?>" target="<?php echo $permalink['target'] ?>" class="btn <?php echo $item['button-color']; ?>">
                                    <?php echo $permalink['title'] ?>
                            </a>
                        </div>
                    <?php endif; ?>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
