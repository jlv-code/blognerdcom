<div class="row search-form mt-4 mb-4">
    <div class="container">
        <form role="search" method="get" action="<?php echo site_url('/'); ?>">
            <div class="form-row justify-content-end">
                <div class="col-12 col-md-4 col-lg-3">
                    <i class="fa fa-search"></i>
                    <input id="s" name="s" class="form-control" type="text" value="<?php echo get_search_query() ?>">
                </div>
            </div>
        </form>
    </div>
</div>
