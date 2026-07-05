<?php
$conn = mysqli_connect('127.0.0.1','root','','pglife',3306);
if (!$conn) {
    echo 'connect fail';
    exit(1);
}
$res = mysqli_query($conn, "SELECT COUNT(*) AS c FROM properties");
$row = mysqli_fetch_assoc($res);
if ($row['c'] > 0) {
    echo 'properties already exist: ' . $row['c'] . "\n";
    exit(0);
}
$sql = "INSERT INTO properties (name,address,city_id,gender,rent,rating_clean,rating_food,rating_safety,description) VALUES ";
$sql .= "('Saxena''s Paying Guest','H.No. 3958 Kaseru Walan, Pahar Ganj, New Delhi, Delhi 110055',1,'unisex',5000,4.5,4.4,4.3,'Comfortable PG near Pahar Ganj with meals included.'),";
$sql .= "('Navrang PG Home','644-C, Mohalla Baoli 6 Tooti Chowk, Paharganj, New Delhi, Delhi 110055',1,'unisex',6000,4.2,4.1,4.0,'Well-kept PG with good hygiene and easy transportation access.')";
if (mysqli_query($conn, $sql)) {
    echo 'inserted rows: ' . mysqli_affected_rows($conn) . "\n";
} else {
    echo 'insert failed: ' . mysqli_error($conn) . "\n";
}
