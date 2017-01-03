    </main>

    <footer role="contentinfo" class="footer">
      <div class="footer__container">
        <?php if (get_field('options_footer_icon', option)): ?>
          <div class="footer__icon">
            <img src="<?php the_field('options_footer_icon', option); ?>" alt="">
          </div>
        <?php endif; ?>
        
        <?php the_field('options_footer_body', option); ?>
        
        <p class="footer__copy">&copy; <?php $currentYear = date('Y'); if ($currentYear == $currentYear): ?><?php echo date('Y'); ?><?php else: ?>2016 – <?php echo date('Y'); ?><?php endif; ?> <?php bloginfo('name'); ?>.<?php if (get_field('options_footer_copyright', option)): ?> <?php the_field('options_footer_copyright', option); ?><?php endif; ?></p>
      </div>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>
