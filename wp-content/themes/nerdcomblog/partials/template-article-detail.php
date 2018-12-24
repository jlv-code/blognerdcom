<?php
/**
 * Created by José Viéitez
 * Date: 21/12/18
 */
?>

<div class="row">
    <div class="container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
        <div class="row">
            <article class="container-fluid article-detail">
                <header class="article-header text-center">
                    <h1 class="font-weight-bold mt-5 mb-2"><?php the_title() ?></h1>
                    <p class="h6 text-gray-600"><?php the_author() ?> - <?php the_date() ?></p>
                    <?php the_post_thumbnail('full', array( 'class' => 'img-fluid mt-5 mb-5' )) ?>
                </header>
                <section class="article-body"><?php the_content() ?></section>
                <footer class="article-footer"></footer>
            </article>
        </div>
        <?php endwhile; endif; wp_reset_postdata(); ?>
<!--        <div class="row">-->
<!--            <div class="container-fluid">-->
<!--                --><?php //get_template_part( 'partials/pagination', 'basic' ) ?>
<!--            </div>-->
<!--        </div>-->
    </div>
</div>