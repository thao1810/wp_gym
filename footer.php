<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<footer>
    <div class="footer">
        <div class="footer__top">
            <div class="footer__top__inner">
                <div class="footer__top__inner--logo" >
                    <a href=""><img src="wp-content/themes/twentytwenty/assets/images/img/Logo(5).png" alt="Logo" /></a>
                </div>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the<span></span> industry's standard dummy text
                    ever since the 1500s, when an unknown printer took a galley of type
                </p>
                <ul class="footer__top__inner--icon">
                    <li>
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href=""><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href=""><i class="fab fa-google-plus-g"></i></a>
                    </li>
                    <li>
                        <a href=""><i class="fab fa-youtube"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <hr class="style-hr" />
        
            <div class="row">
                <div class="col-3 one">
                    <div class="contact-us">
                        <div class="contact-us-head"></div>
                        <div class="contact-us-content">

                            <h1>CONTACT US</h1>
                            <ul>
                                <li>
                                    <a href="#"><i class="fas fa-map-marker-alt"></i> &nbsp; &nbsp;&nbsp;&nbsp;200 Lincoln
                                        Ave, Salinas,CA03901</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-phone"></i> &nbsp;&nbsp;&nbsp;023 32423 223</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-envelope-square"></i> &nbsp;&nbsp;&nbsp;
                                        gymax@example.com</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-clock"></i> &nbsp;&nbsp;&nbsp;9:00 - 20:00 All
                                        day</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="contact-us">
                        <div class="contact-us-head"></div>
                        <div class="contact-us-content">
                        <?php
                            if(is_active_sidebar('footer-sidebar-3')){
                            dynamic_sidebar('footer-sidebar-3');
                            }
                        ?>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="contact-us">
                        <div class="contact-us-head"></div>
                        <div class="contact-us-content">
                        <?php
                            if(is_active_sidebar('footer-sidebar-2')){
                            dynamic_sidebar('footer-sidebar-2');
                            }
                        ?>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="contact-us">
                        <div class="contact-us-head"></div>
                        <div class="contact-us-content">
                        <?php
                            if(is_active_sidebar('footer-sidebar-3')){
                            dynamic_sidebar('footer-sidebar-3');
                            }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        
        
    </div>
    <div class="copyright">
        <p>
            Copyright © 2019 Gymax - Design by <a href="#">ArrowHitech</a> - All
            Rights Reserved
        </p>
    </div>
</footer>

        

        <!-- Footer End -->

	</body>
</html>
