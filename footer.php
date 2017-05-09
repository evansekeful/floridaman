<?php
/**
 *******************************************************************************
 * //footer.php
 *******************************************************************************
 *
 * The general footer.
 *
 * CODEX REF
 * https://codex.wordpress.org/Theme_Development#Footer_.28footer.php
 *
 * @author
 * @copyright
 * @link
 * @todo
 * @license
 * @since
 * @version
**/
?>

<footer class="footer">
    <section class="widgets">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <?php if ( !dynamic_sidebar( 'footer_left' ) ): ?>
                    <h4 class="text-center">Sidebar (Page)</h4>
                    <p>Oh! No Sidebar?</p>
                    <?php endif; ?>
                </div>

                <div class="col-xl-4">
                    <?php if ( !dynamic_sidebar( 'footer_center' ) ): ?>
                    <h4 class="text-center">Sidebar (Page)</h4>
                    <p>Oh! No Sidebar?</p>
                    <?php endif; ?>
                </div>

                <div class="col-xl-4">
                    <?php if ( !dynamic_sidebar( 'footer_right' ) ): ?>
                    <h4 class="text-center">Sidebar (Page)</h4>
                    <p>Oh! No Sidebar?</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="copyright" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
        <div class="container">
            <div vlass="row">
                <div class="col-12 text-center" id="copyright">
                    <p class="text-muted">&copy;
                    <a href="<?php echo esc_url( home_url() ); ?>">
                    <?php bloginfo('name'); ?></a>
                    <?php echo date('Y'); ?>. All Rights Reserved
                    </p>
                </div>
            </div>
        </div>
    </section>
</footer>

<?php wp_footer(); ?>

</body>
</html>
