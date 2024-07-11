<?php
function get_page_title($default = 'Missouri\'s Wonders') {
    $titles = [
        'index.php' => 'Home',
        'caves.php' => 'Caves',
        'springs.php' => 'Springs',
        'post.php' => 'Posts'
    ];
    
    $current_page = basename($_SERVER['PHP_SELF']);
    return $titles[$current_page] ?? $default;
}

?>