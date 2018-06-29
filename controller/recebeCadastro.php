<?php
include_once "../model/usuario.php";
inserir_usuario($conn,$_POST);
print_r($_POST);
?>