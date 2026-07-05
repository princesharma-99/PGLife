<?php
$conn = mysqli_connect('127.0.0.1','root','','pglife',3306);
if (!$conn) {
    echo 'connect fail';
    exit(1);
}
$res = mysqli_query($conn, 'DESCRIBE properties');
while ($row = mysqli_fetch_assoc($res)) {
    echo $row['Field'] . '|' . $row['Type'] . '|' . $row['Null'] . '|' . $row['Key'] . '|' . $row['Default'] . '|' . $row['Extra'] . "\n";
}
