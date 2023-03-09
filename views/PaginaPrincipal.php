<!DOCTYPE html>
 <html>

 <head> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta charset="UTF-8" >
    <link rel="stylesheet" href="../views/PaginaPrincipalstyle/style.css">
    <script src="https://kit.fontawesome.com/8888d57f5b.js" crossorigin="anonymous"></script>
    <title>Página principal</title>

 </head>

<body>
    
<!-- <h1> Página Principal</h1> -->
<?php
	include_once __DIR__ . "../helpers/mensagem.php";

?>
<nav>
   
    <ul class="sub-menu">
        <a href="../controllers/UsuarioController.php?action=PaginaPrincipal">
            <li>Home</li>
        </a>
        <a href="#">
            <li>Cadastro</li>
        </a>
        <a href="#">
            <li>Formulários
            <ul >
                <li><a href="../controllers/UsuarioController.php?action=CarregarForm">Formulário IPAL</a></li>
                <li><a href="#">Relato de Perigo</a></li>
                <li><a href="#">APR Gravada</a></li>
                <li><a href="#">Check List Veículo</a></li>
                <li><a href="#">Check List EPI</a></li>
                <li><a href="#">Equipamentos</a></li>
                <li><a href="#">5RO</a></li>
                <li><a href="#">Foto Ponto</a></li>
                <li><a href="#">Ensaios</a></li>
                <li><a href="#">Consulta Equipe</a></li>
                <li><a href="#">Procedimentos</a></li>
                <li><a href="#">Combate Incêndio</a></li>
                <li><a href="#">Check List Extintor</a></li>
                <li><a href="#">Linha Viva</a></li>
                <li><a href="#">Inspeção Predial</a></li>
                <li><a href="#">Empilhadeira</a></li>
                <li><a href="#">Empilhadeira Içamento</a></li>
                <li><a href="#">Legislação</a></li>
            </ul>

            </li>
        </a>
        <a href="#">
            <li>Inspeção</li>
        </a>
        <a href="#">
            <li>Preleção</li>
        </a>
        <a href="#">
            <li>Colaborador</li>
        </a>
        <a href="#">
            <li>TG/TF</li>
        </a>
        <a href="#">
            <li>Frota</li>
        </a>
        <a href="#">
            <li>Power BI</li>
        </a>
        <a href="#">
            <li>Relatório</li>
        </a>
        

    </ul>


    
    <ul>
            <?php 
            if(isset($data['usuario']))
            $user = $data['usuario'];
            ?>
                
            <li>
                <p> Bem-vindo</p> 
                <?= $user['user_name'] ?> 
            </li>
        </ul>
</nav>



<h1 align="center">Sistema de Gestão de Controle</h1>
<div class="div-btn">
<button class="btn"   id="btn" >
    Android
    <i class="fa-brands fa-android"></i>
</button>
<button class="btn"  id="btn" >
    Iphone
    <i class="fa-brands fa-apple"></i>
</button>
</div>



</body>

 </html>