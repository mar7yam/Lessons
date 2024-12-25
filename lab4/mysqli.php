<?php
// بيانات الاتصال
$servername = "localhost"; // عنوان الخادم
$username = "root"; // اسم المستخدم
$password = ""; // كلمة المرور
$dbname = "marim"; // اسم قاعدة البيانات

// إنشاء الاتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
} else {
    echo "تم الاتصال بنجاح!";
}
?>