<?php
//print_r($_POST);
if (empty($_POST["txtNombre"]) || empty($_POST["txtApellido"]) || empty($_POST["txtDni"]) || 
    empty($_POST["txtTelefono"]) || empty($_POST["txtDireccion"]) || empty($_POST["txtEspecialidad"]) 
    || empty($_POST["txtHorario"]) || empty($_POST["txtDoctor"])) {
    header('Location: index.php?mensaje=falta');
    exit();
}

include_once 'model/conexion.php';

$nombre = $_POST["txtNombre"];
$apellido = $_POST["txtApellido"];
$dni= $_POST["txtDni"];
$telefono = $_POST["txtTelefono"];
$direccion = $_POST["txtDireccion"];
$especialidad = $_POST["txtEspecialidad"];
$horario = $_POST["txtHorario"];
$doctor = $_POST["txtDoctor"];

$sentencia = $bd->prepare("INSERT INTO crud_clinica.cita(nombre,apellido,dni,telefono,direccion,especialidad,horario,doctor) VALUES (?,?,?,?,?,?,?,?);");
$resultado = $sentencia->execute([$nombre, $apellido, $dni, $telefono, $direccion, $especialidad, $horario, $doctor]);

if ($resultado === TRUE) {
    header('Location: index.php?mensaje=registrado');
    exit();
} else {
    header('Location: index.php?mensaje=error');
    exit();
}