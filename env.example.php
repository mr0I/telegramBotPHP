<?php
  $variables = [
      'BOT_TOKEN' => 'api token'
  ];

  foreach ($variables as $key => $value) {
      putenv("$key=$value");
  }
?>