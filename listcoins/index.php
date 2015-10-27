<?php
$link = mysqli_connect('localhost', 'root', 'password');
if (!$link) {
  $error = 'Unable to connect to the database server.';
  include 'error.html.php';
  exit();
}
if (!mysqli_set_charset($link, 'utf8')) {
  $error = 'Unable to set database connection encoding.';
  include 'error.html.php';
  exit();
}
if (!mysqli_select_db($link, 'librecoin')) {
  $error = 'Unable to locate the librecoin database.';
  include 'error.html.php';
  exit();
}

$result = mysqli_query($link, 'SELECT * FROM item');
if (!$result) {
  $error = 'Error fetching items: ' . mysqli_error($link);
  include 'error.html.php';
  exit();
}

while ($row = mysqli_fetch_array($result)) {
  $coins[] = $row['name'];
}
include 'coins.html.php';
?>
