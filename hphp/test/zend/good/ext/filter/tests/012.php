<?php

var_dump(filter_input(INPUT_GET, "test"));
var_dump(filter_input(INPUT_POST, "test"));
var_dump(filter_input(INPUT_COOKIE, ""));

echo "Done\n";
?>
