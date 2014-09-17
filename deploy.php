<?php

  $LOCAL_REPO = "/var/www/vhosts/12southdev.com/davinmccoy.com/wp-content/themes/davinmccoy";

  echo shell_exec("cd $LOCAL_REPO");
  echo shell_exec("git pull origin master");
?>

