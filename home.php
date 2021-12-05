<?php get_header(); ?>
<!-- ------------------------------ -->
<header>
  <div>
    <video webkit-playsinline playsinline muted autoplay loop>
      <source src='<?php echo get_template_directory_uri(); ?>/video/movie.mp4' type='video/mp4'>
    </video>
    <div>住み替えを、<br>もっと気軽に。<br>もっと楽しく。</div>
  </div>
</header>
<!-- ------------------------------ -->
<main>
  <section>
    <div class="area">
      <div class="sheep">
        sheep<br>
        e<br>
        e<br>
        e<br>
        e<br>
        e
      </div>
    </div>
  </section>
  <!-- ------------------------------ -->
  <section>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
        <br>
    <?php endwhile;
    endif; ?>
  </section>

  <!-- ------------------------------ -->
  <section>
    <?php
    $args = array(
      'post_type' => 'info',
      'posts_per_page' => 3,
      'paged' => $paged
    );
    $the_query = new WP_Query($args);
    ?>
    <div class="container">
      <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <div><?php echo get_the_date('Y.m.d'); ?></div>
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
          <br>
        <?php endwhile; ?>
    </div>
    <?php wp_reset_postdata(); ?>
  <?php else : ?>
  <?php endif; ?>
  <h2> ---------- </h2>
  </section>
  <!-- ------------------------------ -->
  <section>

  </section>
  <!-- ------------------------------ -->
</main>
<?php get_footer(); ?>