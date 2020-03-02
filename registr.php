<!doctype html>
<html lang="ru">
<head>
    <?php $title="Шаг № 1";
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
            <label for="name">Ваше имя:</label>
            <input type="text" class="form-control" id="name" name="name" autofocus
                   value="<? $_SESSION["name"]?>">
        </div>
        <div class="form-group">
            <label for="name">Login:</label>
            <input type="text" class="form-control" id="login" name="login" autofocus
                   value="<? $_SESSION["login"]?>">
        </div>
        <div class="form-group">
            <label for="name">Email:</label>
            <input type="email" class="form-control" id="email" name="email" autofocus
                   value="<? ["email"]?>">
        </div>
        <div class="form-group">
            <label for="name">Возраст:</label>
            <input type="number" class="form-control" id="age" name="age" autofocus
                   value="<? ["age"]?>">
        </div>
        <div class="form-group">
            <label for="name">Пароль:</label>
            <input type="password" class="form-control" id="password" name="password" autofocus
                   value="<? $_SESSION["password"]?>">
        </div>
        <div class="form-group">
            <label for="name">Телефон +7-ХХХХХХХХХХ :</label>
            <input type="text" class="form-control" id="phone" name="phone" pattern="\+7-[0-9]{10}"
                   autofocus value="<?["phone"]?>">
        </div>
        <!--        <button class="btn btn-info mr-2"-->
        <!--                href="page3.php"    name="goStart" value="goStart" >Вперед</button>-->
        <button class="btn btn-primary" type="submit"  name="go" value="go">
             <a href="index.php" class="design">Зарегистрироваться</button>
    </form>
</div>
</body>
</html>