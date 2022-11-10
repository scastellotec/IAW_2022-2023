<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Nuevo usuario</h1>

    <form action="addUsuario.php" method="post" enctype="multipart/form-data">
    <div>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre">
    </div>
    <div>
        <label for="pass">Contraseña:</label>
        <input type="password" id="pass" name="pass">
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
    </div>
    <div>
        <label for="foto">Foto:</label>
        <input type="file" id="foto" name="fileToUpload">
    </div>

    <input type="submit"/>
    </form>

</body>
</html>