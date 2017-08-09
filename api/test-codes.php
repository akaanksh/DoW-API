<?php
$setcodeto = @$_GET['code'];

http_response_code($setcodeto);
echo "Response code was set to $setcodeto please enter the URL in http://dow.akaanksh.ga/";

?>