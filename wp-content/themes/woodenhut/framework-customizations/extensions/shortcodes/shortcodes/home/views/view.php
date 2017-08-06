<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<header class="header" >
    <div class="container">

        <div class="header__banner" style=" background: url(<?= $atts['background_img']['url'] ; ?>) no-repeat 50%; background-size: cover;">
            <!--<img src="img/main-banner.png" alt="">-->

            <div class="header__logo">
                <a href="/">
                    <img src="<?= $atts['logo']['url'] ; ?>" alt="">
                </a>
            </div>

            <div class="header__navbar">
                <?php wp_nav_menu( array(
	                'theme_location'  => 'header',
	                'container'       => 'nav',
	                'container_class' => 'header__navbar--top',
                ) );
                ?>
            </div>

            <h1 class="header__title"><?= $atts['text']; ?></h1>


        </div>



    </div>

</header>
