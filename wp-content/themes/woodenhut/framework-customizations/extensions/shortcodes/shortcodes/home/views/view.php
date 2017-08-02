<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<header class="header" >
<?php fw_print($atts) ?>
    <div class="container">

        <div class="header__banner" style=" background: url(<?= $atts['background_img']['url'] ; ?>) no-repeat 50%; background-size: cover;">
            <!--<img src="img/main-banner.png" alt="">-->

            <div class="header__logo">
                <a href="/">
                    <img src="<?= $atts['logo']['url'] ; ?>" alt="">
                </a>
            </div>

            <div class="header__navbar">

                <nav class="header__navbar--top">
                    <ul>
                        <li><a href="#">hauptseite</a></li>
                        <li><a href="#go_pr" class="smoothScroll">präsentation</a></li>
                        <li><a href="#go_bil" class="smoothScroll">bilder</a></li>
                        <li><a href="#go_vor" class="smoothScroll">Vorteile</a></li>
                        <li><a href="#go_price" class="smoothScroll">Preise</a></li>
                        <li><a href="#go_contact" class="smoothScroll">Kontakt</a></li>
                    </ul>
                </nav>

            </div>

            <h1 class="header__title"><?= $atts['text']; ?></h1>


        </div>



    </div>

</header>
