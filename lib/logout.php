<?php
// удалю куки с логином
setcookie('admincook', '', time() - 3600, "/");
setcookie('logincook', '', time() - 3600, "/");

header('Location: ../index.php');
exit();