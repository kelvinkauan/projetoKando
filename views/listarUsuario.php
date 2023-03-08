<!DOCTYPE html>

<html>
<head>
<title>Listar Usuarios</title>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta http-equiv="Content-Type" content="text/html; charset=utf8">

</head>
<?php
	include_once __DIR__ . "/helpers/mensagem.php";

?>

<body>
    <h1>Usuarios</h1>  
    <ul>
        <?php foreach($data['usuario'] as $us): ?>

            <li>
                <?= $us['idUsuario'] ?> -
                <?= $us['user_name'] ?> -
                <?= $us['email'] ?> -
                <?= $us['senha'] ?> -
                
            </li>
        <?php endforeach; ?>
    </ul>

    




</body>

</html>
