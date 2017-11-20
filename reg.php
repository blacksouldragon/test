<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>test reg</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/menu.css" rel="stylesheet" type="text/css">
    <link href="css/reg.css" rel="stylesheet" type="text/css">
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>
<?php require_once 'template/menu.html';?>
<div class="container">
<form class="form-signin" role="form">
    <h1 class="form-signin-heading">Wellcome to 'name site'</h1>
    <p>You mail:<input class="form-control" type="email" name="You email" placeholder="exemple@gmail.com"/></p>
    <p>You password:<input class="form-control" type="password" name="You password"/></p>
    <label class="checkbox"><input value="remember-me" type="checkbox">I have 18 year</label>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Reg me</button>
</form>
</div>
</body>