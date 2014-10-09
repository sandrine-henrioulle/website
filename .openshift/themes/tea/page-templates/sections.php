<?php 
/**
 * Template Name: Sections Template
 *
 * Displays the Business Template of the theme.
 *
 * @package ThemeGrill
 * @subpackage Spacious
 * @since Spacious 1.0
 */
?>

<?php get_header(); ?>

	<?php do_action( 'spacious_before_body_content' ); ?>

	<!-- <div id="primary"> -->
		<div id="content" class="clearfix">
			<?php while ( have_posts() ) : the_post(); ?>
               
                        <?php 
                        $parentPageId = get_the_ID();
                        ?>
                        
                        <?php
                        
                        // Set up the objects needed
                        $my_wp_query = new WP_Query();
                        $all_wp_pages = $my_wp_query->query(array('post_type' => 'page'));

                        // Get the page as an Object
                        //$portfolio =  get_page_by_title('Services');

                        // Filter through all pages and find Portfolio's children
                        $portfolio_children = get_page_children( $parentPageId, $all_wp_pages );
                        var_dump($portfolio_children);
                        var_dump($all_wp_pages);
                        //$portfolio->ID
                        foreach($portfolio_children as $child_page){ ?>
                            
                            <div class="section <?php echo strtolower($child_page->post_title)?>">
                                <div class="section-text">
                                    <?php 
                                    echo $child_page->post_content; 
                                  ?>
                                </div>
                            </div>
                        <?php                     
                        }
                            // echo what we get back from WP to the browser
                          //  echo '<pre>' . print_r( $portfolio_children, true ) . '</pre>';
                        ?>
			<?php endwhile; ?>

		</div><!-- #content -->
	<!-- </div> --> <!-- #primary -->
	
	<?php spacious_sidebar_select(); ?>

	<?php do_action( 'spacious_after_body_content' ); ?>

<?php get_footer(); ?>
