<?php
$conn = mysqli_connect('127.0.0.1','root','','pglife',3306);
if (!$conn) {
    echo 'connect fail';
    exit(1);
}
$res = mysqli_query($conn, "SELECT id,name FROM cities LIMIT 20");
while ($row = mysqli_fetch_assoc($res)) {
    echo $row['id'] . '|' . $row['name'] . "\n";
}
echo "---\n";
$res2 = mysqli_query($conn, "SELECT COUNT(*) AS c FROM properties");
if ($res2) {
    $r = mysqli_fetch_assoc($res2);
    echo 'properties count=' . $r['c'] . "\n";
}
$res3 = mysqli_query($conn, "SELECT id,city_id,name FROM properties LIMIT 20");
while ($row = mysqli_fetch_assoc($res3)) {
    echo $row['id'] . '|' . $row['city_id'] . '|' . $row['name'] . "\n";
}
