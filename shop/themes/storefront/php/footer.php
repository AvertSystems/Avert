<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

                </div><!-- .col-full -->
        </div><!-- #content -->

        <?php do_action( 'storefront_before_footer' ); ?>

        <footer id="colophon" class="site-footer" role="contentinfo">
                <div class="col-full">

                        <?php
                        /**
                         * Functions hooked in to storefront_footer action
                         *
 			 * @hooked storefront_footer_widgets - 10
                         * @hooked storefront_credit         - 20
                         */
                        do_action( 'storefront_footer' );
                        ?>
                        <div id="footer-nav" style="position:relative;bottom:20px;display:flex;">
                                <a class="footer-nav" style="margin-right:40px;text-decoration:none;" href="/shop">Shop</a>
                                <a class="footer-nav" style="margin-right:40px;    text-decoration:none;" href="/shop/cart">Cart</a>
                                <a class="footer-nav" style="margin-right:40px;    text-decoration:none;" href="/shop/checkout">Checkout</a>
                                <a class="footer-nav" style="margin-right:40px;    text-decoration:none;" href="/shop/account">My Account</a>
                                <a class="footer-nav" style="margin-right:40px;    text-decoration:none;" href="/shop/sample-page">Sample Page</a>
                        </div>

                </div><!-- .col-full -->
        </footer><!-- #colophon -->

        <?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>
<script src="wp-content/themes/storefront/footer-nav.js'></script>
</body>
</html>
