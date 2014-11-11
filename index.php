<?php
include "inc/tpl.class.php";
include "config.php";

raintpl::$tpl_dir = "content/"; // template directory
raintpl::$cache_dir = "cache/"; // cache directory
$tpl = new raintpl(); //include Rain TPL
$tpl->draw( "index" ); 

?>
