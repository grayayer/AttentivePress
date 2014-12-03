<div class="top-bar-container show-for-medium-up">
    <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area">
            <li class="name">
                <h1><a href="<?php echo home_url(); ?>"><div class="header_logo"><?php bloginfo('name'); ?></div></a></h1>
            </li>
        </ul>
        <nav class="pre-top-bar-section">
            <ul>
                <li><a href="/personal/" class="personal_active left"><span>Personal</span></a></li>
                <li><a href="/corporate/" class="corporate_active left"><span>Corporate</span></a></li>
                <li><a href="#" class="passport right"><span>Passport to Health</span></a></li>
            </ul>
        </nav>
        <section class="top-bar-section">
            <?php foundationPress_top_bar_l_corporate(); ?>
            <?php foundationPress_top_bar_r(); ?>   
                <a href="off-canvas-common" role="button" class="right-off-canvas-toggle right-menu-icon show-for-medium-only">
                    Menu &nbsp;<i class="fi-list"></i>
                </a>
        </section>               
    </nav>
</div>

