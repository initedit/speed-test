<?php
header("Content-Type: application/octet-stream");
$count = isset($_GET["count"]) ? $_GET["count"] : 1024;
$count = (int) $count;
if (function_exists("set_time_limit ")) {
    set_time_limit(60 * 60);
}
while ($count-- > 0) {
    echo 1;
}