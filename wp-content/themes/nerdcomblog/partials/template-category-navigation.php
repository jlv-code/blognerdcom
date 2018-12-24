<?php $categories = get_categories() ?>

<div class="row">
    <div class="container">
        <nav class="categories-navigation">
            <ul class="nav justify-content-between">
                <?php for ( $i = 0; $i < 8; $i++ ) : ?>
                <li class="nav-item">
                    <a href="<?php echo esc_url( get_category_link( $categories[$i]->term_id ) ) ?>" class="nav-link font-weight-bold btn <?php echo ( single_cat_title( null, false ) === $categories[$i]->name ) ? 'btn-outline-secondary': '' ?>"><?php echo $categories[$i]->name ?></a>
                </li>
                <?php endfor; ?>
            </ul>
        </nav>
    </div>
</div>
