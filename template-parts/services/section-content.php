<!-- Content Start -->
<div id="services-overview-container" class="container-xxl py-5">

    <!-- Dynamic Section Heading -->
    <h2 id="services-overview-heading" class="display-5 text-center py-6 text-capitalize">
        <?php echo esc_html( get_theme_mod( 'services_overview_heading', 'Services we offer' ) ); ?>
    </h2>

    <!-- Dynamic Paragraph -->
    <?php 
    $paragraph = get_theme_mod( 'services_overview_paragraph' );
    if ( ! empty( $paragraph ) ) : ?>
        <p id="services-overview-paragraph" class="text-center lead mb-5">
            <?php echo esc_html( $paragraph ); ?>
        </p>
    <?php endif; ?>

    <!-- Property Management Services -->
    <div id="service-property-management" class="mb-4" onclick="window.location.href='<?php echo site_url('/property-management'); ?>'">
        <h3 id="service-property-title" class="text-center" style="margin: 20px auto 60px auto;">Property Management Services</h3>
        <div class="image_and_service_desc">
            <img id="service-property-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/service_property_management.jpg" alt="Property Management Image" />
            <p id="service-property-description">
                Commercial property management involves overseeing daily operations, tenant relations, and financial performance to enhance property value.
            </p>
        </div>
    </div>

    <!-- Brokerage Services -->
    <div id="service-brokerage" class="mb-4" onclick="window.location.href='<?php echo site_url('/brokerage'); ?>'">
        <h3 id="service-brokerage-title" class="text-center">Brokerage</h3>
        <div class="image_and_service_desc">
            <p id="service-brokerage-description">
                Brokerage services connect buyers, sellers, and tenants with the right commercial properties. Whether you're leasing, purchasing, or selling, our licensed brokers deliver results.
            </p>
            <img id="service-brokerage-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/brokerage/brokerage.jpg" alt="Brokerage Image" />
        </div>
    </div>

    <!-- Facility Management Services -->
    <div id="service-facility" class="mb-4" onclick="window.location.href='<?php echo site_url('/facility-management'); ?>'">
        <h3 id="service-facility-title" class="text-center">Facility Management</h3>
        <div class="image_and_service_desc">
            <img id="service-facility-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/wpc/gathering.jpg" alt="Facility Management Image" />
            <p id="service-facility-description">
                Customized support for specific property management challenges.
            </p>
        </div>
    </div>

    <!-- WE Property Care Services -->
    <div id="service-wpc" class="mb-4" onclick="window.location.href='<?php echo site_url('/we-property-care'); ?>'">
        <h3 id="service-wpc-title" class="text-center">WE Property Care™</h3>
        <div class="image_and_service_desc">
            <p id="service-wpc-description">
                Empowering businesses to protect their properties through education, preventive maintenance programs, and ongoing expert support.
            </p>
            <img id="service-wpc-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/wpc/gathering_2.jpg" alt="WE Property Care Image" />
        </div>
    </div>

</div>
<!-- Content End -->
