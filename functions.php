// Make sure to add this coding to your functions.php file DO NOT OVERWRITE YOUR EXISTING FILE!

<?php
function ga_tracking_one() {

echo "<a class=\"button medium button custom fusion-button button-3d button-square button-medium button-custom button-1 buttonshadow-0\" type=\"button\" target=\"_blank\" title=\"\" href=\"http://www.napaonline.com/Catalog/Result.aspx?Ntt%3dENEOS%26Ntk%3dKeyword%26Nty%3d1%26Dn%3d0%26D%3dENEOS%26Dk%3d1%26Dp%3d3%26N%3d0\" onClick=\"ga('send', 'event', { eventCategory: 'Purchase', eventAction: 'Button', eventLabel: 'Kyle-Larson'});><span class=\"fusion-button-text\">Purchase Now</span></a>\n";
}

add_shortcode('ga-tracking-kyle', 'ga_tracking_one');


function ga_tracking_two() {

echo "<a class=\"button medium button custom fusion-button button-3d button-square button-medium button-custom button-1 buttonshadow-0\" type=\"button\" target=\"_blank\" title=\"\" href=\"http://www.napaonline.com/Catalog/Result.aspx?Ntt%3dENEOS%26Ntk%3dKeyword%26Nty%3d1%26Dn%3d0%26D%3dENEOS%26Dk%3d1%26Dp%3d3%26N%3d0\" onClick=\"ga('send', 'event', { eventCategory: 'Purchase', eventAction: 'Button', eventLabel: 'Steve-Arpin'});><span class=\"fusion-button-text\">Purchase Now</span></a>\n";

}

add_shortcode('ga-tracking-steve', 'ga_tracking_two');