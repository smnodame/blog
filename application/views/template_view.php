<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Home</title>

    <?php
        if(isset($import_script)) {
            include_once 'application/views/scripts/'.$import_script;
        }
     ?>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.3/css/bulma.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.3/css/bulma.min.csss">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php include_once 'application/views/layouts/header.php' ?>
    <div class="container" style="margin-top: 30px">
        <div class="columns">
            <div class="column is-8 is-offset-2">
                <?php include 'application/views/'.$content_view; ?>
            </div>
        </div>
    </div>
    <?php include_once 'application/views/layouts/footer.php' ?>
</body>
</html>
