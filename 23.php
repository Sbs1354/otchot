<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 3 -->
    <h1>Hello H1</h1>
    <?php include 'script.php';?>
    <!-- 4 -->
    <script>
        const h2 = document.createElement("h2");
        h2.textContent += "Hello H2";
        document.body.appendChild(h2);
    </script>
    <!-- 5 -->
    <h1>Сравнительный анализ</h1>
    <p>первый текст</p>
</body>
</html>