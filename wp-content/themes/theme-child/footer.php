</main>
</div>
<footer>
<?php
wp_nav_menu(
array(
'theme_location' => 'footer-menu',
'menu_id' => 'pied-de-page',
'container' => false, /*suprime la div par défaut de WordPress avec la class menu-menu-container*/
'menu-class' => 'navbar-nav', /* redefinit la class de la balise nav*/
)
);
?>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>