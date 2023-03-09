<!DOCTYPE html>
<html> 
<head>
<meta charset="UTF-8" >
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<title>Formulário</title>
</head>

<body>
    <div>
<h2 align="center"> Nova Inspeção </h2>
    <form action="./formInspecController.php?action=carregarForm" method="POST">    
    <div class="inspec">
        <p>Informações gerais</p>
    <label>Nº da O.S:</label>
    <input type="number" name="nos" id="idOs" >

    <label>Empresa</label>
    <input type="text" name="empresa" id="idEmpresa">

    <label >Diretoria</label>
    <input type="text" name="diretoria" id="idDiretoria" >

    <br>
    <br>

    <label>Data</label>
    <input type="date" name="data_form" id="idData">
    
    <label >Hora</label>
    <input type="time" name="hora" id="idHora">

    <label>Atividade</label>
    <input type="text" name="atividade" id="idAtividade">

    <br>
    <br>

    <label>Endereço</label>
    <input type="text" name="endereco" id="idEndereco">
    
    <label>Nº de Empregados</label>
    <input type="number" name="empregados" id="IdNempregados">
    
    <label>Bairro</label>
    <input type="text" name="bairro" id="idBairro">
    
    <br>
    <br>

    <label>Cidade</label>
    <input type="text" name="cidade" id="idCidade">
    
    <label>Inspetor</label>
    <input type="text" name="inspetor" id="idInspetor">
    
    <label> Placa do Veículo</label>
    <input type="text" name="placa" id="idPlaca">

    <br>
    <br>

    <label>Tipo de contrato </label>
    <input type="text" name="contrato" id="idContrato">

    <label> Gerência</label>
    <input type="text" name="gerencia" id="idGerencia">
    
    <label >Repsonsável pelo Serviço</label>
    <input type="text" name="responsavel" id="idResponsavel">

    <label>Departamento</label>
    <input type="text" name="departamento" id="idDepartamento">
    </div>

    <button type="submit" value="proximo"> próximo </button>
    </form>


    
</body>


</html>
