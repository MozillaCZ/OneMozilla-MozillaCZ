<?php $theme_options = onemozilla_get_theme_options(); ?>

  </main><!-- #content -->
</div></div><!-- /.wrap /#page -->

<footer id="site-info">
  <div class="wrap">
    <p id="foot-logo">
      <a class="top" href="#page"><?php _e('Return to top', 'onemozilla'); ?></a>
      <a class="logo" href="/">Mozilla.cz</a>
    </p>

    <p id="colophon">
      <?php printf(__('Except where otherwise <a href="%1s" rel="external">noted</a>, content on this site is licensed under the <a href="%2s" rel="external license">Creative Commons Attribution Share-Alike License v3.0</a> or any later version.', 'onemozilla'), esc_attr('https://www.mozilla.org/about/legal.html'), esc_attr('http://creativecommons.org/licenses/by-sa/3.0/') ); ?>
    </p>

    <nav id="nav-meta">
      <ul>
        <li><a href="/o-nas/"><?php _e('Contact Us', 'onemozilla'); ?></a></li>
		<li><a href="/mapa-webu/">Mapa webu</a></li>
        <li><a href="https://github.com/MozillaCZ/OneMozilla-MozillaCZ" rel="external"><?php _e('Theme Code ', 'onemozilla'); ?></a></li>
      </ul>
    </nav>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
