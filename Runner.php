#!/usr/bin/php
<?php
include_once('TestRunner.php');

$tr = new TestRunner();
$tr->includeProfilesAndSetClasses();
$tr->run();
