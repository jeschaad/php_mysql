<?php
$link = mysqli_connect('localhost', 'root', 'password');
if (!$link) {
  $output = 'Unable to connect to the database server.';
  include 'error.html.php';
  exit();
}
if (!mysqli_set_charset($link, 'utf8')) {
  $output = 'Unable to set database connection encoding.';
  include 'output.html.php';
  exit();
}
if (!mysqli_select_db($link, 'librecoin')) {
  $output = 'Unable to locate the librecoin database.';
  include 'error.html.php';
  exit();
}

$result = mysqli_query($link, 'SELECT type FROM coins');
if (!$result) {
  $error = 'Error fetching coins: ' . mysqli_error($link);
  include 'error.html.php';
  exit();
}

while ($row = mysqli_fetch_array($result)) {
  $coins[] = $row['type'];
}
include 'coins.html.php';
?>
