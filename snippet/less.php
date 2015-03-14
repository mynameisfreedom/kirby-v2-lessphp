<?php

// Using 'realpath' seems to work best in different situations.
$root = realpath(__DIR__ . "/../..");

// Your main SCSS file.
$sourceFile = $root . "/assets/scss/style.scss";

// Your final CSS file.
$compiledFile = $root . "/assets/css/style.css";

// Activate library.
require "site/plugins/lessphp/lessc.inc.php";
$less = new lessc;

// Use compression provided by library.
$less->setFormatter("compressed");

// Compile and update your CSS file.
$less->checkedCompile($sourceFile, $compiledFile);

?>
<link rel="stylesheet" href="<?php echo url('assets/css/style.css') ?>">
