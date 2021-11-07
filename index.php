<?php
header('Content-type: text/html; charset=utf-8');
ini_set("error_reporting", "E_ALL & ~E_NOTICE");

echo "Hi，webhooks HelloWorld！By 小傅哥";

echo "<br/>";

exec("cd ~ && cd - && cd -", $output);
print_r($output);