<?php
    setcookie('admin', $email, time() - 3600 * 24 * 30, "/");
    echo true;
?>