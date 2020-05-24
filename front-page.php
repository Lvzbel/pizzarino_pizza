<?php get_header(); ?>

<?php while(have_posts()): the_post(); ?>

<div class="hero" style="background-image: url(<?php echo get_field('hero_image')['url'] ?>)">
  <div class="hero__overlay"></div>
  <div class="hero__content">
    <h1 class="hero__header text-light"><?php the_field('hero_header') ?></h1>
    <p class="hero__lead lead text-light mb-4"><?php the_field('hero_lead') ?></p>
    <button class="btn btn-primary btn-lg">Order Now</button>
  </div>

</div>

<?php endwhile; ?>

<?php get_footer(); ?>