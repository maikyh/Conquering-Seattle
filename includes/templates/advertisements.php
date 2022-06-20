<?php
    // Importar la conexion
    require __DIR__ . '/../config/database.php';
    $db = conectarDB();


    // consultar
    $query = "SELECT * FROM properties LIMIT ${limit}";

    // obtener resultado
    $resultado = mysqli_query($db, $query);


?>

<div class="container-advertisements">
            <?php while($propiedad = mysqli_fetch_assoc($resultado)): ?>
            <div class="advertisement">
                <img src="/imagenes/<?php echo $propiedad['image'] . ".jpg"; ?>" alt="advertisement" loading="lazy">
                

                <div class="content-advertisement">
                    <h3 class="centered"><?php echo $propiedad['title']; ?></h3>
                    <p class="centered"><?php echo  $propiedad['description']; ?> </p>
                    <p class="centered price">$3,000,000</p>

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

                    <a href="advertisement.php?id=<?php echo $propiedad['id']; ?>" class="black button-yellow-block">
                        See Property
                    </a>
                </div><!--.content-advertisement-->
            </div><!--advertisement-->
            <?php endwhile; ?>
        </div><!--.container-advertisements-->

<?php

    // Cerrar la conexion
    mysqli_close($db);
?>