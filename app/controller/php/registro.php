<?php
include 'php/conexion.php';
require 'vendor/autoload.php';
require 'php/generacionCodigo.php';
use SendinBlue\Client\Configuration;
use SendinBlue\Client\Api\TransactionalEmailsApi;
use SendinBlue\Client\Model\SendSmtpEmail;

$API_KEY = 'bpgLm0STC9XG45kD';
$SENDER_MAIL = 'luccapastrana123@gmail.com';
$SENDER_NAME = 'ConectaUTU';
if
($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_usuario = $_POST["nombre_usuario"];
    $apellido_usuario = $_POST["apellido_usuario"];
    $email_usuario = $_POST["email_usuario"];
    $clave_usuario = $_POST["clave_usuario"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];
    $cedula_usuario = $_POST["cedula_usuario"];

    //Se válida si la longitud y cáracteres de la cédula son adecuadas
    if (!preg_match('/^[0-9]{8}$/', $cedula_usuario )) {
        die("La cédula es incorrecta");
    }
// Hasheo de contraseña
$hashed_password = password_hash($clave_usuario, PASSWORD_DEFAULT);
$sql = "INSERT INTO usuario
(nombre_usuario, apellido_usuario, email_usuario, clave_usuario, fecha_nacimiento, cedula_usuario)
values (?,?,?,?,?,?)";
$stmt = $conn ->prepare($sql);
$stmt->bind_param("ssssss", $nombre_usuario, $apellido_usuario, $email_usuario, $hashed_password, $fecha_nacimiento, $cedula_usuario);
if ($stmt->execute()) {
$user_id = $conn->insert_id;
$otp_code = generate_otp_code(6);
$expiration_time = date('Y-m-d H:i:s', time() + 900);

$update_sql = "UPDATE usuario SET codigo_verificacion=?, codigo_expira=? = ? WHERE id_usuario = ?";
$update_stmt = $conn->prepare($update_sql);
$update_stmt->bind_param("ssi", $otp_code, $expiration_time, $user_id);
$update_stmt->execute();
$update_stmt->close();
   header("Location: inicioSesion.php");
} else {
    echo "Error fatal" . $stmt->error;
}
$stmt->close();
$conn->close();
}
?>