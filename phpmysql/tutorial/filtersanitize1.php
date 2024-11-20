<?php
echo "<h3>Filter sanitize function part 2</h3>";

$var = "<h5>This is not a heading</h5>";

// echo filter_var($var,FILTER_SANITIZE_MAGIC_QUOTES);

echo filter_var($var,FILTER_SANITIZE_STRING)


?>