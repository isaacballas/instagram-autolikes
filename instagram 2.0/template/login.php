<?php

echo "
<a class=\"btn-signin\" href='{$instagram->getLoginUrl(array(
  'basic',
  'likes'
))}'>"; ?> <img src="images/btn-signin-instagram.png"></img></a>
