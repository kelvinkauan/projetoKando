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
    <input type="number" name="nos" id="idOs" required >

    <label>Empresa</label>
    <input type="text" name="empresa" id="idEmpresa" required>

    <label >Diretoria</label>
    <input type="text" name="diretoria" id="idDiretoria" required>

    <br>
    <br>

    <label>Data</label>
    <input type="date" name="data_form" id="idData" required>
    
    <label >Hora</label>
    <input type="time" name="hora" id="idHora" required>

    <label>Atividade</label>
    <input type="text" name="atividade" id="idAtividade" required>

    <br>
    <br>

    <label>Endereço</label>
    <input type="text" name="endereco" id="idEndereco" required>
    
    <label>Nº de Empregados</label>
    <input type="number" name="empregados" id="IdNempregados" required>
    
    <label>Bairro</label>
    <input type="text" name="bairro" id="idBairro" required>
    
    <br>
    <br>

    <label>Cidade</label>
    <input type="text" name="cidade" id="idCidade" required >
    
    <label>Inspetor</label>
    <input type="text" name="inspetor" id="idInspetor" required>
    
    <label> Placa do Veículo</label>
    <input type="text" name="placa" id="idPlaca" required>

    <br>
    <br>

    <label>Tipo de contrato </label>
    <input type="text" name="contrato" id="idContrato" required>

    <label> Gerência</label>
    <input type="text" name="gerencia" id="idGerencia" required>
    
    <label >Repsonsável pelo Serviço</label>
    <input type="text" name="responsavel" id="idResponsavel" required>

    <label>Departamento</label>
    <input type="text" name="departamento" id="idDepartamento" required>
    </div>

    <button type="submit" value="proximo"> próximo </button>
    </form>


    
</body>


</html>
