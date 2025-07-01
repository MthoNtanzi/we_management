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
    <?php
        get_template_part('template-parts/home/section', 'about');
    ?>
    <!-- About End -->

    <!-- Testimonial Start -->
    <?php
        get_template_part('template-parts/home/section', 'testimonial');
    ?>
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