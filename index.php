<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Herd_of_Elephants
 */

get_header(); ?>


<?php if (have_posts())  ?>
	<?php while (have_posts()) : the_post(); ?>

<div class= "row">
    <div class= "col-md-1 col-xs-1"></div>
    <div class= "col-md-10 col-xs-10 blogpost">


    	<div class="date-info"><?php the_date(); ?></div>
    	<h1><?php the_title(); ?></h1>
    	<?php the_content(__('(more...)')); ?>
    </div>
    <div class= "col-md-1 col-xs-1"></div>
</div>

<?php endwhile; 

the_posts_pagination( array(
				'prev_text'          => __( 'Previous', 'herdofelephants' ),
				'next_text'          => __( 'Next', 'herdofelephants' ),
			));
	else: ?>
	<h2><?php _e('Sorry, no posts matched your criteria.'); ?></h3>
<?php endif; ?>

<?php get_footer(); ?>