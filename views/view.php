<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <link href="microcms.css" rel="stylesheet" />
    <title>Mybooks - Home</title>
</head>
<body>
    <header>
        <h1>Mybooks</h1>
    </header>
    <?php foreach ($books as $livre): ?>
    <article>
        <h2><?php echo $livre->getTitle() ?></h2>
        <p><?php echo $livre->getContent() ?></p>
    </article>
    <?php endforeach ?>
    <footer class="footer">
        <a href="https://github.com/ua1905/MyBooks">Mybooks</a> is a minimalistic CMS built as a showcase for modern PHP development.
    </footer>
</body>
</html>