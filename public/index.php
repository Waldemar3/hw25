<?php

require_once("../vendor/autoload.php");

$rangeTest = [];

//step 1
$rangeTest[] = memory_get_usage();

$range = range(0, 1000000);

$rangeTest[] = memory_get_usage();

unset($range);

$rangeTest[] = memory_get_usage();

//step 2
$rangeTest[] = memory_get_usage();

$xrange = \App\Generator::xrange(0, 1000000);

$rangeTest[] = memory_get_usage();

unset($xrange);

$rangeTest[] = memory_get_usage();

foreach($rangeTest as $key => $value){
    $step = $key === 0 || $key === 3? "----------- <br />" : "";
    echo $step.round($value/1048576, 3)."MB"."<br />";
};