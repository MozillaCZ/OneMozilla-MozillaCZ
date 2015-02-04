<?php get_header(); ?>

<div id="content-main" class="main" role="main">

  <article class="page not-found">
    <header class="entry-header">
      <h1 class="entry-title"><?php _e( 'Well, this is embarrassing…', 'onemozilla' ); ?></h1>
    </header>
    <div class="entry-content">
      <h2><?php _e( 'We hate to say it, but we couldn’t find the page or file you’re looking for.', 'onemozilla' ); ?></h2>
      <p><?php _e( 'If you typed in the address, try double-checking the spelling.', 'onemozilla' ); ?> Možná jste někde klepli na špatný odkaz či se uklepli při zadávání adresy do adresního řádku.
          Každopádně jsme vzbudili naši cvičenou pandu, aby to šla webmásterovi oznámit.
      </p>
      <p>
          <a href="http://commons.wikimedia.org/wiki/File:La_Palmyre_027.jpg">
             <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/panda.jpg" alt="Spící panda" class="center" />
          </a>
      </p>
      <p style="text-align: right; font-size: 10px; margin-right: 40px; margin-top: -10px;">
          Autor: <a href="http://commons.wikimedia.org/wiki/User:Manchot">William Scot</a>, CC-BY-SA
      </p>
      <p>
          Pokud by snad cestou opět usnula, dejte nám prosím o chybném odkazu vědět na <a href="mailto:info@mozilla.cz">náš e-mail</a> a my se s tím pokusíme něco udělat.
          Nemusíte to též řešit a použít rovnou vyhledávání po pravé straně stránky.
      </p>
    </div>
  </article>

</div><!-- #content-main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
