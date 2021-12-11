<?php get_header(); ?>
<!-- ------------------------------ -->
<header>

  <div id="fixed">
    menu menu menu menu menu menu
  </div>

  <div class="heading">
    <div>logo</div>
    <button type="button" class="menu-btn">
      <i class="fas fa-bars"></i>
    </button>
  </div>

  <div class="menu">
    <div class="menu__item">TOP</div>
    <div class="menu__item">ABOUT</div>
    <div class="menu__item">BLOG</div>
    <div class="menu__item">CONTACT</div>
  </div>


  <!-- ------------------------------ -->
  <div class="video-area">
    <video webkit-playsinline playsinline muted autoplay loop>
      <source src='<?php echo get_template_directory_uri(); ?>/video/movie.mp4' type='video/mp4'>
    </video>
    <h1>住み替えを、<br>もっと気軽に。<br>もっと楽しく。</h1>
  </div>
</header>
<!-- ------------------------------ -->
<main>
  <h1>
    <?=
    'ああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ';
    ?>
  </h1>


  <section>
    <div class="image-area">
      <div class="image">
        <img src="<?php echo get_template_directory_uri(); ?>/img/image.png" alt="img">
      </div>
      <div class='text'>
        <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
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
  <section class="center">
    <div class="bg">
      <div class="sample">
        <ul>
          <li>あいうえおかきくけこ</li>
          <li>さしすせそ</li>
          <li>たちつてとなにぬねのはひふへほ</li>
        </ul>
      </div>
    </div>
    </div>
  </section>


  <div class="manbow">
    <a href="...">マンボウ</a>
  </div>



  <!-- ------------------------------ -->
</main>
<?php get_footer(); ?>