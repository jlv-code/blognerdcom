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
    <?php get_search_form() ?>
</section>

<!-- Article -->
<section class="container-fluid section-article">
    <?php get_template_part( 'partials/template', 'article-detail' ) ?>
</section>

<!-- CTA Newsletter -->
<section class="container-fluid section-cta-newsletter mt-5 border-top border-gray-200">
	<?php get_template_part( 'partials/template', 'cta-newsletter' ) ?>
</section>

<!-- Comments section -->
<section class="container-fluid section-comments mt-5">
    <div class="row">
        <div class="container">
			<?php comments_template(); ?>
        </div>
    </div>
</section>

<!-- Articles Related -->
<section class="container-fluid section-articles-related mt-5">
    <?php get_template_part( 'partials/template', 'articles-related' ) ?>
</section>

<?php get_footer() ?>
