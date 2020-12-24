<?php
    setcookie('user', $email, time() - 3600 * 24 * 30, "/");
    echo true;
?>