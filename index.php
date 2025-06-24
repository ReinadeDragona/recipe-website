<?php
require_once(__DIR__ . '/includes/loader.php');

require_once(__DIR__ . '/includes/templates/header.php');

foreach (RECIPES as $recipeID => $recipe) {
    echo '<h3><a href="recipe.php?id=' . $recipeID . '">' . $recipe['name'] . '</a></h3>';
}

require_once(__DIR__ . '/includes/templates/footer.php');