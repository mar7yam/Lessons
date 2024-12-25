<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name=$_GET['name'];
    echo "Hello,".$name;
}
?>

<!-- نموذج HTML لاستخدام GET -->
<form method="get" action="">
    Name: <input type="text" name="name">
    <input type="submit" value="Submit">
</form>

