<?php
  include('verification.php');
  session_destroy();
  header('location: index.php');
?>