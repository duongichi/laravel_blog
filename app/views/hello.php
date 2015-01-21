<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User authentication</title>
</head>
<body>
    <h1>LARAVEL BLOG</h1>
    <p>
        Hi
        <?php echo (Confide::user() ?: 'visitor') ?>
    </p>
</body>
</html>