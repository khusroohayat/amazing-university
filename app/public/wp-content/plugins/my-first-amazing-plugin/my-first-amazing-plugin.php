<?php

/*
Plugin Name: My First Amazing Plugin
Description: This plugin will change your life.
*/

add_filter('the_content', 'amazingContentEdits');

function amazingContentEdits($content)
{
    $content = $content . '<p>All Content belongs to fictional University</p>';
    $content = str_replace('Lorem', '*****', $content);
    return $content;
}

add_shortcode('programCount', 'programCountFucntion');

function programCountFucntion()
{
    return 2 + 2;
}