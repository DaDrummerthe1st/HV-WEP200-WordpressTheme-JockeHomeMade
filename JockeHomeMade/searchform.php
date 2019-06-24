<?php
# Will be used instead of the standard search form if exists
# https://developer.wordpress.org/reference/functions/get_search_form/
# https://codex.wordpress.org/Creating_a_Search_Page
# this file has to follow alot of mandatory conventions
?>

<!-- id and action are mandatory as is below -->
<form id="searchform" method="get" action="index.php">
    <div id="custom-search">
        <!-- name & id are mandatory as presented below -->
        <input type="text" name="s" id="s" size="15" placeholder="Search this site" />
        <input type="submit" id="search-button" value="Search" />
    </div>
</form>

