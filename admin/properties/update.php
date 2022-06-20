<?php 

    require '../../includes/functions.php';
    $auth = estaAutenticado();

    if(!$auth) {
        header('Location: /');
    }

    // Validar la URL por ID válido
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id) {
        header('Location: /admin');
    }

    //Base de datos
    require '../../includes/config/database.php';
    $db = conectarDB();

    // Obtener los datos de la propiedad
    $consulta = "SELECT * FROM properties WHERE id = ${id}";
    $resultado = mysqli_query($db, $consulta);
    $propiedad = mysqli_fetch_assoc($resultado);


    // Consultar para obtener 
    $consulta = "SELECT * FROM sellers";
    $resultado = mysqli_query($db, $consulta);

    // Arreglo con mensajes de errores
    $errores = [];

    $title = $propiedad['title'];
    $price = $propiedad['price'];
    $description = $propiedad['description'];
    $bedrooms = $propiedad['bedrooms'];
    $wc = $propiedad['wc'];
    $parking = $propiedad['parking'];
    $sellerId = $propiedad['sellerId'];
    $imageProperty = $propiedad['image'];

    // Ejecutar el codigo despues de que el usuario envia el formulario
    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";

        // echo "<pre>";
        // var_dump($_FILES);
        // echo "</pre>";
        
        
        $title = mysqli_real_escape_string( $db, $_POST['title'] );
        $price = mysqli_real_escape_string( $db, $_POST['price'] );
        $description = mysqli_real_escape_string( $db, $_POST['description'] );
        $bedrooms = mysqli_real_escape_string( $db, $_POST['bedrooms'] );
        $wc = mysqli_real_escape_string( $db, $_POST['wc'] );
        $parking = mysqli_real_escape_string( $db, $_POST['parking'] );
        $sellerId = mysqli_real_escape_string( $db, $_POST['seller'] );
        $created = date('Y/m/d');

        //Asignar files hacia una variable
        $imagen = $_FILES['image'];

        if(!$title) {
            $errores[] = "You must add a title";
        }

        if(!$price) {
            $errores[] = "The price is required";
        }

        if(strlen( $description ) < 50) {
            $errores[] = 'The description is mandatory and must have at least 50 characters';
        }

        if(!$bedrooms) {
            $errores[] = "The number of bedrooms is required";
        }

        if(!$wc) {
            $errores[] = "The number of bathrooms is mandatory";
        }

        if(!$parking) {
            $errores[] = "The number of parking spaces is required";
        }

        if(!$sellerId) {
            $errores[] = "Choose a seller";
        }

        // Validar por tamaño (1mb maximo)
        $medida = 1000 * 1000;
        if($imagen['size'] > $medida ) {
            $errores[] = 'La Imagene es muy pesada';
        }


        // echo "<pre>";
        // var_dump($errores);
        // echo "</pre>";


        // Revisar que el array de rrores este vacio

        if(empty($errores)) {
            
            // Crear carpeta
            $carpetaImagenes = '../../imagenes/';

            if(!is_dir($carpetaImagenes)){
                mkdir($carpetaImagenes);
            }

            $nameImage = '';

            /** SUBIDA DE ARCHIVOS*/

            if($imagen['name']) {
                // Eliminar la imagen previa

                unlink($carpetaImagenes . $propiedad['image'] . ".jpg");
               
                // // Generar un nombre unico
                $nombreImagen = md5( uniqid( rand(), true ) );
    
                // // Subir la imagen
                move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen . ".jpg");
            } else{
                $nombreImagen = $propiedad['image'];
            }

            // Insertar en la base de datos
            $query = " UPDATE properties SET title = '${title}', price = '${price}', image = '${nombreImagen}', description = '${description}', bedrooms = ${bedrooms}, wc = ${wc}, parking = ${parking}, sellerId = ${sellerId} WHERE id = ${id} ";
            
            $resultado = mysqli_query($db, $query);

            if($resultado) {
                // Redireccionar al usuario
                header('Location: /admin?resultado=2');
            }
        }

        


    }


    incluirTemplate('header'); 
?>

    <main class="container section">
        <h2>Update Property</h2>

        <a href="/admin" class="button-green">Return</a>

        <?php foreach($errores as $error): ?>
        <div class="alert error">
            <?php echo $error; ?>
        </div>
        <?php endforeach; ?>

        <form class="form" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>General Information</legend>

                <label for="title">Title:</label>
                <input type="text" id="title" name="title" placeholder="Property Title" value="<?php echo $title; ?>">

                <label for="price">Price:</label>
                <input type="number" id="price" name="price" placeholder="Property Price" value="<?php echo $price; ?>">
                
                <label for="image">Image:</label>
                <input type="file" id="image" accept="image/jpeg, image/png" name="image">

                <img src="/imagenes/<?php echo $imageProperty . ".jpg" ?>" class="image-small">

                <label for="description">Description:</label>
                <textarea id="description" name="description"><?php echo $description; ?></textarea>
                
            </fieldset>

            <fieldset>
                <legend>Information Property</legend>

                <label for="bedrooms">Bedrooms:</label>
                <input type="number" id="bedrooms" name="bedrooms" placeholder="Ex: 3" min="1" max="9" value="<?php echo $bedrooms; ?>">
                
                <label for="wc">Bathrooms:</label>
                <input type="number" id="wc" name="wc" placeholder="Ex: 3" min="1" max="9" value="<?php echo $wc; ?>">

                <label for="parking">Parking:</label>
                <input type="number" id="parking" name="parking" placeholder="Ex: 3" min="1" max="9" value="<?php echo $parking; ?>">
                
            </fieldset>

            <fieldset>
                <legend>Seller</legend>

                <select name="seller">
                    <option value="">-- Select --</option>
                    <?php while($seller = mysqli_fetch_assoc($resultado) ): ?>
                        <option <?php echo $sellerId === $seller['id'] ? 'selected' : ''; ?> value="<?php echo $seller['id'] ?>"><?php echo $seller['name'] . " " . $seller['surname']; ?></option>
                    <?php endwhile; ?>
                </select>
            </fieldset>

            <input type="submit" value="Update Property" class="button button-green">
        </form>
    </main>

<?php 
    incluirTemplate('footer');
?>