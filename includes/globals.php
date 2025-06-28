<?php

define('APP_ROOT', '/');

define('RECIPES', [
    1 => [
        'image' => '<img class="final_look" src="https://www.allrecipes.com/thmb/UHtxAb9VrJgbtNxsxQfsdCrsXB0=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/104804-curried-egg-sandwiches-ddmfs-3x4-c75f6bc7c4f24588a2bf6b59e33b2e37.jpg">',
        'name' => 'Egg Salad Sandwiches',
        'ingredients' => [
            [
                'item_name' => 'Eggs',
                'quantity' => 10,
                'unit'=> '?',
            ],
            [
                'item_name' => 'Yellow Mustard',
                'quantity' => 0,
                'unit'=> '?',
            ],
            [
                'item_name' => 'Mayonaise',
                'quantity' => 0,
                'unit'=> '?',
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
        'image' => '<img class="final_look" src="https://www.allrecipes.com/thmb/lgQmvkDelmwLdOI9dusgLB8VhaA=/0x512/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/ALR-recipe-276505-grandmas-hash-brown-casserole-hero-01-VAT-4x3-43e44934bde545ae8675c1f7d5aee8d0.jpg">',
        'name' => 'Cheesy Potato Casserole',
        'ingredients' => [
            [
                'item_name' => 'Hash Browns',
                'quantity' => 2,
                'unit' => 'lbs.',
            ],
            [
                'item_name' => 'Sour Cream',
                'quantity' => 1,
                'unit' => 'lb.',
            ],
            [
                'item_name' => 'Condensed Cream of Chicken Soup',
                'quantity' => 10.75,
                'unit' => 'oz.',
            ],
            [
                'item_name' => 'Onions',
                'quantity' => 1,
                'unit' => 'cup',
            ],
            [
                'item_name' => 'Sharp Cheddar Cheese',
                'quantity' => 2,
                'unit' => 'cups',
            ],
            [
                'item_name' => 'Melted Butter',
                'quantity' => 8,
                'unit' => 'tbsp.',
            ],
            [
                'item_name' => 'Garlic Salt',
                'quantity' => 1,
                'unit' => 'tbsp.',
            ],
            [
                'item_name' => 'Corn Flakes', 
                'quantity' => 2,
                'unit' => 'cups',
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
        'image' => '<img class="final_look" src =data:image/jpeg;base64,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>',
        'name' => 'Sloppy Joes',
        'ingredients' => [
            [
                'item_name' => 'Ground Beef',
                'quantity' => 1,
                'unit' => 'lb.',
            ],
            [
                'item_name' => 'BBQ Sauce',
                'quantity' => 3/4,
                'unit' => 'cup',
            ],
            [
                'item_name' => 'Yellow Mustard',
                'quantity' => 1,
                'unit' => 'tsp.',
            ],
             [
                'item_name' => 'Brown Sugar',
                'quantity' => 1,
                'unit' => 'tbsp.',
            ],
             [
                'item_name' => 'Chopped Onion',
                'quantity' => 1/4,
                'unit' => 'cup',
            ],
             [
                'item_name' => 'Hamburger Buns',
                'quantity' => 0,
                'unit' => '',
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
        'image' => '<img class="final_look" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmiCpTHIffBJQC4zCygDFvbT4GoFRx-7Cxdg&s">',
        'name' => 'Chili',
        'ingredients' => [
            [
                'item_name' => 'Ground Beef',
                'quantity' => 1,
                'unit' => 'lb.',
            ],
            [
                'item_name' => 'Onion',
                'quantity' => 1,
                'unit' => 'whole',
            ],
            [
                'item_name' => 'Black Beans (or kidney beans)',
                'quantity' => 15,
                'unit' =>  'oz.',
            ],
            [
                'item_name' => 'Chili Seasoning',
                'quantity' => 1.25,
                'unit' => 'oz.',
            ],
            [
                'item_name' => 'Diced Tomatoes',
                'quantity' => 14.5,
                'unit' => 'oz.',
            ],
            [
                'minimum_quantity' => 1,
                'unit' => 'cup??',
                'item_name' => 'Shredded Cheese',
            ],
            [
                'item_name' => 'Additional seasonings for taste',
                'quantity' => '',
                'unit' => '',
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
                'item_name' => 'Garden Rotini Noodles',
                'quantity' => 16,
                'unit' => 'oz.',
            ],
            [
                'item_name' => 'Olive Garden Italian Dressing',
                'quantity' => '?',
                'unit' => '',
            ],
            [
                'item_name' => 'Cucumber and/or Zucchini',
                'quantity' => 1,
                'unit' => 'whole',
            ],
            [
                'item_name' => 'Any other additions you prefer.',
                'quantity' => '',
                'unit' => '',
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
        'image' => '<img class="final_look" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxmtk5zq6sBfpdvaHsIyVzSFVWMFIS20hatg&s">',
        'name' => 'Meatloaf',
        'ingredients' => [
            [
                'item_name' => 'Ground Beef',
                'quantity' => .5,
                'unit' => 'lbs.',
            ],
            [
                'item_name' => 'Egg',
                'quantity' => 1,
                'unit' => '',
            ],
            [
                'item_name' => 'Onion',
                'quantity' => 1,
                'unit' => 'whole',
            ],
            [
                'item_name' => 'Milk',
                'quantity' => 1,
                'unit' => 'cup',
            ],
            [
                'item_name' => 'Dried Breadcrumbs',
                'quantity' => 1,
                'unit' => 'cup',
            ],
            [
                'item_name' => 'BBQ Sauce',
                'quantity' => .33,
                'unit' => 'cup',
            ],
            [
                'item_name' => 'Brown Sugar',
                'quantity' => 2,
                'unit' => 'tbsp.',
            ],
            [
                'item_name' => 'Mustard',
                'quantity' => 2,
                'unit' => 'tbsp.',
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
        'image' => '<img class="final_look" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSubEWNn9IWn6Q9bO6sMe36_7LsltSVWsievQ&s">',
        'name' => 'Lava Cakes',
        'ingredients' => [
            [
                'item_name' => 'Semi-Sweet Chocolate Squares',
                'quantity' => 6.5,
                'unit' => 'squares',
            ],
            [
                'item_name' => 'Eggs',
                'quantity' => 3,
                'unit' => '',
            ],
            [
                'item_name' => 'White Sugar',
                'quantity' => .33,
                'unit' => 'cup',
            ],
            [
                'item_name' => 'All Purpose Flour',
                'quantity' => 2,
                'unit' => 'tbsp.',
            ],
            [
                'item_name' => 'Butter',
                'quantity' => .5,
                'unit' => 'cup',
            ],
            [
                'item_name' => 'Unsweetened Cocoa Powder',
                'quantity' => 4,
                'unit' => 'tsp',
            ],
            [
                'item_name' => 'Salt',
                'quantity' => 1,
                'unit' => 'pinch',
            ],
        ],
        'steps' => [
            'Preheat oven to 400℉, with baking spray, spray down and lightly flour a muffin pan (if you don\'t have ramekins).',
            '.',
        ],
    ],
    8 => [
        'image' => '<img class="final_look" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtBUgpXzSloP2Ved0tV0faiBqzMMK_f-Aewg&s">',
        'name' => 'Chicken Parmesan',
        'ingredients' => [
            [
                'item_name' => 'Chicken',
                'quantity' => 0,
                'unit' => '',
            ],
            [
                'item_name' => '',
                'quantity' => 0,
                'unit' => '',
            ],            
            [
                'item_name' => '',
                'quantity' => 0,
                'unit' => '',
            ],            
            [
                'item_name' => '',
                'quantity' => 0,
                'unit' => '',
            ],            
            [
                'item_name' => '',
                'quantity' => 0,
                'unit' => '',
            ],            
            [
                'item_name' => '',
                'quantity' => 0,
                'unit' => '',
            ],
        ],
        'steps' => [
            '',
        ],
    ],
    9 => [
        'image' => '<img class="final_look" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPANpCH2Hdi03EaXVVy2QnicFP1wq3ORkCDg&s">',
        'name' => 'Steak and Cheese Melt',
        'ingredients' => [
            [
                'item_name' => 'Bread',
                'quantity' => 0,
                'unit' => '',
            ],
                        [
                'item_name' => '',
                'quantity' => 0,
                'unit' => '',
            ],
                        [
                'item_name' => '',
                'quantity' => 0,
                'unit' => '',
            ],
                        [
                'item_name' => '',
                'quantity' => 0,
                'unit' => '',
            ],
                        [
                'item_name' => '',
                'quantity' => 0,
                'unit' => '',
            ],
                        [
                'item_name' => '',
                'quantity' => 0,
                'unit' => '',
            ],
            

        ],
        'steps' => [],
    ],
    10 => [
        'image' => '<img class="final_look" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSklqy40Zx__TfCGsarnFAfxrSFALcijqoVuQ&s">',
        'name' => 'Tomato Soup',
        'ingredients' => [
            [
                'item_name' => '',
                'quantity' => 0,
                'unit' => '',
            ],
                        [
                'item_name' => '',
                'quantity' => 0,
                'unit' => '',
            ],
                        [
                'item_name' => '',
                'quantity' => 0,
                'unit' => '',
            ],
                        [
                'item_name' => '',
                'quantity' => 0,
                'unit' => '',
            ],
                        [
                'item_name' => '',
                'quantity' => 0,
                'unit' => '',
            ],
                        [
                'item_name' => '',
                'quantity' => 0,
                'unit' => '',
            ],
        ],
        'steps' => [
            '',
        ],
    ],
    11 => [
        'image' => '<img class="final_look" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTi3z74uZiFsWCbdJ8OAeAZrW_jKz5mLz6FbQ&s">',
        'name' => 'Grilled Cheese',
        'ingredients' => [
            [
                'item_name' => 'Bread',
                'quantity' => 0,
                'unit' => '',
            ],
                        [
                'item_name' => '',
                'quantity' => 0,
                'unit' => '',
            ],
                        [
                'item_name' => '',
                'quantity' => 0,
                'unit' => '',
            ],
                        [
                'item_name' => '',
                'quantity' => 0,
                'unit' => '',
            ],
                        [
                'item_name' => '',
                'quantity' => 0,
                'unit' => '',
            ],
                        [
                'item_name' => '',
                'quantity' => 0,
                'unit' => '',
            ],
        ],
        'steps' => [
            '',
        ],
    ],
]);


//Setting any configuration options.
$GLOBALS['constants'] = get_defined_constants();
