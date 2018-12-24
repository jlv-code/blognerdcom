<?php
/**
 * Created by José Viéitez
 * Date: 21/12/18
 */
?>

<?php get_header() ?>

<!-- Back to Home Title-->
<section class="container-fluid section-back-to-home mt-4">
    <?php get_template_part( 'partials/back', 'to-home' ) ?>
</section>

<!-- Category Navigation -->
<section class="container-fluid section-category-navigation border-top border-gray-200 pt-4">
    <?php get_template_part( 'partials/template', 'category-navigation' ) ?>
    <?php get_search_form() ?>
</section>

<!-- Search Results-->
<section class="container-fluid section-search-results gray-200 pt-4 mb-5">
    <?php get_template_part( 'partials/template', 'search-results' ) ?>
</section>

<!-- CTA Newsletter -->
<section class="container-fluid section-cta-newsletter mb-5">
    <?php get_template_part( 'partials/template', 'cta-newsletter' ) ?>
</section>

<?php get_footer() ?>
