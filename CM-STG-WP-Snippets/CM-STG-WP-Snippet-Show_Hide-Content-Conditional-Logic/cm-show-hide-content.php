/**
* CreatiqueMedia Functions
*/

// Add CSS class for logged in and logged out users
add_filter('body_class','cm_logged_in_filter');
function cm_logged_in_filter($classes) {
if( is_user_logged_in() ) {
$classes[] = 'cm-logged-in';
} else {
$classes[] = 'cm-logged-out';
}
// return the $classes array
return $classes;
}