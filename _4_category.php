<?php get_header(); ?>
<?php
        $categoria = get_query_var('category_name', 0);
        echo $categoria;
?>

<?php echo 'hola'; ?>

<section class="notas">
<?php
  query_posts('category_name=$categoria&posts_per_page=9' );
  while (have_posts()):the_post(); ?>
  <section class="nota">
    <a class="linknotafront" href="<?php the_permalink(); ?>"><img class="imgnotafront" src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></a>
    <a class="linknotafront" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    <p class="fechanotafront"><?php echo the_category( ' ' ); ?><?php echo get_the_date('d/m/Y'); ?></p>
  </section>
<?php endwhile; ?>
</section>

<?php get_footer(); ?>
