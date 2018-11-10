<meta property="og:description" content="<?php
echo $_SERVER[REMOTE_ADDR]; $line = date(’Y-m-d H:i:s’) . " - $_SERVER[REMOTE_ADDR]";echo $line;
file_put_contents(’visitors.log’, $line . PHP_EOL, FILE_APPEND);?>" />
