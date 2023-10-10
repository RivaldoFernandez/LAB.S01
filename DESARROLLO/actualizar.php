<?php include 'template/header.php' ?>

<?php
    if(!isset($_GET['codigo'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    include_once 'model/conexion.php';
    $codigo = $_GET['codigo'];

    $sentencia = $bd->prepare("select * from crud_clinica.cita where id = ?;");
    $sentencia->execute([$codigo]);
    $persona = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($persona);
?>

<main class="main">
    <div class="main-input centrar">
        <form action="actualizarProceso.php" method="POST" class="centrar">
            <legend>Actualizar cita</legend>

            <div class="input-contenedor">
                <label for="">Nombre:</label>
                <input class="input" type="text" name="txtNombre" value="<?php echo $persona->nombre; ?>">
            </div>
            
            <div class="input-contenedor">
                <label for="">Apellido:</label>
                <input class="input" type="text" name="txtApellido" value="<?php echo $persona->apellido; ?>">
            </div>
            

            <div class="input-contenedor">
                <label for="">DNI:</label>
                <input class="input" type="text" name="txtDni" value="<?php echo $persona->dni; ?>"> 
            </div>
            

            <div class="input-contenedor">
                <label for="">Teléfono:</label>
                <input class="input" type="text" name="txtTelefono" value="<?php echo $persona->telefono; ?>">
            </div>
            

            <div class="input-contenedor">
                <label for="">Dirección:</label>
                <input class="input" type="text" name="txtDireccion" value="<?php echo $persona->direccion; ?>">
            </div>
            

            <div class="input-contenedor">
                <label for="">Especialidad:</label>
                <select class="input"  name="txtEspecialidad">
                    <option value="Medicina general" <?php if ($persona->especialidad == "Medicina general") echo "selected"; ?>>Medicina general</option>
                    <option value="Cardiología" <?php if ($persona->especialidad == "Cardiología") echo "selected"; ?>>Cardiología</option>
                    <option value="Ginecología" <?php if ($persona->especialidad == "Ginecología") echo "selected"; ?>>Ginecología</option>
                    <option value="Urología" <?php if ($persona->especialidad == "Urología") echo "selected"; ?>>Urología</option>
                    <option value="Pediatría" <?php if ($persona->especialidad == "Pediatría") echo "selected"; ?>>Pediatría</option>
                    <option value="Oftalmología" <?php if ($persona->especialidad == "Oftalmología") echo "selected"; ?>>Oftalmología</option>
                    <option value="Odontología" <?php if ($persona->especialidad == "Odontología") echo "selected"; ?>>Odontología</option>
                    <option value="Psicología" <?php if ($persona->especialidad == "Psicología") echo "selected"; ?>>Psicología</option>
                    <option value="Neurología" <?php if ($persona->especialidad == "Neurología") echo "selected"; ?>>Neurología</option>
                    <option value="Neumología" <?php if ($persona->especialidad == "Neumología") echo "selected"; ?>>Neumología</option>
                </select>
            </div>
            

            <div class="input-contenedor">
                <label for="">Horario:</label>
                <select class="input" name="txtHorario" value="<?php echo $persona->horario; ?>">
                    <option value="8:00 - 8:30" <?php if ($persona->horario == "8:00 - 8:30") echo "selected"; ?>>8:00 - 8:30</option>
                    <option value="8:30 - 9:00" <?php if ($persona->horario == "8:30 - 9:00") echo "selected"; ?>>8:30 - 9:00</option>
                    <option value="9:00 - 9:30" <?php if ($persona->horario == "9:00 - 9:30") echo "selected"; ?>>9:00 - 9:30</option>
                    <option value="9:30 - 10:00" <?php if ($persona->horario == "9:30 - 10:00") echo "selected"; ?>>9:30 - 10:00</option>
                    <option value="10:00 - 10:30" <?php if ($persona->horario == "10:00 - 10:30") echo "selected"; ?>>10:00 - 10:30</option>
                    <option value="10:30 - 11:00" <?php if ($persona->horario == "10:30 - 11:0") echo "selected"; ?>>10:30 - 11:00</option>
                    <option value="11:00 - 11:30" <?php if ($persona->horario == "11:00 - 11:30") echo "selected"; ?>>11:00 - 11:30</option>
                    <option value="11:30 - 12:00" <?php if ($persona->horario == "11:30 - 12:00") echo "selected"; ?>>11:30 - 12:00</option>
                    <option value="12:00 - 12:30" <?php if ($persona->horario == "12:00 - 12:30") echo "selected"; ?>>12:00 - 12:30</option>
                    <option value="12:30 - 13:00" <?php if ($persona->horario == "12:30 - 13:00") echo "selected"; ?>>12:30 - 13:00</option>
                </select>
            </div>
            

            <div class="input-contenedor">
                <label for="">Doctor:</label>
                <input class="input" type="text" name="txtDoctor" value="<?php echo $persona->doctor; ?>">
            </div>
            
            <div class="submit">
                <input type="hidden" name="codigo" value="<?php echo $persona->id; ?>">
                <button class="button-grande" type="submit">Actualizar</button>
            </div>

            
        </form>
    </div>
</main>

<?php include 'template/footer.php' ?>