<?php
$to='versatil.syma@gmail.com';
$subject='Cotización: Mensaje enviado desde la página web oficial';

$nombre= $_POST['nombre'];
$evento= $_POST['evento'];
$estado= $_POST['estado'];
$ciudad= $_POST['ciudad'];
$fecha= $_POST['fecha'];
$horas= $_POST['horas'];
$telefono= $_POST['telefono'];
$email= $_POST['email'];

if(mail($to, $subject,$email,$nombre,$telefono)){
echo "Email enviado con éxito";
}
else
{
echo "Error al enviar email";
}
?>