<form action="ej2_login.php" method="post">
    <label>Usuario:</label>
    <input type="text" name="usuario"><br><br>
    
    <label>Contraseña:</label>
    <input type="password" name="password"><br><br>
    
    <button type="submit">Ingresar</button>
</form>

<?php
if (isset($_POST['usuario']) && isset($_POST['password'])) {
    $user = $_POST['usuario'];
    $pass = $_POST['password'];

    if ($user == "admin" && $pass == "1234") {
        echo "<h3 style='color: green;'>Acceso concedido</h3>";
    } else {
        echo "<h3 style='color: red;'>Datos incorrectos</h3>";
    }
}
?>
