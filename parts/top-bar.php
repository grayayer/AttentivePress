<div class="top-bar-container show-for-medium-up">
    <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area">
            <li class="name">
                <h1><a href="<?php echo home_url(); ?>"><div class="header_logo"><?php bloginfo('name'); ?></div></a></h1>
            </li>
        </ul>
        <nav class="pre-top-bar-section">
            <ul>
                <li id="personal_style_btn"><a href="/personal/" class="personal left personal_style"><span>Personal</span></a></li>
                <li id="corporate_style_btn"><a href="/corporate/" class="corporate left corporate_style"><span>Corporate</span></a></li>

<!--                     <li id="corporate"><a class="left" href="">Corporate Style</a></li>
                    <li id="personal_style_btn"><a class="left" rel="<?php //echo get_stylesheet_directory_uri() ; ?>/css/personal.css" href="">Personal Style</a></li>

                    <li id="personal_style_btn"><a class="left" href="#">high contrast</a></li> -->


                <li><a href="https://passport.attentivehealth.com/" class="passport right"><span>Passport to Health</span></a></li>
            </ul>
        </nav>
        <section class="top-bar-section">
            <?php foundationPress_top_bar_l_corporate(); ?>
            <?php foundationPress_top_bar_l_personal(); ?>
            <?php foundationPress_top_bar_r(); ?>   
                <a href="off-canvas-common" role="button" class="right-off-canvas-toggle right-menu-icon show-for-medium-only">
                    Menu &nbsp;<i class="fi-list"></i>
                </a>
        </section>               
    </nav>
</div>