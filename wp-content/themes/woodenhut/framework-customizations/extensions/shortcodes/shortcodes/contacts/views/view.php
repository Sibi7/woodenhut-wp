<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<footer class="footer">

    <div class="container">
        <h3 class="present__title" id="go_contact"><?= $atts['title'];?></h3>

        <div class="footer__links">

            <p class="footer__links--text"><?= $atts['address'];?></p>
            <p class="footer__links--text"><?= $atts['phone'];?>/ <?= $atts['fax'];?></p>
            <a href="mailto:<?= $atts['email'];?>" class="footer__links--text">E-Mail <?= $atts['email'];?></a>


        </div>

        <div class="footer__map">
            <div id="map">
	            <?= $atts['iframe'];?>
            </div>
        </div>

    </div>


    <a id="Go_Top">
        <img alt="up" src="<?php bloginfo('template_directory') ;?>/img/icons/up.png">
    </a>

</footer>