<?php
// удалю куки с логином
setcookie('logincook', '', time() - 3600, "/");

header('Location: ../index.php');
exit();