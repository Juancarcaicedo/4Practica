<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
</html>
<body>
    <h1>Login Usuarios</h1>
    <hr>
    <form action="checklogin.php" method="post">
        <div>
            <div>
                <label>Usuario</label>
                <input name="username" type="text" id="username" required><br>
                <label>Contraseña</label>
                <input name="password" type="password" id="password" required><br>
            </div>
        </div>
        <input type="submit" value="ingresar">
    </form>
    <hr>
    <footer> derechos reservados </footer>
</body>