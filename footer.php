    <footer class="site-footer">
        <?php if( get_field('copyright_notice', 'options' ) ): ?>
            <p><?php echo esc_html( get_field('copyright_notice', 'options') ); ?></p>
        <?php endif; ?>

        <?php if( have_rows('pay_options', 'options') ): ?>
            <ul>
            <?php while( have_rows('pay_options', 'options') ): the_row(); ?>
                <li>
                  <?php 
                    $image = get_sub_field('pay_option_image', 'options');
                    $size = 'card'; // Set the size of the image
                    if( $image ) {
                        echo wp_get_attachment_image( $image, $size );
                    }
                  ?>
                </li>
            <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>