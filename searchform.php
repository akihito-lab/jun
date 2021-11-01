<form class="searchform" action="<?php echo home_url(); ?>" method="get">
  <input type="text" id="search" name="s" placeholder="キーワードを入力" value="<?php the_search_query(); ?>">
  <button type="submit" class="search-submit"><i class="fas fa-search"></i></button>
</form>
