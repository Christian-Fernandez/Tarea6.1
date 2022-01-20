<!DOCTYPE html>

<?php

require_once 'bd.php';

if($_SERVER["REQUEST_METHOD"]=="POST") {
    
        $usu = comprobar_usuario($_POST["usuario"],$_POST["clave"]);
        if($usu === false){
                $err = true;
                $usuario = $_POST["usuario"];
        }else{
            session_start();
            $_SESSION["usuario"] = $usu;
            $_SESSION["correo"] = $_POST["usuario"];
            $_SESSION["carrito"] = [];

            header("Location: menu.php");
        }
}

?>
 
<html>
    <head>
        <title>Formulario de login</title>
        <meta charset = "UTF-8">
        <style>

            *{
                font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
                font-size: 13px;
            }

            h1{
                font-size:25px
            }

            h2{
                font-size: 19px;
            }

            body{
                background: #eeeeee;
                font-size: 16px;
            }

            form {
                position:fixed;
                top:50%;
                left:50%;
                width:350px;
                border: 1px solid #E1E1E1;
                border-radius:10px;
                padding: 15px;
                transform: translate(-50%, -50%);
                background-color: white;
                text-align: center;
            }

            input[type="text"] {
                position: relative;
                font-size: 16px;
                height: auto;
                padding: 10px;
                margin-bottom: 10px;
                border-radius:5px;

            }

            input[type="password"] {
                position: relative;
                font-size: 16px;
                height: auto;
                padding: 10px;
                border-radius:5px;
                margin-bottom: 20px;

            }

            input[type="submit"]{
                outline: none;
                background: #4285F4;
                width: 100%;
                border: 0;
                border-radius: 5px;
                padding: 12px 20px;
                color: #FFFFFF;
                cursor: pointer;
                font-size: 18px;
            }

            input[type="submit"]:hover{
                background: #5691f1;

            }

            .error{
                color: red;
                font-size: 14px;
            }

        </style>
    </head>
    <body>

        <form action = "<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>" method = "POST">
            <h2>Login</h2>
            <input value = "<?php if (isset ($usuario))echo $usuario;?>"
            id = "usuario" name = "usuario" type = "text" placeholder="Email Address">
            <input id = "clave" name = "clave" type = "password" placeholder="Password">
            <input type = "submit" value="Login">
            <?php if (isset ($err) and $err == true){
                echo "<p class='error'> Revise usuario y contraseña</p>";
            }?>
        </form>
    </body>
</html>


