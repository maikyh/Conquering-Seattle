<?php 
    require '../includes/functions.php';
    $auth = estaAutenticado();

    if(!$auth) {
        header('Location: /');
    }
    
    // Importar la conexión
    require '../includes/config/database.php';
    $db = conectarDB();
    
    // Escribir el Query
    $query = "SELECT * FROM properties";

    // Consultar la BD
    $resultadoConsulta = mysqli_query($db, $query);


    // Muestra mensaje condicional
    $resultado = $_GET['resultado'] ?? null;




    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if($id) {

            // Eliminar el archivo
            $query = "SELECT image FROM properties WHERE id = ${id}";

            $resultado = mysqli_query($db, $query);
            $propiedad = mysqli_fetch_assoc($resultado);

            unlink('../imagenes/'. $propiedad['image'] . ".jpg");

            // Eliminar la propiedad
            $query = "DELETE FROM properties WHERE id = ${id}";
            $resultado = mysqli_query($db, $query);

            if($resultado) {
                header('location: /admin?resultado=3');
            }
        }

        var_dump($id);
    }

    // Incluye un template
    incluirTemplate('header'); 
?>

    <main class="container section">
        <h2>Real Estate Administrator</h2>
        <?php if(intval( $resultado ) === 1): ?>
            <p class="alert success">Ad Created Successfully</p>
        <?php elseif(intval( $resultado ) === 2): ?>
            <p class="alert success">Ad Updated Successfully.</p>
        <?php elseif(intval( $resultado ) === 3): ?>
            <p class="alert success">Ad Erased Successfully.</p>
        <?php endif ?>

        <a href="/admin/properties/create.php" class="button-green">New Property</a>
  

        <table class="properties">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                <?php while( $property = mysqli_fetch_assoc($resultadoConsulta)): ?>
                <tr>
                    <td><?php echo $property['id']; ?></td>
                    <td><?php echo $property['title']; ?></td>
                    <td> <img src="/imagenes/<?php echo $property['image'] . ".jpg"; ?>" class="image-table"></td>
                    <td>$<?php echo $property['price']; ?></td>
                    <td>
                        <form method="POST" clas="w-100">

                            <input type="hidden" name="id" value="<?php echo $property['id']; ?>" >

                            <input type="submit" class="button-red-block" value="Erase">
                        </form>

                        <a href="/admin/properties/update.php?id=<?php echo $property['id']; ?>" class="button-yellow-block">Update</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </main>

<?php 

    // Cerrar la conexion
    mysqli_close($db);

    incluirTemplate('footer');
?>