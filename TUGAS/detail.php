<?php
require "metodologi.php";
require "function.php";

$id = $_GET['id'];

if ($id == 1) {
  header("location:waterfall.php");
} elseif ($id == 2) {
  header("location:incremental.php");
} elseif ($id == 3) {
  header("location:spiral.php");
} elseif ($id == 4) {
  header("location:vshaped.php");
} elseif ($id == 5) {
  header("location:rad.php");
} elseif ($id == 6) {
  header("location:prototype.php");
} elseif ($id == 7) {
  header("location:scrum.php");
} elseif ($id == 8) {
  header("location:xp.php");
}
