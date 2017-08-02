<?php if (!defined('FW')) {
    die('Forbidden');
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<div class="bilder">

    <div class="container">

        <h3 class="present__title" id="go_bil"><?= $atts['title']; ?></h3>

        <?php fw_print($atts) ?>
        <div class="bilder__slider">

            <?php if (is_array($atts['img']) && !empty($atts['img'])): ?>
                <?php foreach ($atts['img'] as $key => $att): ?>
                    <div class="bilder__slider--item">
                        <img src="img/photo1.png" alt="">
                        <a href="img/photo1.png" data-lightbox="image-1" data-title="Foto" class="bilder__slider--show">
                            <img src="img/icons/zoom-out.svg" alt="">
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>

            <div class="bilder__slider--item">
                <img src="img/photo12.png" alt="">
                <a href="img/photo12.png" data-lightbox="image-1" data-title="Foto" class="bilder__slider--show">
                    <img src="img/icons/zoom-out.svg" alt="">
                </a>
            </div>

        </div>


    </div>

</div>