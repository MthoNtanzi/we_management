<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - We Management Group</title>

    <?php
        wp_head();
    ?>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        
        <!-- Spinner Start -->
        <?php
            get_template_part('template-parts/', 'spinner');
        ?>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="index.html" class="navbar-brand d-flex align-items-center text-center">
                    <div class="icon p-2 me-2">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/logo.jpg" alt="Icon" style="width: 30px; height: 30px;">
                    </div>
                    <h1 class="m-0 text-primary">WEManagement</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="index.html" class="nav-item nav-link">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>

                        <!-- Dropdown for service sections -->
                        <div class="nav-item dropdown">
                            <a href="services.html" class="nav-link dropdown-toggle active" id="servicesDropdown"
                                role="button">
                                Services
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                                <li><a class="dropdown-item" href="property-management.html">Property Management</a>
                                </li>
                                <li><a class="dropdown-item" href="brokerage.html">Brokerage</a></li>
                                <li><a class="dropdown-item" href="facility-management.html">Facility Management</a></li>
                                <li><a class="dropdown-item" href="we-property-care.html">WE Property Care™</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Dropdown for service sections -->

                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                        <a href="blog.html" class="nav-item nav-link">Blog</a>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->


        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row page_header">
                <div class="col-md-6 text-wrapper p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">
                        Our <span class="text-primary">Service</span>
                    </h1>
                    <p class="animated fadeIn mb-4 pb-2">
                        At W.E. Management Group, we specialize in managing and leasing commercial spaces. From
                        attracting quality tenants to streamlining daily operations, we help property owners enhance
                        asset performance and build lasting value.
                    </p>
                </div>

                <div class="col-md-6 image-wrapper animated fadeIn position-relative">
                    <div class="owl-carousel header-carousel">
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/carousel-1.jpg" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/carousel-2.jpg" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Header End -->