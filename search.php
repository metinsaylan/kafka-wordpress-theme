<?php get_header(); ?>
<div class="row">
<div class="col-md-8">
<h1 class="entry-title">Search results for <strong><?php echo get_search_query(); ?></strong></h1>
<?php get_template_part( 'loop' ); ?>
</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
