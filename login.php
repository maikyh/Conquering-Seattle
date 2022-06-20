<?php 

    require 'includes/config/database.php';
    $db = conectarDB();
    // Autenticar el usuario

    $errores = [];

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";

        $email = mysqli_real_escape_string($db, filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL) );
        $password = mysqli_real_escape_string($db, $_POST['password']);

        if(!$email) {
            $errores[] = "The email is mandatory or isn´t valid";
        }

        if(!$password) {
            $errores[] = "The password is mandatory";
        }
        
        if(empty($errores)) {

            // Revisar si el usuario existe
            $query = "SELECT * FROM users WHERE email = '${email}' ";
            $resulado = mysqli_query($db, $query);




            if( $resulado->num_rows ) {
                // Revisar si el password es correcto
                $usuario = mysqli_fetch_array($resulado);

                // var_dump($usuario['password]);

                // Verificar si el password es correcto o no

                $auth = password_verify($password, $usuario['password']);

                if($auth) {
                    // El usuario esta autenticado
                    session_start();

                    // Llenar el arreglo de la sesión
                    $_SESSION['user'] = $usuario['email'];
                    $_SESSION['login'] = true;
                    
                    // var_dump($_SESSION); 

                    // exit;
                    header('Location: /admin');

                } else{
                    $errores[] = 'El password es incorrecto';
                }
            } else {
                $errores[] = "User does not exist";
            }

        }
    
    }



    // Incluye el header
    require 'includes/functions.php';
    incluirTemplate('header'); 
?>

    <main class="container section content-centered">
        <h2>Log In</h2>

        <?php foreach($errores as $error): ?> 
            <div class="alert error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>

        <form method="POST" class="form" novalidate >
            <fieldset>
                <legend>Email & Password</legend>

                <label for="email">E-mail</label>
                <input type="email" name="email" placeholder="Your Email" id="email" >
                
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Your Password" id="password" >
            </fieldset>

            <input type="submit" value="Log In" class="button-green">
        </form>
    </main>

<?php 
    incluirTemplate('footer');
?>