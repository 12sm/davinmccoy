<?php

  $LOCAL_REPO = "/var/www/vhosts/12southdev.com/ -- site -- /wp-content/themes/ -- repo -- ";

  echo shell_exec("cd $LOCAL_REPO");
  echo shell_exec("git pull origin master");
?>

