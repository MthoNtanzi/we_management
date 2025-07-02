<!-- Custom Search Widget -->
<div class="sidebar-widget wow fadeInUp" data-wow-delay="0.1s">
    <h4 class="widget-title">Search</h4>
    <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
        <input type="text" name="s" placeholder="Search..." value="<?php echo get_search_query(); ?>" />
        <button type="submit"><i class="fas fa-search"></i></button>
    </form>
</div>