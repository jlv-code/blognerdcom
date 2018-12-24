<?php
/**
 * Created by José Viéitez
 * Date: 21/12/18
 */
?>

<div class="row">
    <div class="container">
        <div class="row">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
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