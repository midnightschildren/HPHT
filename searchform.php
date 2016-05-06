<?php
/**
 * default search form
 */
?>
<form role="search" method="get" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="search-wrap pad-2-top">
    	
        <input type="search" name="s" id="search-input" value="<?php echo esc_attr( get_search_query() ); ?>" />
        <button class="screen-reader-text" type="submit" id="search-submit"/><i class="fa fa-search"></i></button>
    </div>
</form>