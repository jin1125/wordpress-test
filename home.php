<?php get_header(); ?>
<!-- ------------------------------ -->
<!-- <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
    <br>
<?php endwhile;
      endif; ?> -->

<!-- ------------------------------ -->
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
<h2>----------</h2>
<?php wp_reset_postdata(); ?>
<?php else : ?>
<?php endif; ?>

<!-- ------------------------------ -->
<?php get_footer(); ?>