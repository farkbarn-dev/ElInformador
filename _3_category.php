<?php get_header(); ?>
<?php
        $categoria = get_query_var('category_name', 0);
        echo $categoria;
?>

<?php echo 'hola'; ?>
<?php echo 'category_name=.$categoria.&posts_per_page=9';?></br>
<?php echo 'posts_per_page=9&category_name='.$categoria ?>
<section class="notas">
<?php
 query_posts('posts_per_page=9');?>
//   query_posts('posts_per_page=9&category_name='.$categoria);?>
  while (have_posts()):the_post(); ?>
  <section class="nota">
    <a class="linknotafront" href="<?php the_permalink(); ?>"><img class="imgnotafront" src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></a>
    <a class="linknotafront" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    <p class="fechanotafront"><?php echo the_category( ' ' ); ?><?php echo get_the_date('d/m/Y'); ?></p>
  </section>
<?php endwhile; ?>
</section>

<?php get_footer(); ?>
