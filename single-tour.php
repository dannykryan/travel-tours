<?php get_header(); ?>

<main class="wrap">
  <section class="content-area">
    
    <!-- Breadcrumbs -->
    <a href="<?php echo get_home_url(); ?>">Home</a> > <a href="<?php echo get_post_type_archive_link( 'tour' ); ?>">Tours Archive</a> > <?php the_terms( $post->ID, 'destination', '', ', ', ' ' ); ?>

    <!-- Best Seller / Free Cancellation bubbles -->
    <div class="flex flex-row gap-2 ">
      <?php if(get_field('best_seller')) : ?>
        <div class="bg-orange-100 text-orange-600 px-4 py-1 rounded-full">
          <span>Best Seller</span>
        </div>
      <?php endif; ?>

      <?php if(get_field('free_cancellations')) : ?>
        <div class="bg-gray-100 text-gray-900 px-4 py-1 rounded-full">
          <span>Free cancellations</span>
        </div>
      <?php endif; ?>
    </div>

    <!-- Heading -->
    <h1 class="mb-12"><?php the_title(); ?></h1>
    
    
    <div id="key-information" class="flex gap-8 px-12 my-12">
      <p><?php the_field('overall_rating'); ?></p>
      <p><?php the_field('location'); ?></p>
      <p><?php the_field('previous_bookings'); ?></p>

    </div>
    
    <h2 class="">Tour Overview</h2>
    <?php echo the_field('overview'); ?>
    
    <h3>Tour Highlights</h3>
    <?php if( have_rows('highlight_list') ): ?>
      <ul>
        <?php while( have_rows('highlight_list') ): the_row(); ?>
          <li><?php the_sub_field('highlight'); ?></li>
        <?php endwhile; ?>
      </ul>
    <?php else: ?>
      <p>No highlights found for this tour.</p>
    <?php endif; ?>

    <h2>What's Included</h2>
    <?php if( have_rows('included') ): ?>
      <ul>
        <?php while( have_rows('included') ): the_row(); ?>
          <li><?php the_sub_field('item'); ?></li>
        <?php endwhile; ?>
      </ul>
      <?php endif; ?>
      <?php if( have_rows('not_included') ): ?>
      <ul>
        <?php while( have_rows('not_included') ): the_row(); ?>
          <li><?php the_sub_field('item'); ?></li>
        <?php endwhile; ?>
      </ul>
    <?php else: ?>
      <p>Nothing is included in this tour.</p>
    <?php endif; ?>

    <h2>Itinerary</h2>
    <?php if( have_rows('itinerary_per_day') ): ?>
      <ul>
        <?php while( have_rows('itinerary_per_day') ): the_row(); ?>
          <li>
            <?php the_sub_field('day'); ?> - <?php the_sub_field('information'); ?>
            <p><?php the_sub_field('extra_information'); ?></p>
          </li>
        <?php endwhile; ?>
      </ul>
    <?php else: ?>
      <p>No itinerary available.</p>
    <?php endif; ?>

    <h2>FAQ</h2>
    <?php if( have_rows('faq') ): ?>
      <ul>
        <?php while( have_rows('faq') ): the_row(); ?>
          <li>
            <?php the_sub_field('question'); ?>
            <p><?php the_sub_field('answer'); ?></p>
          </li>
        <?php endwhile; ?>
      </ul>
    <?php else: ?>
      <p>No FAQs available.</p>
    <?php endif; ?>

  </section>
</main>

<?php get_footer(); ?>