<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>We Management Group - Commercial Property Management & Leasing</title>
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" rel="icon">

    <!-- CSS -->
    <?php
        wp_head();
    ?>
    
</head>

<body>
    <!-- Spinner -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <?php
        get_header();
    ?>

    <!-- About Start -->
    <div class="container-xxl py-4">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/our_story/getting-business-finances-in-order.jpg">
                    </div>
                </div>

                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="mb-4 text-capitalize">Who we are & why choose us</h1>
                    <p class="mb-4">
                        WE Management Group is a trusted leader in
                        commercial property management and brokerage,
                        based in Miami, Florida. With our experience, we
                        prioritize transparency, efficiency, and client
                        success.
                    </p>
                    <p class="mb-4">We pride ourselves on fostering strong tenant
                        relationships, optimizing asset performance, and
                        creating vibrant spaces that drive success for
                        property owners and tenants alike. Whether you're
                        looking to enhance your property's value, attract
                        quality tenants, or streamline operations, we are
                        your trusted partner in achieving your commercial
                        real estate goals. Let us help you unlock the full
                        potential of your assets and build thriving spaces for
                        businesses and communities
                    </p>
                </div>
            </div>
            <div class="extra_info_container py-4">
                <div class="extra_info">
                    <h3 class="extra_info_heading">Local Expertise</h3>
                    <p class="extra_info_p">Our deep understanding of the
                        industry allows us to navigate the
                        complexities of commercial
                        properties with precision, ensuring
                        seamless operations and maximum value for your
                        investments.</p>
                </div>
                <div class="extra_info">
                    <h3 class="extra_info_heading">Licensed Professionals</h3>
                    <p class="extra_info_p">
                        Our team holds FL Real Estate Broker certifications for trusted service. With deep knowledge
                        of local regulations and a strong ethical commitment, we handle every transaction with
                        professionalism and integrity.
                    </p>


                </div>
                <div class="extra_info">
                    <h3 class="extra_info_heading">Proactive Management</h3>
                    <p class="extra_info_p">We take a collaborative and personalized approach to property
                        management. As a boutique firm, we prioritize
                        understanding your unique objectives and tailoring solutions to meet your specific needs.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">What Our Clients Say</h1>
                <p>We take pride in the relationships we've built. Here's what some of our clients have to say about
                    their experience working with us - real stories from satisfied tenants, landlords, and partners.
                </p>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4" style="height: 320px;">
                        <p>Working with WE Management Group has been a game changer. Their attention to detail,
                            communication, and commitment to excellence make them stand out in commercial real
                            estate.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial.png"
                                style="width: 58px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Crystal Esparza</h6>
                                <small>Client</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded p-3" style="height: 300px;">
                    <div class="bg-white border rounded p-4">
                        <p>Top-Tier Property Manager

                            Jessica is an outstanding property manager. Professional, reliable, and always on point.
                            Her attention to detail, clear communication, and ability to handle both tenants and
                            property needs with ease make her a true asset in this industry. I've worked with many
                            property managers, and Jessica stands out as one of the best. Highly recommend W.E.
                            Management Group!!</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial.png"
                                style="width: 58px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Fatherzup World</h6>
                                <small>Client</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded p-3" style="height: 300px;">
                    <div class="bg-white border rounded p-4">
                        <p>I highly recommend WE management group. Jessica was very efficient and professional she
                            really looks out for the best interest of her clients.
                            <br>
                        </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial.png"
                                style="width: 58px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Quality Health</h6>
                                <small>Client</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Call to Action Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="bg-light rounded p-3">
                <div class="bg-white rounded p-4" style="border: 1px dashed rgba(0, 185, 142, .3)">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                            <img class="img-fluid rounded w-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/get_in_touch/reach_out_2.jpg" alt="">
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="mb-4">
                                <h1 class="mb-3">Get in Touch with a Certified Property Expert</h1>
                                <p>Have questions or need help finding the right property? Our experienced real
                                    estate
                                    professional is here to assist you with expert guidance, whether you're leasing,
                                    buying, or listing your property.</p>
                            </div>
                            <a href="tel:786-906-2928" class="btn btn-primary py-3 px-4 me-2"><i
                                    class="fa fa-phone-alt me-2"></i>Make A
                                Call</a>
                            <a href="./contact.html" class="btn btn-dark py-3 px-4"><i
                                    class="fa fa-calendar-alt me-2"></i>Get
                                Appoinment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call to Action End -->

    <!-- Frequently Asked Questions -->
    <div class="container-xxl py-5 bg-light">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                <h1 class="mb-3">Frequently Asked Questions</h1>
                <p class="text-white">We understand you may have questions about our services, processes, or the
                    commercial real estate
                    industry. Here are answers to some of the most common ones we receive.</p>
            </div>

            <div class="accordion wow fadeInUp" data-wow-delay="0.2s" id="faqAccordion">
                <!-- Question 1 -->
                <div class="accordion-item border-0 mb-3 shadow-sm rounded">
                    <h2 class="accordion-header" id="faqHeadingOne">
                        <button class="accordion-button collapsed bg-white fw-semibold" type="button"
                            data-bs-toggle="collapse" data-bs-target="#faqCollapseOne" aria-expanded="false"
                            aria-controls="faqCollapseOne">
                            What areas do you serve?
                        </button>
                    </h2>
                    <div id="faqCollapseOne" class="accordion-collapse collapse" aria-labelledby="faqHeadingOne"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            We proudly serve clients throughout the US, offering expert real estate services in
                            both urban and suburban commercial markets.
                        </div>
                    </div>
                </div>

                <!-- Question 2 -->
                <div class="accordion-item border-0 mb-3 shadow-sm rounded">
                    <h2 class="accordion-header" id="faqHeadingTwo">
                        <button class="accordion-button collapsed bg-white fw-semibold" type="button"
                            data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo" aria-expanded="false"
                            aria-controls="faqCollapseTwo">
                            Can you help with property valuations and market analysis?
                        </button>
                    </h2>
                    <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadingTwo"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes, we offer comprehensive property valuation and market analysis services to help
                            clients make informed decisions backed by data and local market trends.
                        </div>
                    </div>
                </div>

                <!-- Question 3 -->
                <div class="accordion-item border-0 mb-3 shadow-sm rounded">
                    <h2 class="accordion-header" id="faqHeadingThree">
                        <button class="accordion-button collapsed bg-white fw-semibold" type="button"
                            data-bs-toggle="collapse" data-bs-target="#faqCollapseThree" aria-expanded="false"
                            aria-controls="faqCollapseThree">
                            How do you ensure client satisfaction?
                        </button>
                    </h2>
                    <div id="faqCollapseThree" class="accordion-collapse collapse" aria-labelledby="faqHeadingThree"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            We prioritize transparency, responsive communication, and tailored solutions to ensure
                            every client feels informed, confident, and supported throughout the process.
                        </div>
                    </div>
                </div>

                <!-- Question 4 -->
                <div class="accordion-item border-0 mb-3 shadow-sm rounded">
                    <h2 class="accordion-header" id="faqHeadingFour">
                        <button class="accordion-button collapsed bg-white fw-semibold" type="button"
                            data-bs-toggle="collapse" data-bs-target="#faqCollapseFour" aria-expanded="false"
                            aria-controls="faqCollapseFour">
                            What types of commercial properties do you handle?
                        </button>
                    </h2>
                    <div id="faqCollapseFour" class="accordion-collapse collapse" aria-labelledby="faqHeadingFour"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            We work with a range of commercial properties including office buildings, retail spaces,
                            industrial facilities, and multifamily investments.
                        </div>
                    </div>
                </div>

                <!-- Question 5 -->
                <div class="accordion-item border-0 mb-3 shadow-sm rounded">
                    <h2 class="accordion-header" id="faqHeadingFive">
                        <button class="accordion-button collapsed bg-white fw-semibold" type="button"
                            data-bs-toggle="collapse" data-bs-target="#faqCollapseFive" aria-expanded="false"
                            aria-controls="faqCollapseFive">
                            How are your agents qualified?
                        </button>
                    </h2>
                    <div id="faqCollapseFive" class="accordion-collapse collapse" aria-labelledby="faqHeadingFive"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            We are licensed with deep industry experience and
                            ongoing training in market trends, compliance, and negotiation strategies.
                        </div>
                    </div>
                </div>

                <!-- Question 6 -->
                <div class="accordion-item border-0 mb-3 shadow-sm rounded">
                    <h2 class="accordion-header" id="faqHeadingSix">
                        <button class="accordion-button collapsed bg-white fw-semibold" type="button"
                            data-bs-toggle="collapse" data-bs-target="#faqCollapseSix" aria-expanded="false"
                            aria-controls="faqCollapseSix">
                            What's the typical process for buying commercial real estate?
                        </button>
                    </h2>
                    <div id="faqCollapseSix" class="accordion-collapse collapse" aria-labelledby="faqHeadingSix"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            The process involves identifying property goals, searching for listings, making offers,
                            conducting due diligence, securing financing, and closing the deal—all with our
                            guidance.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Frequently Asked Questions -->

    <!-- Footer Start -->
    <?php 
        get_footer();
    ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <?php
        wp_footer();
    ?>
</body>

</html>