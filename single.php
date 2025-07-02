<?php get_header(); ?>

<main class="wrap">
  <section class="content-area">
    <h2><?php the_title(); ?></h2>
    <p>something</p>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="article-full">
            <header>
            By: <?php the_author(); ?>
            </header>
        <?php the_content(); ?>
        </article>
    <?php endwhile; else : ?>
        <article>
            <p>Sorry, no post was found!</p>
        </article>
    <?php endif; ?>
  </section>
</main>

<?php get_footer(); ?>