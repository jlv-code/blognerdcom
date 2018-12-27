<?php
/**
 * Created by José Viéitez
 * Date: 21/12/18
 */

$categories = [];
$post_categories = get_the_category();


for ( $i = 0; $i < count( $post_categories ); $i++ ) :
	if ($post_categories[$i]->term_id):
		array_push( $categories, $post_categories[$i]->term_id );
	endif;
endfor;

$args = array(
	'posts_per_page' => 2,
	'post_status' => 'published',
	'category__in' => $categories
);

$posts_related = new WP_Query( $args );

?>

<div class="row">
	<div class="container">
		<?php if ( $posts_related->have_posts() ) : while ( $posts_related->have_posts() ) : $posts_related->the_post() ?>
			<?php get_template_part( 'partials/post', '2-col' ) ?>
		<?php endwhile; endif; wp_reset_postdata(); ?>
	</div>
</div>