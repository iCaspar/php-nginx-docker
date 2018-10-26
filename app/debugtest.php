<?php
/**
 * A file to run when testing that all is well with the world
 *
 * @package Arras
 * @author  Caspar Green <caspar@iCasparWebDevelopment.com>

 * @since 1.0.0
 */

$one = 1;
$two = 2;

$three = $one + $two;

echo ($three === 3)
    ? '1 plus 1 equals 3. All is well.'
    : 'Something has gone badly wrong.';
