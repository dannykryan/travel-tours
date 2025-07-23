<?php get_header(); ?>

<main class="wrap">
  <section class="container mx-auto px-8">
    
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
    
    
    <!-- Basic Information -->
    <div id="key-information" class="flex gap-8 px-12 my-12">
      <p><?php the_field('overall_rating'); ?></p>
      <p><?php the_field('location'); ?></p>
      <p><?php the_field('previous_bookings'); ?></p>
    </div>

    <!-- Image Gallery -->
    <?php 
    $images = get_field('gallery');
    $size = 'full'; // (thumbnail, medium, large, full or custom size)
    $i = 0;
    if( $images ): ?>
      <div class="gallery-items grid gap-2">
        <?php foreach( $images as $image_id ): ?>
            <div class="gallery-item-<?php echo $i; ?>">
                <?php echo wp_get_attachment_image( $image_id, $size, "", ["class" => "w-full h-full object-cover"]); ?>
            </div>
        <?php $i++; endforeach; ?>
      </div>
    <?php endif; ?> 

    <!-- Key Information -->
    <div class="flex gap-4 pt-2">
      <?php if (get_field('duration')): ?>
        <div class="flex items-center gap-4">
          <svg class="h-10 w-10 fill-orange-500" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M48 48l88 0c13.3 0 24-10.7 24-24s-10.7-24-24-24L32 0C14.3 0 0 14.3 0 32L0 136c0 13.3 10.7 24 24 24s24-10.7 24-24l0-88zM175.8 224a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm-26.5 32C119.9 256 96 279.9 96 309.3c0 14.7 11.9 26.7 26.7 26.7l56.1 0c8-34.1 32.8-61.7 65.2-73.6c-7.5-4.1-16.2-6.4-25.3-6.4l-69.3 0zm368 80c14.7 0 26.7-11.9 26.7-26.7c0-29.5-23.9-53.3-53.3-53.3l-69.3 0c-9.2 0-17.8 2.3-25.3 6.4c32.4 11.9 57.2 39.5 65.2 73.6l56.1 0zm-89.4 0c-8.6-24.3-29.9-42.6-55.9-47c-3.9-.7-7.9-1-12-1l-80 0c-4.1 0-8.1 .3-12 1c-26 4.4-47.3 22.7-55.9 47c-2.7 7.5-4.1 15.6-4.1 24c0 13.3 10.7 24 24 24l176 0c13.3 0 24-10.7 24-24c0-8.4-1.4-16.5-4.1-24zM464 224a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm-80-32a64 64 0 1 0 -128 0 64 64 0 1 0 128 0zM504 48l88 0 0 88c0 13.3 10.7 24 24 24s24-10.7 24-24l0-104c0-17.7-14.3-32-32-32L504 0c-13.3 0-24 10.7-24 24s10.7 24 24 24zM48 464l0-88c0-13.3-10.7-24-24-24s-24 10.7-24 24L0 480c0 17.7 14.3 32 32 32l104 0c13.3 0 24-10.7 24-24s-10.7-24-24-24l-88 0zm456 0c-13.3 0-24 10.7-24 24s10.7 24 24 24l104 0c17.7 0 32-14.3 32-32l0-104c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 88-88 0z"/></svg>
          <p><strong>Duration:</strong></br>
          <?php the_field('duration'); ?> days</p>
        </div>
      <?php endif; ?>
      
      <?php if (get_field('group_size')): ?>
        <div class="flex items-center gap-4">
          <svg class="h-10 w-10 fill-orange-500" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M48 48l88 0c13.3 0 24-10.7 24-24s-10.7-24-24-24L32 0C14.3 0 0 14.3 0 32L0 136c0 13.3 10.7 24 24 24s24-10.7 24-24l0-88zM175.8 224a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm-26.5 32C119.9 256 96 279.9 96 309.3c0 14.7 11.9 26.7 26.7 26.7l56.1 0c8-34.1 32.8-61.7 65.2-73.6c-7.5-4.1-16.2-6.4-25.3-6.4l-69.3 0zm368 80c14.7 0 26.7-11.9 26.7-26.7c0-29.5-23.9-53.3-53.3-53.3l-69.3 0c-9.2 0-17.8 2.3-25.3 6.4c32.4 11.9 57.2 39.5 65.2 73.6l56.1 0zm-89.4 0c-8.6-24.3-29.9-42.6-55.9-47c-3.9-.7-7.9-1-12-1l-80 0c-4.1 0-8.1 .3-12 1c-26 4.4-47.3 22.7-55.9 47c-2.7 7.5-4.1 15.6-4.1 24c0 13.3 10.7 24 24 24l176 0c13.3 0 24-10.7 24-24c0-8.4-1.4-16.5-4.1-24zM464 224a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm-80-32a64 64 0 1 0 -128 0 64 64 0 1 0 128 0zM504 48l88 0 0 88c0 13.3 10.7 24 24 24s24-10.7 24-24l0-104c0-17.7-14.3-32-32-32L504 0c-13.3 0-24 10.7-24 24s10.7 24 24 24zM48 464l0-88c0-13.3-10.7-24-24-24s-24 10.7-24 24L0 480c0 17.7 14.3 32 32 32l104 0c13.3 0 24-10.7 24-24s-10.7-24-24-24l-88 0zm456 0c-13.3 0-24 10.7-24 24s10.7 24 24 24l104 0c17.7 0 32-14.3 32-32l0-104c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 88-88 0z"/></svg>
          <p><strong>Group Size:</strong></br>
          <?php the_field('group_size'); ?> people</p>
        </div>
      <?php endif; ?>

      <?php if (get_field('minimum_age')): ?>
        <div class="flex items-center gap-4">
          <svg class="h-10 w-10 fill-orange-500" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M48 48l88 0c13.3 0 24-10.7 24-24s-10.7-24-24-24L32 0C14.3 0 0 14.3 0 32L0 136c0 13.3 10.7 24 24 24s24-10.7 24-24l0-88zM175.8 224a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm-26.5 32C119.9 256 96 279.9 96 309.3c0 14.7 11.9 26.7 26.7 26.7l56.1 0c8-34.1 32.8-61.7 65.2-73.6c-7.5-4.1-16.2-6.4-25.3-6.4l-69.3 0zm368 80c14.7 0 26.7-11.9 26.7-26.7c0-29.5-23.9-53.3-53.3-53.3l-69.3 0c-9.2 0-17.8 2.3-25.3 6.4c32.4 11.9 57.2 39.5 65.2 73.6l56.1 0zm-89.4 0c-8.6-24.3-29.9-42.6-55.9-47c-3.9-.7-7.9-1-12-1l-80 0c-4.1 0-8.1 .3-12 1c-26 4.4-47.3 22.7-55.9 47c-2.7 7.5-4.1 15.6-4.1 24c0 13.3 10.7 24 24 24l176 0c13.3 0 24-10.7 24-24c0-8.4-1.4-16.5-4.1-24zM464 224a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm-80-32a64 64 0 1 0 -128 0 64 64 0 1 0 128 0zM504 48l88 0 0 88c0 13.3 10.7 24 24 24s24-10.7 24-24l0-104c0-17.7-14.3-32-32-32L504 0c-13.3 0-24 10.7-24 24s10.7 24 24 24zM48 464l0-88c0-13.3-10.7-24-24-24s-24 10.7-24 24L0 480c0 17.7 14.3 32 32 32l104 0c13.3 0 24-10.7 24-24s-10.7-24-24-24l-88 0zm456 0c-13.3 0-24 10.7-24 24s10.7 24 24 24l104 0c17.7 0 32-14.3 32-32l0-104c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 88-88 0z"/></svg>
          <p><strong>Minimum age:</strong></br>
          <?php the_field('minimum_age'); ?></p>
        </div>
      <?php endif; ?>

        <?php
        $languages = get_field('languages');
        if( $languages ): ?>

          <div class="flex items-center gap-4">
            <svg class="h-10 w-10 fill-orange-500" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M48 48l88 0c13.3 0 24-10.7 24-24s-10.7-24-24-24L32 0C14.3 0 0 14.3 0 32L0 136c0 13.3 10.7 24 24 24s24-10.7 24-24l0-88zM175.8 224a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm-26.5 32C119.9 256 96 279.9 96 309.3c0 14.7 11.9 26.7 26.7 26.7l56.1 0c8-34.1 32.8-61.7 65.2-73.6c-7.5-4.1-16.2-6.4-25.3-6.4l-69.3 0zm368 80c14.7 0 26.7-11.9 26.7-26.7c0-29.5-23.9-53.3-53.3-53.3l-69.3 0c-9.2 0-17.8 2.3-25.3 6.4c32.4 11.9 57.2 39.5 65.2 73.6l56.1 0zm-89.4 0c-8.6-24.3-29.9-42.6-55.9-47c-3.9-.7-7.9-1-12-1l-80 0c-4.1 0-8.1 .3-12 1c-26 4.4-47.3 22.7-55.9 47c-2.7 7.5-4.1 15.6-4.1 24c0 13.3 10.7 24 24 24l176 0c13.3 0 24-10.7 24-24c0-8.4-1.4-16.5-4.1-24zM464 224a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm-80-32a64 64 0 1 0 -128 0 64 64 0 1 0 128 0zM504 48l88 0 0 88c0 13.3 10.7 24 24 24s24-10.7 24-24l0-104c0-17.7-14.3-32-32-32L504 0c-13.3 0-24 10.7-24 24s10.7 24 24 24zM48 464l0-88c0-13.3-10.7-24-24-24s-24 10.7-24 24L0 480c0 17.7 14.3 32 32 32l104 0c13.3 0 24-10.7 24-24s-10.7-24-24-24l-88 0zm456 0c-13.3 0-24 10.7-24 24s10.7 24 24 24l104 0c17.7 0 32-14.3 32-32l0-104c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 88-88 0z"/></svg>
            <p><strong>Languages:</strong></br>
              <?php foreach( $languages as $index => $language ): ?>
                <?php echo $language['label']; ?><?php if ($index < count($languages) - 1) echo ', '; ?>
              <?php endforeach; ?>
            </p>
          </div>

        <?php endif; ?>

    </div>
    <h2 class="">Tour Overview</h2>
    <?php echo the_field('overview'); ?>
    
    <h3>Tour Highlights</h3>
    <?php if( have_rows('highlight_list') ): ?>
      <ul class="list-disc pl-6">
        <?php while( have_rows('highlight_list') ): the_row(); ?>
          <li><?php the_sub_field('highlight'); ?></li>
        <?php endwhile; ?>
      </ul>
    <?php else: ?>
      <p>No highlights found for this tour.</p>
    <?php endif; ?>

    <h2>What's Included</h2>
    <div class="flex gap-4">
      <?php if( have_rows('included') ): ?>
        <ul>
          <?php while( have_rows('included') ): the_row(); ?>
            <li class="mb-4"><div class="inline-block rounded-full h-4 w-4 bg-green-200 align-middle mr-2"></div><?php the_sub_field('item'); ?></li>
          <?php endwhile; ?>
        </ul>
      <?php endif; ?>
      
      <?php if( have_rows('not_included') ): ?>
        <ul>
          <?php while( have_rows('not_included') ): the_row(); ?>
            <li class="mb-4"><div class="inline-block rounded-full h-4 w-4 bg-red-200 align-middle mr-2"></div><?php the_sub_field('item'); ?></li>
          <?php endwhile; ?>
        </ul>
      <?php else: ?>
        <p>Nothing is included in this tour.</p>
      <?php endif; ?>
    </div>

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