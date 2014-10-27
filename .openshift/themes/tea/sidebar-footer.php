<?php
/**
 * The Sidebar containing the footer widget areas.
 *
 * @package ThemeGrill
 * @subpackage Spacious
 * @since Spacious 1.0
 */
?>

<?php
/**
 * The footer widget area is triggered if any of the areas
 * have widgets. So let's check that first.
 *
 * If none of the sidebars have widgets, then let's bail early.
 */
if( !is_active_sidebar( 'spacious_footer_sidebar_one' ) &&
	!is_active_sidebar( 'spacious_footer_sidebar_two' ) &&
	!is_active_sidebar( 'spacious_footer_sidebar_three' ) &&
	!is_active_sidebar( 'spacious_footer_sidebar_four' ) ) {
	return;
}
?>
<div class="footer-widgets-wrapper">
	<div class="inner-wrap">
		<div class="footer-widgets-area clearfix">
				<?php
				// Calling the footer sidebar if it exists.
				if ( !dynamic_sidebar( 'spacious_footer_sidebar_one' ) ):
				endif;
				?>
		</div>
	</div>
</div>
