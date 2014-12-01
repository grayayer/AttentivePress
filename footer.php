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

	<?php do_action('foundationPress_layout_end'); ?>
	</div>
</div>
<?php wp_footer(); ?>
<?php do_action('foundationPress_before_closing_body'); ?>
</body>
</html>
