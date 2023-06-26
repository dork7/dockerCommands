<?php
echo "hello world";
$link = mysqli_connect ("172.2.0.2:3306", "root", "root");
if (! $link) {
echo "Cannot connect to MySQL". PHP_EOL; exit;
}
echo "Success: Connection established!" . PHP_EOL;
echo "Host Information:". mysqli_get_host_info ($link). PHP_EOL; mysqli_close ($link);
?>
