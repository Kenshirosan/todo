<?php

function cleanString($string): string
{
    return htmlspecialchars(htmlentities($string));
}

function cleanPost($post): array
{
    $newPost = [];

    foreach ($post as $key => $value) {
        $newValue = cleanString($value);
        $newKey = cleanString($key);

        $newPost[$newKey] = $newValue;
    }

    return $newPost;
}
