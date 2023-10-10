<?php
    //print_r($_POST);
    if(!isset($_POST['codigo'])){
        header('Location: index.php?mensaje=error');
    }

    include 'model/conexion.php';

    $codigo = $_POST['codigo'];
    $nombre = $_POST['txtNombre'];
    $apellido = $_POST['txtApellido'];
    $dni = $_POST['txtDni'];
    $telefono = $_POST['txtTelefono'];
    $direccion = $_POST['txtDireccion'];
    $especialidad = $_POST['txtEspecialidad'];
    $horario = $_POST['txtHorario'];
    $doctor = $_POST['txtDoctor'];

    $sentencia = $bd->prepare("UPDATE crud_clinica.cita SET nombre = ?, apellido = ?, dni= ?, telefono = ?, direccion = ?, 
                                especialidad = ?, horario = ?, doctor = ? WHERE id = ?;");
    $resultado = $sentencia->execute([$nombre, $apellido, $dni, $telefono, $direccion, $especialidad, $horario, $doctor, $codigo]);
    
    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=editado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }