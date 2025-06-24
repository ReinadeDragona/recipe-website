<?php
require_once(__DIR__ . '/includes/loader.php');

if (
    isset($_GET['id']) === false
    || intval($_GET['id']) === 0
    || isset(RECIPES[intval($_GET['id'])]) === false
) {
    exit('No valid `id` provided.');
}

require_once(__DIR__ . '/includes/templates/header.php');

$recipeID = intval($_GET['id']);
$recipe = RECIPES[$recipeID];

$recipeFileName = strtolower(str_replace(' ', '_', $recipe['name']));
if (file_exists(__DIR__ . '/css/recipes/' . $recipeFileName . '.css')) {
    echo '<link rel="stylesheet" href="' . $GLOBALS['constants']['APP_ROOT'] . 'css/recipes/' . $recipeFileName . '.css">';
}

echo '<div id="recipe-' . $recipeID . '">';

echo '<h2>' . $recipe['name'] . '</h2>';

echo '<h3>Ingredients</h3>';

echo '<div class="portion_buttons">
        <button class="portion_one">1x</button>
        <button class="portion_two">2x</button>
        <button class="portion_three">3x</button>
    </div>';

    echo '<ul>';
foreach ($recipe['ingredients'] as $ingredient) {
    echo '<li>' . $ingredient . '</li>';
}
echo '</ul>';

echo '<h3>Steps</h3>';
echo '<ol>';
foreach ($recipe['steps'] as $steps) {
    echo '<li>' . $steps . '</li>';
}
echo '</ol>';

echo '</div>';




require_once(__DIR__ . '/includes/templates/footer.php');

