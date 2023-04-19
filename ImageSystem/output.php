<?php
$fileName = $_FILES["img/upload"]["name"];
$tmp_file = $_FILES["img/upload"]["tmp_name"];
move_uploaded_file($tmp_file, "cheese.png");
?> 