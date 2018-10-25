<?php

/**
 * For outputting any message on the screen, PHP offers to you some methods to do that. *
 *
 * Below we can see some of them:
 *
 * echo
 * print
 * var_dump()
 * print_r()
 *
 * *These statements were written and executed in PHP 7.2.
 */



echo "Hello World!";

print "Hello World!";

echo helloWorld();

print helloWorld();

var_dump("Hello World!");

print_r("Hello World!");

var_dump(helloWorld());

print_r(helloWorld());

function helloWorld ()
{
    return "Hello World!";
}