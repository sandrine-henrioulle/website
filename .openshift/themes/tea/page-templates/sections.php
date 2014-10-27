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

        <!-- <div id="content" class="clearfix"> -->
			<?php while ( have_posts() ) : the_post(); ?>
               
                        <?php 
                        $parentPageId = get_the_ID();
                        ?>
                        
                        <?php
                        
                        // Set up the objects needed
                        $my_wp_query = new WP_Query();
                        $all_wp_pages = $my_wp_query->query(array('post_type' => 'page', 'post_parent' =>  $parentPageId,'post_status' => 'publish','orderby' => 'menu_order', 'order' => 'ASC'));

                        foreach($all_wp_pages as $index=>$child_page){
                          ?>
                            <div class="section <?php echo strtolower($child_page->post_title)?>" id="<?php echo 'section_'.$all_wp_pages[$index+1]->ID;?>">
                                <div class="section-text">
                                    <?php 
                                    echo $child_page->post_content; 
                                  ?>
                                </div>
                            </div>
                        <?php                     
                        }

                        ?>
			<?php endwhile; ?>


	<!-- </div> --> <!-- #primary -->
	
	<?php spacious_sidebar_select(); ?>

	<?php do_action( 'spacious_after_body_content' ); ?>

<?php get_footer(); ?>
