<?php
/**
 * The footer for obandes.
 *
 *
 * @package: obandes
 * @since obandes 0.1
 */
?>
<br class="clear" />
<footer class="bar">
<?php 	printf('<a href="%s" class="go-page-top">PageTop</a>', '#' ); ?>
  <div id="colophon">
    <?php    get_sidebar('footer');?>
    <address>
    <a href="<?php echo esc_url( __('http://www.tenman.info/wp3/obandes/', 'obandes') ); ?>" rel="home"><?php printf( __('Theme: %s', 'obandes'), 'obandes' ); ?></a>
    </address>
    <!-- #site-info -->
    <div id="site-generator"> <a href="<?php echo esc_url( __('http://wordpress.org/', 'obandes') ); ?>"                      title="<?php esc_attr_e('Semantic Personal Publishing Platform', 'obandes'); ?>"><?php printf( __('Proudly powered by %s.', 'obandes'), 'WordPress' ); ?> </a> </div>
    <!-- #site-generator -->
  </div>
  <!-- #colophon -->
</footer>
</div>
<?php wp_footer();?>
</body>
</html>
