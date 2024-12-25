
<?php
$host = 'localhost';      // اسم المضيف (عادةً localhost)
$db = 'marim';    // اسم قاعدة البيانات
$user = 'root';  // اسم المستخدم
$pass = '';  // كلمة المرور

// إعدادات DSN (Data Source Name) الخاصة بـ MySQL
$dsn = "mysql:host=$host;dbname=$db;charset=utf8";

// محاولة الاتصال بقاعدة البيانات باستخدام PDO
try {
    // إنشاء كائن PDO
    $pdo = new PDO($dsn, $user, $pass);
    // تعيين وضع الخطأ (إظهار الأخطاء)
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "تم الاتصال بنجاح بقاعدة البيانات!";
} catch (PDOException $e) {
    // في حالة حدوث خطأ أثناء الاتصال
    echo "خطأ في الاتصال بقاعدة البيانات: " . $e->getMessage();
}
?>
