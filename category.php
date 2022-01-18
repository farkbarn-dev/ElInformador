<?php
/**
* A Simple Category Template
*/

get_header(); ?>


<?php while (have_posts()) : the_post(); ?>
<div class="excerpt-post">
<h2 id="post-<?php the_ID(); ?>">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
<?php the_title(); ?></a></h2>
<div class="catslist"><?php the_category(' and '); ?></div>
    <div class="entry">
        <?php the_excerpt('Continue Reading...') ?>
    </div>
</div>
<?php endwhile; ?>




<?php //get_sidebar(); ?>
<?php get_footer(); ?>
