<div class="container-fluid nav-bar bg-transparent">
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="navbar-brand d-flex align-items-center text-center">
            <div class="icon p-2 me-2">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.jpg" alt="Icon" style="width: 30px; height: 30px;">
            </div>
            <h1 class="m-0 text-primary"><?php bloginfo('name'); ?></h1>
        </a>

        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container'      => false,
                'menu_id'     => 'navbarCollapse',
                'fallback_cb'    => false,
                'walker'         => new WP_Bootstrap_Navwalker(), // supports dropdowns
            ]);
            ?>
        </div>
    </nav>
</div>
