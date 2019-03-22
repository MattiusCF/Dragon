
<?php
    //Captura los datos enviados por POST
    $username = $_POST['username'];
    $password = $_POST['password'];

    //Convierte los datos capturados al formato usado para la identificación
    $user = "{$username}|{$password}";

    //inicializa el archivo que uso como "base de datos"
    $file = fopen("BD/BaseDeDatos.txt", "r");

    /*carga la línea de datos perteneciente al primer usuario de la 
    BD y lo compara con los datos del logIn*/
    do{
        $record = fgets($file);
        if($user == $record){
            echo "Bienvenido {$username}";
            //salta fuera del while para evitar repeticiones innecesarias y mensajes erróneos
            goto fin;
        }
    }while(!feof($file));
    echo "Usuario o contraseña incorrecta.";

    fin:
    fclose($file);
    
?>