<?php
/**
 * Created by José Viéitez
 * Date: 21/12/18
 */

$args = array(
    's' => get_search_query(),
    'paged' => ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1
);

$posts = new WP_Query( $args );

?>

<div class="row">
    <div class="container">
        <div class="row">
            <div class="container-fluid">
                <h1 class="text-center text-gray-600 font-weight-bold mb-5">Resultados para: <?php echo get_search_query() ?></h1>
            </div>
            <?php if ( $posts->have_posts() ) : while ( $posts->have_posts() ) : $posts->the_post() ?>
            <?php get_template_part( 'partials/post', 'fluid' ) ?>
            <?php endwhile; else: ?>
            <div class="container-fluid">
                <p class="h4 mt-5 mb-5 text-center">No se encontraron resultados en esta busqueda...</p>
            </div>
            <?php endif; wp_reset_postdata(); ?>
        </div>
        <div class="row">
            <div class="container-fluid">
                <?php get_template_part( 'partials/pagination', 'basic' ) ?>
            </div>
        </div>
    </div>
</div>