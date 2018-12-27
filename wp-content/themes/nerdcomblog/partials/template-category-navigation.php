<?php $categories = get_categories() ?>

<div class="row">
    <div class="container">
        <nav class="categories-navigation">
            <div class="dropdown d-lg-none">
                <button class="btn btn-red dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Selecciona una categoría
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
	                <?php for ( $i = 0; $i < 8; $i++ ) : ?>
<!--                    <a class="dropdown-item" href="#">Action</a>-->
                    <a href="<?php echo esc_url( get_category_link( $categories[$i]->term_id ) ) ?>" class="dropdown-item"><?php echo $categories[$i]->name ?></a>
	                <?php endfor; ?>
                </div>
            </div>

            <ul class="nav justify-content-between d-none d-lg-flex">
                <?php for ( $i = 0; $i < 8; $i++ ) : ?>
                <li class="nav-item">
                    <a href="<?php echo esc_url( get_category_link( $categories[$i]->term_id ) ) ?>" class="nav-link font-weight-bold btn <?php echo ( single_cat_title( null, false ) === $categories[$i]->name ) ? 'btn-outline-secondary': '' ?>"><?php echo $categories[$i]->name ?></a>
                </li>
                <?php endfor; ?>
            </ul>
        </nav>
    </div>
</div>
