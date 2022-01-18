<?php
  get_header();
?>
<section class="notint">
  <section class="secimgnotafront">
    <img class="imgnotafront" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
  </section>
  <?php
    while (have_posts()){the_post(); ?>
      <a class="linknotint" href="<?php the_permalink();?>"><?php the_title(); ?></a>
      <section class="notintsingle">
      <?php
      /*the_post_thumbnail();*/
             the_content();
           }
      ?>
      </section>
</section>
<?php
  get_footer();
?>
