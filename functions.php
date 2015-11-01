// Make sure to add this coding to your functions.php file DO NOT OVERWRITE YOUR EXISTING FILE!

<?php
function ga_tracking_one() {
return '<div class="vcex-blog-entry-readmore-wrap clr textcenter"><a href="'. bp_loggedin_user_domain() . 'messages/compose/?r=wreesmandm" title="Send a private message to this user." class="send-message vcex-button animate-on-hover">Private Message David & Melody</a></div>';
}
add_shortcode('ga-tracking-one', 'ga_tracking_one');
