<!doctype html>
<html lang="ru">
<head>
    <?php
    require_once "parts/header.php";?>
</head>
<body>
<div class="container col-md-5 col-offset-3">
    <hr>
    <div class="alert <?=$_SESSION["alert"]?>" role="alert">
        <?=nl2br($_SESSION["msg"])?></div>
    <hr>
    <form action="action.php" method="POST">
        <div class="form-group">
            <label for="name">Логин:</label>
            <input type="text" class="form-control" id="login" name="login" autofocus
                   value="<? $_SESSION["login"]?>">
        </div>
                        <div class="form-group">
            <label for="name">Пароль:</label>
            <input type="password" class="form-control" id="password" name="password" autofocus
                   value="<? $_SESSION["password"]?>">
        </div>

        <!--        <button class="btn btn-info mr-2"-->
        <!--                href="page3.php"    name="goStart" value="goStart" >Вперед</button>-->
        <button class="btn btn-primary" type="submit"  name="go" value="go">
            <a href="index.php" class="design">Войти</button>
    </form>
</div>
</body>
</html>