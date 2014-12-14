<aside class="left-off-canvas-menu" aria-hidden="true">
    <div class="corporate_section">
	    <ul class="off-canvas-list">
	        <li id="corporate_style_btn"><a href="/corporate/" class="fi-home icon"> Home</a></li>
	    </ul>
    	<?php foundationPress_mobile_off_canvas_corporate(); ?>
		<?php foundationPress_medium_right_off_canvas(); ?>

	        <li id="personal_style_btn" class="off_canvas_link_item">
	        	<a class="button personal personal_off_canvas_link" href="/personal/">
	        		Switch to Personal <i class="fi-arrow-right float-right"></i>
	        	</a>
	        </li>
	</div>
    <div class="personal_section">
	    <ul class="off-canvas-list">
	        <li><a href="/personal/" class="fi-home icon"> Home</a></li>
	    </ul>    	
    <?php foundationPress_mobile_off_canvas_personal(); ?>
	<?php foundationPress_medium_right_off_canvas(); ?>

	<li id="corporate_style_btn" class="off_canvas_link_item">
		<a class="button corporate corporate_off_canvas_link" href="/corporate/">
			Switch to Corporate
		</a>
	</li>
	</div>
</aside>