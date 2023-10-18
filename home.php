<?php

    session_start();

    $id_user = $_SESSION["id_user"];

    if (!$id_user) {
        header("Location: index.php");
        return;
    }

    include("conexion.php");

    $motivos = array();

    $sql = "SELECT * FROM motivos";
    if ($resultado = $conn->query($sql)) {
        while($registro = $resultado -> fetch_assoc()){
            $motivos[] = $registro;
        }
    }

    $nombre = $_SESSION['nombre'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <?php include ('scripts.php'); ?>
    <link rel="stylesheet" href="css/home.css">
</head>
<body>

            <div class="banner">
        
                <h1>Centro Industrial<br>
                    del Diseño y la Manufactura
                </h1>
                <h3>Regional Santader</h3>

                <img src="img/cidm.jpg">

            </div>

            <div class="container">

                    <div class="row-dos">

                        <div class="col-uno">

                                <a id="logout" class="btn btn-danger float-end mt-2" href="logout.php">Logout</a>
                                <h1>Bienvenido <?php echo $nombre ?></h1>
                            
                                <form action="index.php" method="post">
                                    <input type="number" name="documento" id="documento" placeholder="Ingrese un Documento">
                                    <button type="button" id="btn-buscar" class="btn btn-dark">Buscar</button>
                                    <button type="button" id="btn-nueva-salida" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Nueva salida</button>

                                </form> 
                            
                        </div>

                        <div class="row-cuatro">
                            <div class="col-tres ">                       
                                <div id="resultado" class="resultado">
                            </div>
                        </div> 

                    </div>       
            </div>  

            
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">

                            <input type="hidden" id="user_id" value="<?php echo $id_user; ?>">

                            <select name="motivo" id="motivo" class="form-control">
                                <?php 
                                    if(count($motivos) > 0) {
                                        foreach ($motivos as $motivo) {
                                            echo "<option value ='".$motivo["id"]."'>".$motivo["nombre"]."</option>";
                                        }                                      
                                    }
                                ?>
                            </select>

                            <div class="input-group">
                                <input id="nHoras" type="number" class="form-control" placeholder="Horas del Permiso" aria-label="Numero de Horas" aria-describedby="horas">
                                <span class="input-group-text" id="horas">Horas</span>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button id="btnGuardar" type="button" class="btn btn-success">Guardar</button>
                        </div>
                    </div>
                
            </div>
            </div>


            <div class="footer">
                <p>ADSO NFlopi sena 2023 © Todos los derechos reservados</p>
            </div>

</body>
</html>