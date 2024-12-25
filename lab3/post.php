<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    echo "Hello, " . $name;
}
?>

<!-- نموذج HTML لاستخدام POST -->
<form method="post" action="">
    Name: <input type="text" name="name">
    <input type="submit" value="Submit">
</form>
