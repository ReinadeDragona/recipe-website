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

echo '<div id="recipe-' . $recipeID . '">
    <h2>' . $recipe['name'] . '</h2>
    <h3>Ingredients</h3>

    <input type="number" value="1" id="portion-quantity"/>

    <ul>';
foreach ($recipe['ingredients'] as $ingredientInformation) {
    $quantity = '';
    if (isset($ingredientInformation['minimum_quantity']) === true)
        $quantity .= '<span class="portion-number" original-number="' . $ingredientInformation['minimum_quantity'] . '">' . $ingredientInformation['minimum_quantity'] . '</span>';
    if (isset($ingredientInformation['maximum_quantity']) === true) {
        if (isset($ingredientInformation['minimum_quantity']) === true)
            $quantity .= '-';
        $quantity .= '<span class="portion-number" original-number="' . $ingredientInformation['maximum_quantity'] . '">' . $ingredientInformation['maximum_quantity'] . '</span>';
    }

    echo '<li>' . ($quantity !== '' ? $quantity . ' ' : '') . $ingredientInformation['item_name'] . '</li>';
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
