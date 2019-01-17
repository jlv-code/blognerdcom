<?php
/**
 * Created by José Viéitez
 * Date: 21/12/18
 */

$args = array(
    'posts_per_page' => 4,
    'post__not_in' => array( $GLOBALS['featuredPostId'] ),
    'paged' => ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1,
    'post_status' => 'published'
);

$posts = new WP_Query( $args );

?>

<div class="row">
    <div class="container">
        <div class="row">
            <?php if ( $posts->have_posts() ) : while ( $posts->have_posts() ) : $posts->the_post() ?>
            <?php get_template_part( 'partials/post', '2-col' ) ?>
            <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
        <div class="row">
            <div class="container-fluid">
                <?php get_template_part( 'partials/pagination', 'basic' ) ?>
            </div>
        </div>
    </div>
</div>