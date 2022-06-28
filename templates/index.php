<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php</title>
</head>
<body>

<h1>Новости</h1>

<?php foreach ($this->articles as $article): ?>
    <article>
        <h2> <?php echo $article->title; ?></h2>
        <p> <?php echo $article->content; ?> </p>
    </article>

    <hr>
<?php endforeach; ?>


<?php echo $this->foo;?>

</body>
</html>
