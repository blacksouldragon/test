<?php include_once "config/config.php"?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Нашы контакты</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/menu.css" rel="stylesheet" type="text/css">
    <!---->
    <link rel="shortcut icon" href="http://bootstrap-3.ru/assets/ico/favicon.ico">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <link href="css/carousel.css" rel="stylesheet">
    <style id="holderjs-style" type="text/css"></style>

    <link rel="stylesheet" href="css/blog.css" type="text/css">
</head>
<body>
<script src="js/docs.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>
<?php include_once 'template/menu.html';?>
<div id="row">
    <h1>Вы можите связатса с нами с помощю обратной связи:</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform">
        <div class="input-group">
            <label for="name"><strong>Ваше Имя</strong></label>
            <input type="text" size="50" name="contactname" id="contactname" value="" />
        </div>
        <div class="input-group">
            <label for="email"><strong>Email:</strong></label>
            <input type="text" size="50" name="email" id="email" value="" />
        </div>
        <div class="input-group">
            <label for="subject"><strong>Тема Сообщения</strong></label>
            <input type="text" size="50" name="subject" id="subject" value="" />
        </div>
        <div class="input-group">
            <label for="message"><strong>Собщение</strong></label>
            <textarea rows="5" cols="50" name="message" id="message"></textarea>
        </div>
        <input type="submit" value="Отправить" name="submit" />
    </form>
</div>
<?php include_once 'template/footer.html';?>
</body>
</html>