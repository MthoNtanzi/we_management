<!-- Frequently Asked Questions -->
<div class="container-xxl py-5 bg-light">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
            <h1 class="mb-3">Frequently Asked Questions</h1>
            <p class="text-white">We understand you may have questions about our services, processes, or the
                commercial real estate industry. Here are answers to some of the most common ones we receive.</p>
        </div>

        <div class="accordion wow fadeInUp" data-wow-delay="0.2s" id="faqAccordion">
            <?php
            $faqs = get_theme_mod('faqs_repeater');
            if ( is_array($faqs) && !empty($faqs) ) :
                $i = 1;
                foreach ( $faqs as $faq ) :
                    $question = isset($faq['faq_question']) ? esc_html($faq['faq_question']) : '';
                    $answer   = isset($faq['faq_answer']) ? wp_kses_post($faq['faq_answer']) : '';
            ?>
            <div class="accordion-item border-0 mb-3 shadow-sm rounded">
                <h2 class="accordion-header" id="faqHeading<?= $i ?>">
                    <button class="accordion-button collapsed bg-white fw-semibold" type="button"
                        data-bs-toggle="collapse" data-bs-target="#faqCollapse<?= $i ?>" aria-expanded="false"
                        aria-controls="faqCollapse<?= $i ?>">
                        <?= $question ?>
                    </button>
                </h2>
                <div id="faqCollapse<?= $i ?>" class="accordion-collapse collapse"
                    aria-labelledby="faqHeading<?= $i ?>" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <?= $answer ?>
                    </div>
                </div>
            </div>
            <?php $i++; endforeach; endif; ?>
        </div>
    </div>
</div>
<!-- End Frequently Asked Questions -->
