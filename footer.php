    </main>

    <footer role="contentinfo" class="footer">
      <div class="footer__container">
        <?php if (get_field('options_footer_icon', option)): ?>
          <div class="footer__icon">
            <img src="<?php the_field('options_footer_icon', option); ?>" alt="">
          </div>
        <?php endif; ?>
        
        <?php if (get_field('options_footer_column_1', option) && get_field('options_footer_column_1', option)): ?>
          <div class="footer__columns">
            <div class="footer__column">
              <?php the_field('options_footer_column_1', option); ?>
            </div>

            <div class="footer__column">
              <?php the_field('options_footer_column_2', option); ?>
            </div>
          </div>
        <?php endif; ?>

        <div class="footer__copy">
          <p>&copy; <?php $currentYear = date('Y'); if ($currentYear == $currentYear): ?><?php echo date('Y'); ?><?php else: ?>2016 – <?php echo date('Y'); ?><?php endif; ?> <?php bloginfo('name'); ?>.<?php if (get_field('options_footer_copyright', option)): ?> <?php the_field('options_footer_copyright', option); ?><?php endif; ?></p>
        </div>
      </div>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>
