<section data-padding-top="<?php the_sub_field('padding_top'); ?>" class="section-result-lists">
    <div class="container">
        <div class="lists-grid">
			<?php foreach (get_sub_field('boxes') as $item): ?>
                <div class="list-item">
                    <h2 class="h4 section-title title-line line-left uppercase"><?php echo $item['heading']; ?></h2>

                    <ul class="list">
	                    <?php foreach ($item['list'] as $list_item): ?>
                            <li class="list__item">
                                <div class="icon">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-check-circle fa-w-16 fa-3x">
                                        <path fill="#EF7216" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" class=""></path>
                                    </svg>
                                </div>
                                <div class="caption"> <?php echo $list_item['list_item'] ?> </div>
                            </li>

	                    <?php endforeach; ?>
                    </ul>

                </div>
			<?php endforeach; ?>
        </div>
    </div>
</section>
