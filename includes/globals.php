<?php

define('APP_ROOT', '/');

define('RECIPES', [
    1 => [
        'name' => 'Egg Salad Sandwiches',
        'ingredients' => [
            [
                'minimum_quantity' => 8,
                'maximum_quantity' => 10,
                'item_name' => 'Eggs'
            ],
            [
                'item_name' => 'Yellow Mustard',
            ],
            [
                'item_name' => 'Mayonaise',
            ],
        ],
        'steps' => [
            'Boil water in a pot - put the stove on high.',
            'Add 8-10 eggs.',
            'Keep water at a boil - cook for 12-15 minutes.',
            'Turn off stove - empty water from pot.',
            'Grab a glass cup (tall and skinny works best) and a spoon.',
            'Using the spoon, place one egg at a time in the glass cup and shake it for a few seconds until you see cracks in the shell.',
            'Take the egg out of the glass - the shells should easily slide off with minimum effort.',
            'Place shells and unshelled eggs in separate bowls/containers.',
            'Once all the eggs are peeled and placed in a bowl/container, add the mayonnaise and the mustard (ratio to the taste of the chef, I prefer a higher mayo to mustard ratio).',
            'Add any additional ingredients you want, some suggestions are listed at below.',
            'Mash the ingredients together until the eggs are broken up and everything has mixed evenly together.',
            'Do a taste test and make any adjustments.',
            'Place in the fridge to cool then ENJOY!!',
        ]
    ],
    2 => [
        'name' => 'Cheesy Potato Casserole',
        'ingredients' => [
            'Hash Browns',
            'Sour Cream',
            'Condensed Cream of Chicken Soup',
            'Onions',
            'Sharp Cheddar Cheese',
            'Melted Butter',
            'Garlic Salt',
            'Corn Flakes',
        ],
        'steps' => [
            'Heat oven to 350℉, and spray two 13x9 inch baking pans with cooking spray.',
            'Mix sour cream, condensed soup, and melted butter into a large mixing bowl.',
            'Add onions, garlic salt, and  hashbrowns into the mixing bowl.',
            'Scoop mix into two 13x9 inch baking pans and sprinkle corn flakes on top.',
            'Cover with aluminum foil and bake for 45-55 minutes.',
            'Let cool for a few minutes before eating.',
            'ENJOY!!',
        ]
    ],
    3 => [
        'name' => 'Sloppy Joes',
        'ingredients' => [
            'Ground Beef',
            'BBQ Sauce',
            'Yellow Mustard',
            'Brown Sugar',
            'Chopped Onion',
            'Hamburger Buns',
        ],
        'steps' => [
            'Thaw out the ground beef and throw into a 3qt pot with the stove on medium heat. You want to make sure the pot is big enough to hold DOUBLE the amount of ground beef you are cooking with.',
            'Cook the ground beef thoroughly, then drain the fat.',
            'Chop up onions and throw them in the pot along with the BBQ sauce, brown sugar, yellow mustard, & and any other additional seasonings you would like to add for taste.',
            'Reduce heat to low and let simmer for __ minutes',
            'Slap the finished product on some buns and ENJOY!!',
        ],
    ],
    4 => [
        'name' => 'Chili',
        'ingredients' => [
            'Ground Beef',
            'Onion',
            'Black Beans',
            'Chili Seasoning',
            'Diced Tomatoes',
            'Shredded Cheese',
            'Additional seasonings for taste',
        ],
        'steps' => [
            'Thaw out the ground beef and throw into a 3qt pot with the stove on medium heat. You want to make sure the pot is big enough to hold DOUBLE the amount of ground beef you are cooking with.',
            'Cook the ground beef thoroughly (should be brown through and through with no pink tint), then drain the fat.',
            'Chop up onions and throw them in the pot along with the beans, seasonings, and diced tomatoes.',
            'You can mix in the cheese as well or add it on top after you make your own bowl.',
            'Enjoy!!',
        ],
    ],
    5 => [
        'name' => 'Pasta Salad',
        'ingredients' => [
            'Rotini Noodles',
            'Olive Garden Italian Dressing',
            'Cucumbers and/or Zucchinis',
            'Tomatoes',
        ],
        'steps' => [
            'Bring a pot of water to boil.',
            'Cook pasta for 10-12 minutes (until they\'re soft enough to easily bite through)',
            'Drain pot of water and place pasta in a tupperware container and place in the fridge/freezer to cool it down.',
            'Once the pasta is cooled, remove it from the fridge and add in the chopped cucumbers/zucchinis, tomatoes, and any other additives you prefer.',
            'Top it off with the italian dressing and ENJOY!!',
        ],
    ],
    6 => [
        'name' => 'Meatloaf',
        'ingredients' => [],
        'steps' => [],
    ],
    7 => [
        'name' => 'Lava Cakes',
        'ingredients' => [],
        'steps' => [],
    ],
    8 => [
        'name' => 'Chicken Parmesian',
        'ingredients' => [],
        'steps' => [],
    ],
    9 => [
        'name' => 'Steak and Cheese Melt',
        'ingredients' => [],
        'steps' => [],
    ],
    10 => [
        'name' => 'Tomato Soup',
        'ingredients' => [],
        'steps' => [],
    ],
]);


//Setting any configuration options.
$GLOBALS['constants'] = get_defined_constants();
