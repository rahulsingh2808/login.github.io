<?php
session_start();
echo "welcome" . $_SESSION['email'],"\n";
echo "<a href='logout.php'><br><br>Logout</a>";
?>
<style type ="text/css">
        body {
  background-image: url("https://www.parallels.com/blogs/ras/app/uploads/2021/03/virtual-learning-environment.jpg");
  background-size: 100% 100%;
  </style>