<?php

define('APP_ROOT', '/');

define('RECIPES', [
    1 => [
        'name' => 'Egg Salad Sandwiches',
        'ingredients' => [
            [
                'minimum_quantity' => 8,
                'maximum_quantity' => 10,
                'item_name' => 'Eggs',
                'unit'=> '?',
            ],
            [
                'unit'=> '?',
                'item_name' => 'Yellow Mustard',
            ],
            [
                'unit'=> '?',
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
        ],
    ],
    2 => [
        'image' => '<img class="final_look" src="https://www.allrecipes.com/thmb/UHtxAb9VrJgbtNxsxQfsdCrsXB0=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/104804-curried-egg-sandwiches-ddmfs-3x4-c75f6bc7c4f24588a2bf6b59e33b2e37.jpg">',
        'name' => 'Cheesy Potato Casserole',
        'ingredients' => [
            [
                'minimum_quantity' => 2,
                'unit' => 'lbs.',
                'item_name' => 'Hash Browns',
            ],
            [
                'minimum_quantity' => 1,
                'unit' => 'lb.',
                'item_name' => 'Sour Cream',
            ],
            [
                'minimum_quantity' => 10.75,
                'unit' => 'oz.',
                'item_name' => 'Condensed Cream of Chicken Soup',
            ],
            [
                'minimum_quantity' => 1,
                'unit' => 'cup',
                'item_name' => 'Onions',
            ],
            [
                'minimum_quantity' => 2,
                'unit' => 'cups',
                'item_name' => 'Sharp Cheddar Cheese',
            ],
            [
                'minimum_quantity' => 8,
                'unit' => 'tbsp.',
                'item_name' => 'Melted Butter',
            ],
            [
                'minimum_quantity' => 1,
                'unit' => 'tbsp.',
                'item_name' => 'Garlic Salt',
            ],
            [
                'minimum_quantity' => 2,
                'unit' => 'cups',
                'item_name' => 'Corn Flakes', 
            ],          
        ],
        'steps' => [
            'Heat oven to 350℉, and spray two 13x9 inch baking pans with cooking spray.',
            'Mix sour cream, condensed soup, and melted butter into a large mixing bowl.',
            'Add onions, garlic salt, and  hashbrowns into the mixing bowl.',
            'Scoop mix into two 13x9 inch baking pans and sprinkle corn flakes on top.',
            'Cover with aluminum foil and bake for 45-55 minutes.',
            'Let cool for a few minutes before eating.',
            'ENJOY!!',
        ],
    ],
    3 => [
        'name' => 'Sloppy Joes',
        'ingredients' => [
            [
                'minimum_quantity' => 1,
                'unit' => 'lb.',
                'item_name' => 'Ground Beef',
            ],
            [
                'minimum_quantity' => 3/4,
                'unit' => 'cup',
                'item_name' => 'BBQ Sauce',
            ],
            [
                'minimum_quantity' => 1,
                'unit' => 'tsp',
                'item_name' => 'Yellow Mustard',
            ],
             [
                'minimum_quantity' => 1,
                'unit' => 'tbsp',
                'item_name' => 'Brown Sugar',
            ],
             [
                'minimum_quantity' => 1/4,
                'unit' => 'cup',
                'item_name' => 'Chopped Onion',
            ],
             [
                'minimum_quantity' => '?',
                'item_name' => 'Hamburger Buns',
             ],          
        ],
        'steps' => [
            'Thaw out the ground beef and throw into a 3qt pot with the stove on medium heat. You want to make sure the pot is big enough to hold DOUBLE the amount of ground beef you are cooking with.',
            'Cook the ground beef thoroughly, then drain the fat.',
            'Chop up onions and throw them in the pot along with the BBQ sauce, brown sugar, yellow mustard, & any other additional seasonings you would like to add for taste.',
            'Reduce heat to low and let simmer for __ minutes',
            'Slap the finished product on some buns and ENJOY!!',
        ],
    ],
    4 => [
        'name' => 'Chili',
        'ingredients' => [
            [
                'minimum_quantity' => 1,
                'unit' => 'lb.',
                'item_name' => 'Ground Beef',
            ],
            [
                'minimum_quantity' => 1,
                'unit' => 'whole',
                'item_name' => 'Onion',
            ],
            [
                'minimum_quantity' => 15,
                'unit' =>  'oz.',
                'item_name' => 'Black Beans (or kidney beans)',
            ],
            [
                'minimum_quantity' => 1.25,
                'unit' => 'oz.',
                'item_name' => 'Chili Seasoning',
            ],
            [
                'minimum_quantity' => 14.5,
                'unit' => 'oz.',
                'item_name' => 'Diced Tomatoes',
            ],
            [
                'minimum_quantity' => 1,
                'unit' => 'cup??',
                'item_name' => 'Shredded Cheese',
            ],
            [
                'item_name' => 'Additional seasonings for taste',
            ],            
        ],
        'steps' => [
            'Thaw out the ground beef and throw into a 3qt pot with the stove on medium heat. You want to make sure the pot is big enough to hold DOUBLE the amount of ground beef you are cooking with.',
            'Cook the ground beef thoroughly (should be brown through and through with no pink tint), then drain the fat.',
            'Chop up onions and throw them in the pot along with the beans, seasonings, & diced tomatoes.',
            'You can mix in the cheese as well or add it on top after you make your own bowl.',
            'Enjoy!!',
        ],
    ],
    5 => [
        'name' => 'Pasta Salad',
        'ingredients' => [
            [
                'minimum_quantity' => 16,
                'unit' => 'oz.',
                'item_name' => 'Garden Rotini Noodles',
            ],
            [
                'minimum_quantity' => '?',
                'item_name' => 'Olive Garden Italian Dressing',
            ],
            [
                'minimum_quantity' => 1,
                'unit' => 'whole',
                'item_name' => 'Cucumber and/or Zucchini',
            ],
            [
                'item_name' => 'Any other additions you prefer.',
            ],
        ],
        'steps' => [
            'Bring a pot of water to boil.',
            'Cook pasta for 10-12 minutes (until they\'re soft enough to easily bite through)',
            'Drain pot of water and place pasta in a tupperware container and place in the fridge/freezer to cool it down.',
            'Once the pasta is cooled, remove it from the fridge and add in the chopped cucumbers/zucchinis, tomatoes, & any other additives you prefer.',
            'Top it off with the italian dressing and ENJOY!!',
        ],
    ],
    6 => [
        'name' => 'Meatloaf',
        'ingredients' => [
            [
                'minimum_quantity' => .5,
                'unit' => 'lbs.',
                'item_name' => 'Ground Beef',
            ],
            [
                'minimum_quantity' => 1,
                'item_name' => 'Egg',
            ],
            [
                'minimum_quantity' => 1,
                'unit' => 'whole',
                'item_name' => 'Onion',
            ],
            [
                'minimum_quantity' => 1,
                'unit' => 'cup',
                'item_name' => 'Milk',
            ],
            [
                'minimum_quantity' => 1,
                'unit' => 'cup',
                'item_name' => 'Dried Breadcrumbs',
            ],
            [
                'minimum_quantity' => .33,
                'unit' => 'cup',
                'item_name' => 'BBQ Sauce',
            ],
            [
                'minimum_quantity' => 2,
                'unit' => 'tbsp.',
                'item_name' => 'Brown Sugar',
            ],
            [
                'minimum_quantity' => 2,
                'unit' => 'tbsp.',
                'item_name' => 'Mustard',
            ]
        ],
        'steps' => [
            'Preheat oven to 350℉, and lightly cover a 9x5 inch loaf pan with baking spray.',
            'Combine the thawed out ground beef, onion, milk, bread crumbs, & egg in a large mixing bowl.',
            'Place the mixture into the loaf pan',
            'Mix the bbq sauce, brown sugar, & mustard in a bowl. Then pour over top of the mixture that is in the loaf pan - spread evenly.',
            'Bake for !!VERIFY TIME!! minutes (about an hour) - should no longer be pink in the middle.',
            'ENJOY!!',
        ],
    ],
    7 => [
        'name' => 'Lava Cakes',
        'ingredients' => [
            [
                'minimum_quantity' => 6.5,
                'unit' => 'squares',
                'item_name' => 'Semi-Sweet Chocolate Squares',
            ],
            [
                'minimum_quantity' => 3,
                'item_name' => 'Eggs',
            ],
            [
                'minimum_quantity' => .33,
                'unit' => 'cup',
                'item_name' => 'White Sugar',
            ],
            [
                'minimum_quantity' => 2,
                'unit' => 'tbsp',
                'item_name' => 'All Purpose Flour',
            ],
            [
                'minimum_quantity' => .5,
                'unit' => 'cup',
                'item_name' => 'Butter',
            ],
            [
                'minimum_quantity' => 4,
                'unit' => 'tsp',
                'item_name' => 'Unsweetened Cocoa Powder',
            ],
            [
                'minimum_quantity' => 1,
                'unit' => 'pinch',
                'item_name' => 'Salt',
            ],
        ],
        'steps' => [
            'Preheat oven to 400℉, with baking spray, spray down and lightly flour a muffin pan (if you don\'t have ramekins).',
            '.',
        ],
    ],
    8 => [
        'name' => 'Chicken Parmesian',
        'ingredients' => [
            [
                'minimum_quantity' => '',
                'item_name' => '',
            ],
            [
                'minimum_quantity' => '',
                'item_name' => '',
            ],
            [
                'minimum_quantity' => '',
                'item_name' => '',
            ],
            [
                'minimum_quantity' => '',
                'item_name' => '',
            ],
            [
                'minimum_quantity' => '',
                'item_name' => '',
            ],
            [
                'minimum_quantity' => '',
                'item_name' => '',
            ],
            [
                'minimum_quantity' => '',
                'item_name' => '',
            ],
        ],
        'steps' => [],
    ],
    9 => [
        'name' => 'Steak and Cheese Melt',
        'ingredients' => [
            [
                'minimum_quantity' => '',
                'item_name' => '',
            ],
            [
                'minimum_quantity' => '',
                'item_name' => '',
            ],
            [
                'minimum_quantity' => '',
                'item_name' => '',
            ],
            [
                'minimum_quantity' => '',
                'item_name' => '',
            ],
            [
                'minimum_quantity' => '',
                'item_name' => '',
            ],
            [
                'minimum_quantity' => '',
                'item_name' => '',
            ],
            [
                'minimum_quantity' => '',
                'item_name' => '',
            ],

        ],
        'steps' => [],
    ],
    10 => [
        'name' => 'Tomato Soup',
        'ingredients' => [
            [
                'minimum_quantity' => '',
                'item_name' => '',
            ],
            [
                'minimum_quantity' => '',
                'item_name' => '',
            ],
            [
                'minimum_quantity' => '',
                'item_name' => '',
            ],
            [
                'minimum_quantity' => '',
                'item_name' => '',
            ],
            [
                'minimum_quantity' => '',
                'item_name' => '',
            ],
            [
                'minimum_quantity' => '',
                'item_name' => '',
            ],
        ],
        'steps' => [],
    ],
]);


//Setting any configuration options.
$GLOBALS['constants'] = get_defined_constants();
