<?php 
include("con_db.php");
if(isset($_POST['register'])){
   
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $fechareg = date('d/m/y');
        $consulta = "INSERT INTO datos(nombre, email, pass, fecha_reg) VALUES ('$name', '$email', '$pass', '$fechareg')";
        $resultado = mysqli_query($conex,$consulta); 
}
?>