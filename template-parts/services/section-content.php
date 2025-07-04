<!-- Content Start -->
<div id="services-overview-container" class="container-xxl py-5">

    
    <h2 id="services-overview-heading" class="display-5 text-center py-6 text-capitalize">
    <?php echo esc_html( get_theme_mod( 'services_overview_heading', 'Services we offer' ) ); ?>
</h2>

<?php 
    $paragraph = get_theme_mod( 'services_overview_paragraph' );
    if ( ! empty( $paragraph ) ) : ?>
        <p id="services-overview-paragraph" class="text-center lead mb-5">
            <?php echo esc_html( $paragraph ); ?>
        </p>
    <?php endif; ?>

    <!-- Property Management Services -->
    <div id="service-property-management" class="mb-4" onclick="window.location.href='<?php echo site_url('/property-management'); ?>'">
        <h3 id="service-property-title" class="text-center" style="margin: 20px auto 60px auto;">
            <?php echo esc_html( get_theme_mod( 'property_management_title', 'Property Management Services' ) ); ?>
        </h3>
        <div class="image_and_service_desc">
            <img id="service-property-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/service_property_management.jpg" alt="Property Management Image" />
            <p id="service-property-description">
                <?php echo esc_html( get_theme_mod( 'property_management_description', 'Commercial property management involves overseeing daily operations, tenant relations, and financial performance to enhance property value.' ) ); ?>
            </p>
        </div>
    </div>

    <!-- Brokerage Services -->
    <div id="service-brokerage" class="mb-4" onclick="window.location.href='<?php echo site_url('/brokerage'); ?>'">
        <h3 id="service-brokerage-title" class="text-center">
            <?php echo esc_html( get_theme_mod( 'brokerage_title', 'Brokerage' ) ); ?>
        </h3>
        <div class="image_and_service_desc">
            <p id="service-brokerage-description">
                <?php echo esc_html( get_theme_mod( 'brokerage_description', 'Brokerage services connect buyers, sellers, and tenants with the right commercial properties. Whether you\'re leasing, purchasing, or selling, our licensed brokers deliver results.' ) ); ?>
            </p>

            <?php
            $brokerage_image = get_theme_mod( 'brokerage_image' );
            if ( $brokerage_image ) :
            ?>
                <img id="service-brokerage-image" src="<?php echo esc_url( $brokerage_image ); ?>" alt="Brokerage Image" />
            <?php else : ?>
                <img id="service-brokerage-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/brokerage/brokerage.jpg" alt="Brokerage Image" />
            <?php endif; ?>
        </div>
    </div>


    <!-- Facility Management Services -->
    <div id="service-facility" class="mb-4" onclick="window.location.href='<?php echo site_url('/facility-management'); ?>'">
        <h3 id="service-facility-title" class="text-center">
            <?php echo esc_html( get_theme_mod( 'facility_management_title', 'Facility Management' ) ); ?>
        </h3>
        <div class="image_and_service_desc">
            <?php
            $facility_img = get_theme_mod( 'facility_management_image' );
            if ( $facility_img ) :
            ?>
                <img id="service-facility-image" src="<?php echo esc_url( $facility_img ); ?>" alt="Facility Management Image" />
            <?php else : ?>
                <img id="service-facility-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/wpc/gathering.jpg" alt="Facility Management Image" />
            <?php endif; ?>

            <p id="service-facility-description">
                <?php echo esc_html( get_theme_mod( 'facility_management_description', 'Customized support for specific property management challenges.' ) ); ?>
            </p>
        </div>
    </div>


    <!-- WE Property Care Services -->
    <div id="service-wpc" class="mb-4" onclick="window.location.href='<?php echo site_url('/we-property-care'); ?>'">
        <h3 id="service-wpc-title" class="text-center">
            <?php echo esc_html( get_theme_mod( 'wpc_title', 'WE Property Care™' ) ); ?>
        </h3>
        <div class="image_and_service_desc">
            <p id="service-wpc-description">
                <?php echo esc_html( get_theme_mod( 'wpc_description', 'Empowering businesses to protect their properties through education, preventive maintenance programs, and ongoing expert support.' ) ); ?>
            </p>

            <?php
            $wpc_image = get_theme_mod( 'wpc_image' );
            if ( $wpc_image ) :
            ?>
                <img id="service-wpc-image" src="<?php echo esc_url( $wpc_image ); ?>" alt="WE Property Care Image" />
            <?php else : ?>
                <img id="service-wpc-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/wpc/gathering_2.jpg" alt="WE Property Care Image" />
            <?php endif; ?>
        </div>
    </div>


</div>
<!-- Content End -->
