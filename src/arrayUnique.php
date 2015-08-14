<?php

/**
 * I use this when I want to get unique elements
 * from an array. PHP has an inbuilt function
 * array_unique(), but this is significantly faster
 * when array size is large
 * 
 * What it does it first flip the array, so that key
 * and value are interchanged. Then, we extract only
 * keys, which is something like INSERT IGNORE, quickly
 * dropping all duplicates.
 * 
 * One thing to keep in mind is the original array keys
 * are lost. In case they need to be preserved, then 
 * array_unique() seems to be the best option.
 */
 
class arrayUnique
{
    public function arrayUnique($someArray)
    {
        $unique = array_keys(array_flip($someArray));
        return $unique;
    }
}