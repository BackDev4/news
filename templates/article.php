<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Новость</title>
</head>
<body>

<h1><?php echo $this->article->title; ?></h1>

<article>
    <h2>
        <a href="/?controller=Article&id=<?php echo $this->article->id; ?>">
            <?php echo $this->article->title; ?>
        </a>

    </h2>
    <p> <?php echo $this->article->content; ?> </p>
</article>

</body>
</html>
