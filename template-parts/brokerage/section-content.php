<!-- Main Container -->
<div class="container py-5">

    <!-- What is a Brokerage -->
    <div class="row justify-content-center g-5">
        <div class="col-md-6 mx-auto">
            <h1 id="brokerage-intro-heading" class="mb-4 text-primary text-center">
                <?php echo esc_html( get_theme_mod('brokerage_intro_heading', 'What is a Brokerage?') ); ?>
            </h1>
            <p id="brokerage-intro-paragraph" class="text-muted text-center">
                <?php echo esc_html( get_theme_mod('brokerage_intro_paragraph', 'Brokerage services connect buyers, sellers, and tenants with the right commercial properties...') ); ?>
            </p>
            <div class="text-center mt-3">
                <a href="<?php echo site_url('/blog'); ?>" class="btn btn-primary mt-3 mx-auto">Learn More</a>
            </div>
        </div>
    </div>

    <!-- What We'll Offer -->
    <div class="row justify-content-center g-5 mt-5">
        <div class="col-md-6 mx-auto bg-white p-4">
            <h1 id="brokerage-offer-heading" class="text-center mb-4 text-primary">
                <?php echo esc_html( get_theme_mod('brokerage_offer_heading', "What We'll Offer") ); ?>
            </h1>
            <ul class="list-unstyled text-start">

                <li class="mb-3">
                    <h5 id="brokerage-offer-property_listings-title" class="text-dark text-center">
                        <?php echo esc_html( get_theme_mod('brokerage_offer_property_listings_title', 'Property Listings') ); ?>
                    </h5>
                    <p id="brokerage-offer-property_listings-desc" class="text-muted text-center">
                        <?php echo esc_html( get_theme_mod('brokerage_offer_property_listings_desc', 'Access exclusive listings for office, retail, and industrial spaces.') ); ?>
                    </p>
                </li>

                <li class="mb-3">
                    <h5 id="brokerage-offer-buyer_representation-title" class="text-dark text-center">
                        <?php echo esc_html( get_theme_mod('brokerage_offer_buyer_representation_title', 'Buyer/Seller Representation') ); ?>
                    </h5>
                    <p id="brokerage-offer-buyer_representation-desc" class="text-muted text-center">
                        <?php echo esc_html( get_theme_mod('brokerage_offer_buyer_representation_desc', 'Expert guidance through every transaction step.') ); ?>
                    </p>
                </li>

                <li class="mb-3">
                    <h5 id="brokerage-offer-leasing_services-title" class="text-dark text-center">
                        <?php echo esc_html( get_theme_mod('brokerage_offer_leasing_services_title', 'Leasing Services') ); ?>
                    </h5>
                    <p id="brokerage-offer-leasing_services-desc" class="text-muted text-center">
                        <?php echo esc_html( get_theme_mod('brokerage_offer_leasing_services_desc', 'Find the perfect tenants or spaces with our market insights.') ); ?>
                    </p>
                </li>

                <li class="mb-3">
                    <h5 id="brokerage-offer-licensed_brokers-title" class="text-dark text-center">
                        <?php echo esc_html( get_theme_mod('brokerage_offer_licensed_brokers_title', 'Licensed Brokers') ); ?>
                    </h5>
                    <p id="brokerage-offer-licensed_brokers-desc" class="text-muted text-center">
                        <?php echo esc_html( get_theme_mod('brokerage_offer_licensed_brokers_desc', 'We leverage data to secure the best deals.') ); ?>
                    </p>
                </li>

                <li>
                    <h5 id="brokerage-offer-personalized_service-title" class="text-dark text-center">
                        <?php echo esc_html( get_theme_mod('brokerage_offer_personalized_service_title', 'Personalized Service') ); ?>
                    </h5>
                    <p id="brokerage-offer-personalized_service-desc" class="text-muted text-center">
                        <?php echo esc_html( get_theme_mod('brokerage_offer_personalized_service_desc', 'Trust, integrity, and wealth-building advice.') ); ?>
                    </p>
                </li>
            </ul>
        </div>
    </div>

    <!-- Why Use Our Brokerage -->
    <div class="row justify-content-center g-5 mt-5">
        <div class="col-md-6 mx-auto bg-white p-4">
            <h1 id="brokerage-why-heading" class="mb-4 text-primary text-center">
                <?php echo esc_html( get_theme_mod('brokerage_why_heading', 'Why Use Our Brokerage') ); ?>
            </h1>
            <ul class="list-unstyled text-start">

                <li class="mb-3">
                    <h5 id="brokerage-why-licensed_brokers-title" class="text-dark text-center">
                        <?php echo esc_html( get_theme_mod('brokerage_why_licensed_brokers_title', 'Licensed Brokers') ); ?>
                    </h5>
                    <p id="brokerage-why-licensed_brokers-desc" class="text-muted text-center">
                        <?php echo esc_html( get_theme_mod('brokerage_why_licensed_brokers_desc', 'Our team is certified with deep industry connections.') ); ?>
                    </p>
                </li>

                <li class="mb-3">
                    <h5 id="brokerage-why-market_insights-title" class="text-dark text-center">
                        <?php echo esc_html( get_theme_mod('brokerage_why_market_insights_title', 'Market Insights') ); ?>
                    </h5>
                    <p id="brokerage-why-market_insights-desc" class="text-muted text-center">
                        <?php echo esc_html( get_theme_mod('brokerage_why_market_insights_desc', 'We leverage data to secure the best deals.') ); ?>
                    </p>
                </li>

                <li class="mb-3">
                    <h5 id="brokerage-why-personalized_service-title" class="text-dark text-center">
                        <?php echo esc_html( get_theme_mod('brokerage_why_personalized_service_title', 'Personalized Service') ); ?>
                    </h5>
                    <p id="brokerage-why-personalized_service-desc" class="text-muted text-center">
                        <?php echo esc_html( get_theme_mod('brokerage_why_personalized_service_desc', 'Trust, Integrity and invest/wealth/profit') ); ?>
                    </p>
                </li>
            </ul>
        </div>
    </div>

</div>

<?php get_footer(); ?>