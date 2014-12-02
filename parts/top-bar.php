<div class="top-bar-container show-for-medium-up">
    <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area">
            <li class="name">
                <h1><a href="<?php echo home_url(); ?>"><div class="header_logo"><?php bloginfo('name'); ?></div></a></h1>
            </li>
        </ul>
        <section class="top-bar-section">
            <?php foundationPress_top_bar_l(); ?>
            <?php foundationPress_top_bar_r(); ?>   
            <section class="show-for-medium-only">
                <a href="off-canvas-common" role="button" class="right-off-canvas-toggle right-menu-icon">
                    Menu &nbsp;<i class="fi-list"></i>
                </a>
            </section>
        </section>               
    </nav>
</div>

