<?php if (!defined('FW')) {
    die('Forbidden');
}
?>
<div class="bilder">

    <div class="container">

        <h3 class="present__title" id="go_bil"><?= $atts['title']; ?></h3>

        <div class="bilder__slider">

            <?php if (is_array($atts['img']) && !empty($atts['img'])): ?>
                <?php foreach ($atts['img'] as $key => $att): ?>
                    <div class="bilder__slider--item">
                        <img src="<?= $att['url'];?>" alt="">
                        <a href="<?= $att['url'];?>" data-lightbox="image-1" data-title="Foto" class="bilder__slider--show">
                            <img src="<?php bloginfo('template_directory') ;?>/img/icons/zoom-out.svg" alt="">
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>

        </div>


    </div>

</div>