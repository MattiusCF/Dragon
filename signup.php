<?php 
    //llamada a la base de datos
    require 'Database.php';
    $message = '';

    if(!empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['pass']) && !empty($_POST['id']) && !empty($_POST['eps']) && !empty($_POST['rh']) && !empty($_POST['club'])){
        $sql = "INSERT INTO users (email, username, pass, id, eps, rh, club) VALUES (:email, :username, :pass, :id, :eps, :rh, :club)";

        //Aquí pasamos toda la información requerida a la base de datos
        $status = $conn->prepare($sql);
        $status->bindParam(':email',$_POST['email']);
        $status->bindParam(':username',$_POST['username']);
        //Encriptado de la contraseña

        //$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        //$stmt->bindParam(':password', $password);
        //$pass = password_hash($_POST['pass'], PASSWORD_BCRYPT);
        $status->bindParam(':pass', $_POST['pass']);
        $status->bindParam(':id',$_POST['id']);
        $status->bindParam(':eps',$_POST['eps']);
        $status->bindParam(':rh',$_POST['rh']);
        $status->bindParam(':club',$_POST['club']);
        
        if($status->execute()){
            $message = 'Se creó el nuevo usuario.';
        }else{
            $message = 'Ocurrió un error.';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
        <link rel="stylesheet" href="css/main.css">
    <title>Registrar</title>
</head>
<body>
    <div class="login__container">
        <div class="login__top">
            <img  class="login__img" src="./img/logo.png" alt="">
            <h2 class="login__title">Registrar un <span>usuario.</span></h2>
            <?php if(!empty($message)): ?>
                <h2 class="signup__msg"><span> <?= $message ?></span></h2>
            <?php endif; ?>
        </div>
        <!--En esta sección se crea el formulario en el cual se capturan todos los datos necesarios -->
        <form class="login__form" method="POST" action="signup.php">
            <input type="email" name="email" placeholder="&#x2709; Correo electronico." required>
            <input type="text" name="username" placeholder="&#128100; Nombre de usuario." required>
            <input type="password" name="pass" placeholder="&#x1F512; Contraseña." required>
            <input type="text" name="id" placeholder="&#x1F51E; Documento de identidad." required>
            <input type="text" name="eps" placeholder="&#x271A; EPS a la que está afiliado." required>
            <input type="text" name="rh" placeholder="&#x1F489; Grupo sanguineo." required>
            <input type="text" name="club" placeholder="&#x1F3C0; Club al que pertenece." required>
            <input class="btn__submit" type="submit" value="ENTRAR">
        </form>
    </div>
</body>
</html>