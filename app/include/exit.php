<?php
setcookie('user-email', $user['email'], time() - 3600, '/');
header('Location: /');
?>
