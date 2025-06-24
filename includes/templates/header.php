<?php


echo <<<HTML
    <!DOCTYPE html>

    <html lang="en-US">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{$GLOBALS['constants']['APP_ROOT']}css/styles.css">
        <script src="{$GLOBALS['constants']['APP_ROOT']}js/scripts.js"></script>

        <title>Mackenzie's Recipes</title>

    </head>

    <body>

        <header>

            <h1>Recipe's by Mackenzie Nelson</h1>

            <nav>
                <a href="{$GLOBALS['constants']['APP_ROOT']}" id="nav-home">Home</a>
            </nav>
        </header>
    HTML;
