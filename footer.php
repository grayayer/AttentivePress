</section>
<footer class="row">
  <div class="footer_grid" data-equalizer>

	<?php do_action('foundationPress_before_footer'); ?>
  <?php dynamic_sidebar("footer-widget-1"); ?>
  <?php dynamic_sidebar("footer-widget-2"); ?>
  <?php dynamic_sidebar("footer-widget-3"); ?>
  <?php dynamic_sidebar("footer-widget-4"); ?>
  <?php dynamic_sidebar("footer-widget-5"); ?>

	<?php do_action('foundationPress_after_footer'); ?>
  </div>
</footer>
<a class="exit-off-canvas"></a>
<footer class="credit_footer">
  <div class="row">
    <div class="centered">
      <a href="http://laurasuedesign.com/"><img src="<?php echo get_stylesheet_directory_uri()?>/images/logo_laurasue.svg" height="33" style="padding-right:10px;"></a>
      <a href="http://studiok40.com"><img src="<?php echo get_stylesheet_directory_uri()?>/images/logo_studiok40.svg" height="33"/></a>
    </div>
  </div>
</div>

	<?php do_action('foundationPress_layout_end'); ?>
	</div>
</div>
<?php wp_footer(); ?>
<?php do_action('foundationPress_before_closing_body'); ?>



</body>
</html>
