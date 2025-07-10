<nav class="navbar navbar-expand-lg navbar-light fixed-top custom-navbar-new" id="mainNavNew">
    <div class="container">
        <a href="index.html" class="navbar-brand d-flex align-items-center">
            <div class="p-2 me-1">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="WE Management Logo" style="width: 50px; height: 50px;">

            </div>
            <h1 class="m-0 text-white">W.E. Management</h1>
        </a>
        <button class="navbar-toggler custom-toggler-new" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarResponsiveNew" id="navdropdown">
            <span class="navbar-toggler-icon navbar-toggler-icon-new"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsiveNew">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="<?php echo home_url(); ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo home_url('/about'); ?>">About</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="<?php echo home_url('/services'); ?>" id="servicesDropdown">Services</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/property-management">Property Management</a>
                        </li>
                        <li><a class="dropdown-item" href="/brokerage">Brokerage</a></li>
                        <li><a class="dropdown-item" href="/facility-management">Facility Management</a>
                        </li>
                        <li><a class="dropdown-item" href="/we-property-care">WE Property Care™</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="<?php echo home_url('/contact'); ?>">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo home_url('/our-blog'); ?>">Blog</a></li>
            </ul>
        </div>
    </div>
</nav>