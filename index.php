<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
        <link rel="stylesheet" href="css/main.css">
        <title>Login</title>
    </head>
    <body>
        <div class="login__container">
            <div class="login__top">
              <img  class="login__img" src="./img/logo.png" alt="">
              <h2 class="login__title">Bienvenido a <span>Dragones</span></h2>
            </div>

            <form class="login__form" method="POST" action="login.php">
                <input type="text" name="username" placeholder="&#128100; Nombre de usuario" required autofocus>
                <input type="password" name="password" placeholder="&#x1F512; Contraseña" required>
                <input class="btn__submit" type="submit" value="ENTRAR">
            </form>
        </div>
    </body>
</html>
