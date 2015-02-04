<?php $theme_options = onemozilla_get_theme_options(); ?>

  </main><!-- #content -->
</div></div><!-- /.wrap /#page -->

<footer id="site-info" role="contentinfo">
  <div class="wrap">
    <p id="foot-logo">
      <a class="top" href="#page"><?php _e('Return to top', 'onemozilla'); ?></a>
      <a class="logo" href="http://www.mozilla.cz/" rel="external">Mozilla.cz</a>
    </p>

    <p id="colophon">
      <?php printf(__('Except where otherwise <a href="%1s" rel="external">noted</a>, content on this site is licensed under the <a href="%2s" rel="external license">Creative Commons Attribution Share-Alike License v3.0</a> or any later version.', 'onemozilla'), esc_attr('https://www.mozilla.org/about/legal.html'), esc_attr('http://creativecommons.org/licenses/by-sa/3.0/') ); ?>
    </p>

    <nav id="nav-meta">
      <ul role="navigation">
        <li><a href="http://www.mozilla.cz/o-nas/" rel="external"><?php _e('Contact Us', 'onemozilla'); ?></a></li>
		<li><a href="http://www.mozilla.cz/mapa-webu/" rel="external">Mapa webu</a></li>
        <li><a href="https://github.com/MozillaCZ/OneMozilla-MozillaCZ" rel="external"><?php _e('Theme Code ', 'onemozilla'); ?></a></li>
      </ul>
    </nav>
  </div>
</footer>

<script src="https://mozorg.cdn.mozilla.net/tabzilla/tabzilla.js"></script>

<?php wp_footer(); ?>

</body>
</html>
