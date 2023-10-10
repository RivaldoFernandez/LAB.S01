<?php include 'template/header.php' ?>

<?php
include_once "model/conexion.php";
$sentencia = $bd->query("select * from crud_clinica.cita");
$persona = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

</style>
<main class="main">
    <div class="main-input">
        <form action="registrar.php" method="POST">
            <legend>Registrar cita</legend>

            <div class="input-contenedor">
                <label for="">Nombre:</label>
                <input class="input" type="text" name="txtNombre">
            </div>

            <div class="input-contenedor">
                <label for="">Apellido:</label>
                <input class="input" type="text" name="txtApellido">
            </div>


            <div class="input-contenedor">
                <label for="">DNI:</label>
                <input class="input" type="text" name="txtDni">
            </div>


            <div class="input-contenedor">
                <label for="">Teléfono:</label>
                <input class="input" type="text" name="txtTelefono">
            </div>


            <div class="input-contenedor">
                <label for="">Dirección:</label>
                <input class="input" type="text" name="txtDireccion">
            </div>


            <div class="input-contenedor">
                <label for="">Especialidad:</label>
                <select class="input" name="txtEspecialidad">
                    <option value="Medicina general">Medicina general</option>
                    <option value="Cardiología">Cardiología</option>
                    <option value="Ginecología">Ginecología</option>
                    <option value="Urología">Urología</option>
                    <option value="Pediatría">Pediatría</option>
                    <option value="Oftalmología">Oftalmología</option>
                    <option value="Odontología">Odontología</option>
                    <option value="Psicología">Psicología</option>
                    <option value="Neurología">Neurología</option>
                    <option value="Neumología">Neumología</option>
                </select>
            </div>


            <div class="input-contenedor">
                <label for="">Horario:</label>
                <select class="input" name="txtHorario">
                    <option value="8:00 - 8:30">8:00 - 8:30</option>
                    <option value="8:30 - 9:00">8:30 - 9:00</option>
                    <option value="9:00 - 9:30">9:00 - 9:30</option>
                    <option value="9:30 - 10:00">9:30 - 10:00</option>
                    <option value="10:00 - 10:30">10:00 - 10:30</option>
                    <option value="10:30 - 11:00">10:30 - 11:00</option>
                    <option value="11:00 - 11:30">11:00 - 11:30</option>
                    <option value="11:30 - 12:00">11:30 - 12:00</option>
                    <option value="12:00 - 12:30">12:00 - 12:30</option>
                    <option value="12:30 - 13:00">12:30 - 13:00</option>
                </select>
            </div>


            <div class="input-contenedor">
                <label for="">Doctor:</label>
                <input class="input" type="text" name="txtDoctor">
            </div>

            <div class="submit">
                <button class="button-grande">Registrar</button>
            </div>

        </form>
    </div>

    <div class="registro">
        <table>
            <thead>
                <tr class="registro-fila">
                    <th class="registro-fila-1">Id</th>
                    <th class="registro-fila-2">Nombre</th>
                    <th class="registro-fila-3">Apellido</th>
                    <th class="registro-fila-4">DNI</th>
                    <th class="registro-fila-5">Teléfono</th>
                    <th class="registro-fila-6">Dirección</th>
                    <th class="registro-fila-7">Especialidad</th>
                    <th class="registro-fila-8">Horario</th>
                    <th class="registro-fila-9">Doctor</th>
                    <th class="registro-fila-10">Acciones</th>
                </tr>


            </thead>
            <tbody>
                <?php
                foreach ($persona as $dato) {
                ?>

                    <tr class="registro-fila">
                        <td class=registro-fila-1><?php echo $dato->id; ?></td>
                        <td class=registro-fila-2><?php echo $dato->nombre; ?></td>
                        <td class=registro-fila-3><?php echo $dato->apellido; ?></td>
                        <td class=registro-fila-4><?php echo $dato->dni; ?></td>
                        <td class=registro-fila-5><?php echo $dato->telefono; ?></td>
                        <td class=registro-fila-6><?php echo $dato->direccion; ?></td>
                        <td class=registro-fila-7><?php echo $dato->especialidad; ?></td>
                        <td class=registro-fila-8><?php echo $dato->horario; ?></td>
                        <td class=registro-fila-9><?php echo $dato->doctor; ?></td>
                        <td class=registro-fila-10>
                            <a class="actualizar-color" href="actualizar.php?codigo=<?php echo $dato->id; ?>"><span class="material-symbols-outlined">edit</span></a>
                            <a class="eliminar-color" onclick="return confirm('Estas seguro de eliminar?');" href="eliminar.php?codigo=<?php echo $dato->id; ?>"><span class="material-symbols-outlined">delete</span></a>
                        </td>

                    </tr>

                <?php
                }
                ?>
                </tr>
            </tbody>

        </table>
    </div>
</main>


<?php include 'template/footer.php' ?>