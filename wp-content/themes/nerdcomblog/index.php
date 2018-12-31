<?php
/**
 * Created by José Viéitez
 * Date: 21/12/18
 */
?>

<?php get_header() ?>

<!-- Featured Post -->
<section class="container-fluid bg-gray-100 section-featured-post border-bottom border-gray-300 mb-5">
    <?php get_template_part( 'partials/template', 'featured-post' ) ?>
</section>

<!-- CTA Newsletter -->
<section class="container-fluid section-cta-newsletter mb-5">
	<?php get_template_part( 'partials/template', 'cta-newsletter' ) ?>
</section>

<!-- Category Navigation -->
<section class="container-fluid section-category-navigation border-top border-gray-200 pt-4">
    <?php get_template_part( 'partials/template', 'category-navigation' ) ?>
    <?php get_search_form() ?>
</section>

<!-- Article Listing -->
<section class="container-fluid section-article-listing gray-200 pt-4 mb-5">
    <?php get_template_part( 'partials/template', 'post-listing' ) ?>
</section>

<?php get_footer() ?>
