<?php 
/*
YARPP Template: One Mozilla - MozillaCZ
Author: Mozilla.cz
Description: Šablona "Přečtěte si také" na Mozilla.cz
*/
?>

<?php if (have_posts()):?>
    <ul>
        <?php while (have_posts()) : the_post(); ?>
            <li><a href="<?php the_permalink(); ?>" title="<?php the_time( get_option( 'date_format' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></li>
        <?php endwhile; ?>
    </ul>
<?php else: ?>
    <p>Žádné podobné příspěvky</p>
<?php endif; ?>
