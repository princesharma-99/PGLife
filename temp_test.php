<?php
$conn = @mysqli_connect('127.0.0.1', 'root', '', 'pglife', 3306);
if ($conn) {
    echo 'connected';
    mysqli_close($conn);
} else {
    echo mysqli_connect_error();
}
