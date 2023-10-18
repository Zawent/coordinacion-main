<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <?php include ('scripts.php'); ?>
    <link rel="stylesheet" href="css/styles.css">
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

                    <img src="img/logosena.png">

                </div>

                <div class="col-dos">
                    <form action="validar.php?contar=1" method="POST">

                        <h1>Bienvenido</h1>

                        <table align="center">
                            <tr>
                                <td>Nombre de Usuario<br>                          
                                    <input type="text" id="username" name="username" />
                                </td>
                            </tr>
                            <tr>
                                <td>Contraseña<br>
                                    <input type="password" id="password" name="password" />
                                </td>
                            </tr>
                            <tr>
                                <td class="" colspan="2" >
                                    <button class="btn btn-success align-middle">Iniciar Sesión</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>       
    </div>  

            <div class="footer">
                <p>ADSO NFlopi sena 2023 © Todos los derechos reservados</p>
            </div>

</body>
</html>