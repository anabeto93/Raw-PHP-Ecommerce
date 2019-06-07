<?php

$db = mysqli_connect('192.168.10.10','homestead','secret','phpcom','3306');

if (mysqli_connect_errno()) {
    echo 'Database connection failed wtih following errors: '. mysqli_connect_error();
    die();
}