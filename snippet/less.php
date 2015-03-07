<?php
$less = new lessc;
$root = realpath(__DIR__ . "/../..");
$less->setFormatter("compressed");
$less->checkedCompile($root ."/assets/less/style.less", $root ."/assets/css/style.css");
?>
<link rel="stylesheet" href="<?php echo url('assets/css/style.css') ?>">