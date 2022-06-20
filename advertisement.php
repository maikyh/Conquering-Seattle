<?php 

    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id) {
        header('Location: /');
    }

        // Importar la conexion
        require 'includes/config/database.php';
        $db = conectarDB();
    
    
        // consultar
        $query = "SELECT * FROM properties WHERE id = ${id}";
    
        // obtener resultado
        $resultado = mysqli_query($db, $query);

        if(!$resultado->num_rows) {
            header('Location: /');
        }
        
        $propiedad = mysqli_fetch_assoc($resultado);


    require 'includes/functions.php';
    incluirTemplate('header'); 
?>

    <main class="container section content-centered">
        <h1><?php echo $propiedad['title']; ?></h1>

        
        <img src="/imagenes/<?php echo $propiedad['image'] . ".jpg"; ?>" alt="Property Image" loading="lazy">
        
        <div class="resume-property">
            <p class="price"><?php echo $propiedad['price']; ?></p>
            <ul class="icons-characteristics">
                <li>
                    <img class="icon" src="build/img/icono_wc.svg" alt="icon wc" loading="lazy">
                    <p><?php echo $propiedad['wc']; ?></p>
                </li>
                <li>
                    <img class="icon" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" loading="lazy">
                    <p><?php echo $propiedad['parking']; ?></p>
                </li>
                <li>
                    <img class="icon" src="build/img/icono_dormitorio.svg" alt="icon bedrooms" loading="lazy">
                    <p><?php echo $propiedad['bedrooms']; ?></p>
                </li>
            </ul>

            <?php echo $propiedad['description']; ?>
        </div>
    </main>

<?php 
    mysqli_close($db);

    incluirTemplate('footer');
?>