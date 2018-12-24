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

<!-- Category Title-->
<section class="container-fluid section-category-title mt-4">
    <?php get_template_part( 'partials/category', 'title' ) ?>
</section>

<!-- Category Navigation -->
<section class="container-fluid section-category-navigation pt-4">
    <?php get_template_part( 'partials/template', 'category-navigation' ) ?>
    <?php get_search_form() ?>
</section>

<!-- Article Listing -->
<section class="container-fluid section-article-listing gray-200 pt-4 mb-5">
    <?php get_template_part( 'partials/template', 'category-listing' ) ?>
</section>

<!-- CTA Newsletter -->
<section class="container-fluid section-cta-newsletter mb-5">
    <?php get_template_part( 'partials/template', 'cta-newsletter' ) ?>
</section>

<?php get_footer() ?>
