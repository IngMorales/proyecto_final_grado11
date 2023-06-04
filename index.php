<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Formulario en PHP + MySQL</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.7.0.min.js"></script>
</head>

<body>
    <center>
        <h1>Mi Formulario en PHP + MySQL</h1>
    </center>

    <div class="container">
        <div class="card">
            <form action="registro.php" method="post">
                <div class="card-header bg-success text-white">
                    Registro de Personas
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">

                            <div class="form-group">
                                <label for="documento">Digite Documento</label>
                                <input type="number" class="form-control" id="documento" name="documento" placeholder="Digite documento" required>
                            </div>
                            <div class="form-group">
                                <label for="nombres">Digite Nombres</label>
                                <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Digite nombres" required>
                            </div>
                            <div class="form-group">
                                <label for="apellidos">Digite Apellidos</label>
                                <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Digite apellidos" required>
                            </div>
                            <div class="form-group">
                                <label for="nacimiento">Fecha Nacimiento</label>
                                <input type="date" class="form-control" id="nacimiento" name="nacimiento" required>
                            </div>
                            <div class="form-group">
                                <label for="genero">Seleccione su género</label>
                                <br>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="masculino" name="genero" value="masculino">
                                    <label class="form-check-label" for="masculino">MASCULINO</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="femenino" name="genero" value="femenino">
                                    <label class="form-check-label" for="femenino">FEMENINO</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="otro" name="genero" value="otro">
                                    <label class="form-check-label" for="otro">OTRO</label>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="telefono">Digite Teléfono</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Digite telefono" required>
                            </div>
                            <div class="form-group">
                                <label for="correo">Digite Correo</label>
                                <input type="email" class="form-control" id="correo" name="correo" placeholder="Digite correo" required>
                            </div>
                            <div class="form-group">
                                <label for="profesion">Seleccione Profesión</label>
                                <br>
                                <select class="form-control" id="profesion" name="profesion">
                                    <option value="arquitecto">Arquitecto</option>
                                    <option value="doctor">Doctor</option>
                                    <option value="ingeniero">Ingeniero</option>
                                    <option value="abogado">Abogado</option>
                                    <option value="profesor">Profesor</option>
                                    <option value="diseñador">Diseñador</option>
                                    <option value="contador">Contador</option>
                                    <option value="programador">Programador</option>
                                    <option value="chef">Chef</option>
                                    <option value="periodista">Periodista</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="actividad">Escriba su actividad</label>
                                <textarea class="form-control" id="actividad" name="actividad"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="estado">Seleccione Estado</label>
                                <br>
                                <select class="form-control" id="estado" name="estado">
                                    <option value="activo">ACTIVO</option>
                                    <option value="inactivo">INACTIVO</option>
                                </select>
                            </div>

                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </div>

            </form>
        </div>
    </div>


</body>

</html>