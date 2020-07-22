<?php
include_once 'includes/Templates/header.php';
?>

 
<section class="seccion contenedor">
    <h2>Invitados</h2>
 
    <?php
 
    try {
        require_once('includes/Funciones/bddconexion.php');
        $sql = "SELECT * FROM invitados";
        $resultado = $conn->query($sql);  //ejecutar la consulta
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
 
    ?>
 
    <section class="invitados contenedor seccion">
        <h2>Nuestros Invitados</h2>
        <ul class="lista-invitados clearfix">
            <?php while ($invitados = $resultado->fetch_assoc()) { ?>
                <li>
                    <div class="invitado">
                        <img src="img/<?php echo $invitados['url_imagen']?>" alt="Invitado">
                        <p> <?php echo $invitados['nombre_invitado'] . " " . $invitados['apellido_invitado']; ?> </p>
                    </div>
                </li>
            <?php } //fin de fetch assoc ?>
        </ul>
    </section>
    <?php $conn->close(); ?>
</section>
<?php
include_once 'includes/Templates/footer.php';
?>