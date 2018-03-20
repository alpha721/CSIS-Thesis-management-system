<?php

session_unset();

session_destroy();

header("Location: login.php?msg=succesfully logged out");

?>