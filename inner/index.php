<?php get_footer(); ?>

<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class= "row">
    <div class= "col-md-12 col-xs-12 blogpost">


    	<div class="date-info"><?php the_date(); ?></div>
    	<h1><?php the_title(); ?></h1>
    	<?php the_content(__('(more...)')); ?>
    </div>
</div>

<?php endwhile; else: ?>
	<h2><?php _e('Sorry, no posts matched your criteria.'); ?></h3>
<?php endif; ?>

<?php get_footer(); ?>