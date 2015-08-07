<form role="search" method="get" class="search" action="<?php echo home_url( '/' ); ?>">
  <div class="form-group">

    <input class="form-control" type="text" value="<?php echo get_search_query() ?>"  name="s" placeholder="<?php _e('Search blog...',BLUE_TEXTDOMAIN)?>">
    <input type="hidden" name="post_type" value="post">

    <button class="btn" type="submit"><i class="fa fa-search"></i></button>

    </span>
  </div>

</form>