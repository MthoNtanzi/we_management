<!-- Hero Section with Background Image -->
    <div class="hero-section">
        <?php 
            get_template_part('template-parts/section', 'nav');
        ?>

        <!-- Hero Content -->
        <div class="hero-content">
            <h1 class="display-3 fw-bold text-white mb-4">
                Commercial Property <span class="text-primary">Management & Leasing</span>
            </h1>

            <p class="lead mb-5" id="home-description">
            <?php
                echo wp_kses_post(get_theme_mod("home_description", "At WE Management Group, we bring unparalleled expertise in commercial real estate, combining years of
                experience in property management, leasing, and retail development to maximize your investment
                potential.")); 
            ?>
            </p>

            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="services.html" class="btn btn-secondary btn-lg px-4 py-3">Explore Our Services</a>
                <a href="contact.html" class="btn btn-outline-light btn-lg px-4 py-3">Get in Touch</a>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="scroll-indicator">
            <div class="mouse mb-2"></div>
        </div> 
    </div>