<?php

require '../../vendor/autoload.php';

$a = 1;
$b = 3;

$c = $a + $b;

eval(\Psy\sh());

print $c;
