<?php
session_start();
  unset($_SESSION['connected'], $_SESSION['pseudo']);
  header("Location: index.php");
?>