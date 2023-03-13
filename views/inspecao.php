<!DOCTYPE html>
<html> 
<head>
<meta charset="UTF-8" >
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../views/Styleforms/ispecao.css" >
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<title>Formulário</title>


</head>


<body>
<nav>
      <div id=" title">
         <h1> Formulário IPAL </h1>
      </div>
      <ul>
         <a class="a" href="./UsuarioController.php?action=PaginaPrincipal">
            <li>Home</li>
         </a>
      </ul>

   </nav>


    <div class="container">
   <div class="form">
    <form action="./formInspecController.php?action=carregarForm" method="POST" >   
    <div class="form-header">
    <h2 > Nova Inspeção </h2> 
    </div>
    <p>Informações gerais</p>
    <div class="input-group">

    <div class="input-box">
     <label>Nº da O.S:</label>
     <input type="number" name="nos"  id="idOs" required >
     </div>
    
     <div class="input-box">
    <label>Empresa</label>
    <input type="text" name="empresa"  id="idEmpresa" required>
    </div>

    <div class="input-box">
    <label >Diretoria</label>
    <input type="text" name="diretoria"  id="idDiretoria" required>
    </div>

    <div class="input-box">
    <label>Data</label>
    <input type="date" name="data_form"  id="idData" required>
    </div>

    <div class="input-box">
    <label >Hora</label>
    <input type="time" name="hora"  id="idHora" required>
    </div>

    <div class="input-box">
    <label>Atividade</label>
    <input type="text" name="atividade"  id="idAtividade" required>
    </div>

    <div class="input-box">
    <label>Endereço</label>
    <input type="text" name="endereco"  id="idEndereco" required>
    </div>

    <div class="input-box">
    <label>Nº de Empregados</label>
    <input type="number" name="empregados"  id="IdNempregados" required>
    </div>
    
    <div class="input-box">
    <label>Bairro</label>
    <input type="text" name="bairro"  id="idBairro" required>
    </div>

    <div class="input-box">
    <label>Cidade</label>
    <input type="text" name="cidade"  id="idCidade" required >
    </div>
    
    <div class="input-box">
    <label>Inspetor</label>
    <input type="text" name="inspetor"  id="idInspetor" required>
    </div>

    <div class="input-box">
    <label> Placa do Veículo</label>
    <input type="text" name="placa"  id="idPlaca" required>
    </div>

    <div class="input-box">
    <label>Tipo de contrato </label>
    <input type="text" name="contrato"   id="idContrato" required>
    </div>

    <div class="input-box">
    <label> Gerência</label>
    <input type="text" name="gerencia"  id="idGerencia" required>
    </div>

    <div class="input-box">
    <label >Repsonsável pelo Serviço</label>
    <input type="text" name="responsavel"  id="idResponsavel" required>
    </div>

    <div class="input-box">
    <label>Departamento</label>
    <input type="text" name="departamento"  id="idDepartamento" required>
    </div>

    <div class="next-button">
    <button><a class="btn" type="submit"  value="proximo"> Próximo </a></button>
    </div>

    </form>
    </div>
    </div>
    </div>
    
</body>


</html>
