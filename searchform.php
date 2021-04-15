<form action="/wordpressproiect" method="get">
    <input id="search" type="text" name="s" class="search-input" value="<?php the_search_query();?>" required>
    <input type="hidden" name="post_type" value="post" />
    <a href="#search">
        <i class="icon fas fa-search"></i>
    </a>
</form>