<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

?>

<div class="price">
    <div class="container">

        <h3 class="present__title" id="go_price"><?=$atts['title'];?></h3>

        <div class="price__img">
            <img src="<?=$atts['img']['url'];?>" alt="">
        </div>

        <div class="price__value">
            <span class="price__value--sum"><?=$atts['panel_price']['0']['link'];?> <i class="<?=$atts['panel_price']['0']['icon'];?> " aria-hidden="true"></i>*</span>
            <span class="price__value--note"><?=$atts['panel_price']['0']['nds'];?> </span>
        </div>

    </div>

</div>