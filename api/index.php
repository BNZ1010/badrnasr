<?php

$name = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
}

?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <title>PHP Learning</title>
</head>

<body>

    <h1>مرحباً بك في أول مشروع PHP</h1>

    <form method="POST">

        <label>ما اسمك؟</label>

        <input
            type="text"
            name="name"
            required
        >

        <button type="submit">
            إرسال
        </button>

    </form>

    <?php if ($name != ""): ?>

        <h2>
            أهلاً بك يا <?= $name ?> ❤️
        </h2>

    <?php endif; ?>

</body>

</html>
