<!-- Load Header    -->
<?php get_header(); ?>

<?php 
// the query
// the query to set the posts per page to 3
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array('posts_per_page' => 3, 'paged' => $paged );
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<div class= "row">
    	<div class= "col-md-12 col-xs-12 blogpost">
			<div class="date-info"><?php the_date(); ?></div>
    		<h1><a href="<?php the_permalink(); ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
    	<?php the_content(__('(more...)')); ?>
    	</div>
		</div>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>