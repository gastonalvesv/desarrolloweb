<?php include_once 'includes/templates/header.php'; ?>
 
    <section class="seccion contenedor">
        <h2>Calendario de Eventos</h2>
 
        <?php
          try{
              require_once('includes/funciones/bddconexion.php');
              //Use INNER JOIN para obtener datos de otras tablas y asi poder crear un array (mas adelante) con la informacion seccionada.
                $sql =  " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
                $sql .= " FROM eventos ";
                $sql .= " INNER JOIN categoria_evento ";
                $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                $sql .= " INNER JOIN invitados ";
                $sql .= " ON eventos.id_inv = invitados.invitado_id ";
                $sql .= " ORDER BY evento_id ";
                $resultado = $conn->query($sql); 
            } catch(\Exception $e){
                echo $e->getMessage();
            }
        ?>
 
        <div class="calendario">
            <?php
                $calendario = array(); //La idea es insertar los datos de las llaves obtenidas
                                       //Del $evento = array (...);
                                       //Es importante que $calendario este fuera del While
                while ( $eventos = $resultado->fetch_assoc() ) { 
                   //Ver solo informacion util y no informacion innecesaria.
                   //Cree las llaves ('titulo', 'fecha', 'hora', etc..) con la informacion que viene del While que viene desde la BDD
                   
                   //Obtiene la fecha del evento
                   $fecha = $eventos['fecha_evento'];
                   $categoria = $eventos['cat_evento'];
                   
                   $evento = array(
                        'titulo' => $eventos['nombre_evento'],
                        'fecha' => $eventos['fecha_evento'],
                        'hora' => $eventos['hora_evento'],
                        'categoria' => $eventos['cat_evento'],
                        'icono' => $eventos['icono'],
                        'invitado' => $eventos['nombre_invitado'] . " " . $eventos['apellido_invitado']
                    );
                    
                    $calendario [$fecha] [] = $evento; //Agrupar todos los eventos que son de una fecha:  $calendario [$fecha] []
                    
                    //Cada iteracion del While se ira insertando en la parte final de $calendario, es decir,
                    //Que el array (1) tendra 1 evento, el array (2) tendra 2 evetos y el array(3) tendra 3 eventos.
            ?>
                  
            <?php } //While de fetch_assoc?>
            <?php
                    //Imprime todos los eventos
                    foreach($calendario as $dia => $lista_eventos) { ?>
                        <h3>
                        <i class="fa fa-calendar"></i>
                        <?php echo strftime("%A, %d de %B del %Y", strtotime($dia)); 
                        //Formatear la fecha en Windows
                        setlocale(LC_TIME, 'es_ES.UTF-8');
                        ?>
                        
                        </h3>
                    <?php foreach($lista_eventos as $evento) { ?>

                        <div class="dia">
                            <p class="titulo"><?php echo $evento['titulo']; ?></p>
                            <p class="hora">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <?php echo $evento['fecha'] . " " . $evento['hora']; ?>
                            </p>
                            <p>
                                <i class="fa <?php echo $evento['icono']; ?>" aria-hidden="true"></i>
                                <?php echo $evento['categoria']; ?></p>
                            <p>
                                <i class="fas fa-user-circle" aria-hidden="true"></i>
                                <?php echo $evento['invitado']; ?></p>
                            </p>
                         </div>
                      <?php  } // fin foreach lista_eventos  ?>
                    <?php } ?>  
                                  
           
 
           
 
        </div>
 
        <?php 
            $conn->close();
        ?>
 
    </section>
 
<?php include_once 'includes/templates/footer.php'; ?>