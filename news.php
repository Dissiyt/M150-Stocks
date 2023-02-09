<?php
// function that runs when shortcode is called
function wpb_demo_shortcode() {

// Things that you want to do.
    $news = array(
    id => 1,
    content => 'igor ded, bitcoin goes boom!'
    );

// Output needs to be return
    return $news[2];
    echo $news[2];
}
// register shortcode
add_shortcode('greeting', 'wpb_demo_shortcode');
