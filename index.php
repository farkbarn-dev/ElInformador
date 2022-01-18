<?php
  get_header();
?>
<section class="slider"></section>

          <section class="notas">
          <p class="eticat"><a class="linkcat" href="#">venezuela</a></p>
          <?php
            query_posts('category_name=venezuela&posts_per_page=9' );
            while (have_posts()):the_post(); ?>
            <section class="nota">
              <a class="linknotafront" href="<?php the_permalink(); ?>"><img class="imgnotafront" src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></a>
              <a class="linknotafront" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              <p class="fechanotafront"><?php echo get_the_date('d/m/Y'); ?></p>
            </section>
          <?php endwhile; ?>
          </section>

          <p class="eticat"><a class="linkcat" href="#">especiales</a></p>
          <?php
            query_posts('category_name=especiales&posts_per_page=9' );
            while (have_posts()):the_post(); ?>
            <section class="nota">
              <a class="linknotafront" href="<?php the_permalink(); ?>"><img class="imgnotafront" src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></a>
              <a class="linknotafront" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              <p class="fechanotafront"><?php echo get_the_date('d/m/Y'); ?></p>
            </section>
          <?php endwhile; ?>

          <p class="eticat"><a class="linkcat" href="#">actualidad</a></p>
          <?php
            query_posts('category_name=actualidad&posts_per_page=9' );
            while (have_posts()):the_post(); ?>
            <section class="nota">
              <a class="linknotafront" href="<?php the_permalink(); ?>"><img class="imgnotafront" src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></a>
              <a class="linknotafront" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              <p class="fechanotafront"><?php echo get_the_date('d/m/Y'); ?></p>
            </section>
          <?php endwhile; ?>

          <p class="eticat"><a class="linkcat" href="#">opinión</a></p>
          <?php
            query_posts('category_name=opinion&posts_per_page=9' );
            while (have_posts()):the_post(); ?>
            <section class="nota">
              <a class="linknotafront" href="<?php the_permalink(); ?>"><img class="imgnotafront" src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></a>
              <a class="linknotafront" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              <p class="fechanotafront"><?php echo get_the_date('d/m/Y'); ?></p>
            </section>
          <?php endwhile; ?>

          <p class="eticat"><a class="linkcat" href="#">deportes</a></p>
          <?php
            query_posts('category_name=deportes&posts_per_page=9' );
            while (have_posts()):the_post(); ?>
            <section class="nota">
              <a class="linknotafront" href="<?php the_permalink(); ?>"><img class="imgnotafront" src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></a>
              <a class="linknotafront" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              <p class="fechanotafront"><?php echo get_the_date('d/m/Y'); ?></p>
            </section>
          <?php endwhile; ?>

          <p class="eticat"><a class="linkcat" href="#">internacionales</a></p>
          <?php
            query_posts('category_name=internacionales&posts_per_page=9' );
            while (have_posts()):the_post(); ?>
            <section class="nota">
              <a class="linknotafront" href="<?php the_permalink(); ?>"><img class="imgnotafront" src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></a>
              <a class="linknotafront" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              <p class="fechanotafront"><?php echo get_the_date('d/m/Y'); ?></p>
            </section>
          <?php endwhile; ?>

        </section><!---fin notas-->
<?php
  get_footer();
?>
