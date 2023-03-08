<!DOCTYPE html>
<html> 
<head>
<meta charset="UTF-8" >
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<title>Inspeção</title>
</head>

<body>
<h2> Nova Inspeção </h2>
<form action="">    
    <div class="inspec">
        <p>informações gerais</p>
    <label>Nº da O.S:</label>
    <input type="text" name="NOS" id="idOs" >
    <br>
    <label>Empresa</label>
    <input type="text" name="empresa" id="idEmpresa">
    <br>
    <label >Diretoria</label>
    <input type="text" name="diretoria" id="idDiretoria" >
    <br>
    <label>Data</label>
    <input type="date" name="data" id="idData">
    <br>
    <label >Hora</label>
    <input type="time" name="hora" id="idHora">
    <br>
    <label>Atividade</label>
    <input type="text" name="atividade" id="idAtividade">
    <br>
    <label>Endereço</label>
    <input type="text" name="endereco" id="idEndereco">
    <br>
    <label>Nº de Empregados</label>
    <input type="text" name="NEpregados" id="IdNempregados">
    <br>
    <label>Bairro</label>
    <input type="text" name="bairro" id="idBairro">
    <br>
    <label>Cidade</label>
    <input type="text" name="cidade" id="idCidade">
    <br>
    <label>Inspetor</label>
    <input type="text" name="inspetor" id="idInspetor">
    <br>
    <label> Placa do Veículo</label>
    <input type="text" name="placa" id="idPlaca">
    <br>
    <label>Tipo de contrato </label>
    <input type="text" name="contrato" id="idContrato">
    <br>
    <label> Gerência</label>
    <input type="text" name="gerencia" id="idGerencia">
    <br>
    <label >Repsonsável pelo Serviço</label>
    <input type="text" name="responsavel" id="idResponsavel">
    <br>
    <label>Departamento</label>
    <input type="text" name="departamento" id="idDepartamento">
    </div>
    <div>    

    <p align="center"> Áreas / Atuações</p>
   
   <table class="tbl-isnpec" align="center" border="1" cellspacing="10">
    <thead>
        <tr>
            <th>I-1</th>
            <th>Cinco Regras de Ouro</th>
            <th>Cumpre</th>
            <th>NA</th>
            <th>Observação</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                1.1
            </td>
            <td>
                Desligar a(s) fonte(s) de tensão
            </td>
            <td>
                <input type="radio" name="sim" id="idSim" value="Sim">
                         <label>Sim</label>
                <input type="radio" name="nao" id="idNao" value="Não">
                         <label>Não</label>
            </td>
            <td>
                <input type="text">
            </td>
            <td>
                <input type="text">
            </td>
        </tr>
        <tr>
            <td>
                1.2
            </td>
            <td>
                Impedimento da reenergização (bloqueio)
            </td>
            <td>
                <input type="radio" name="sim" id="idSim" value="Sim">
                         <label>Sim</label>
                <input type="radio" name="nao" id="idNao" value="Não">
                         <label>Não</label>
            </td>
            <td> 
                <input type="text">
            </td>
            <td>
                <input type="text">
            </td>
        </tr>
        <tr>
            <td>
                1.3
            </td>
            <td>
                Constatar a ausência de tensão</td>
            <td>
                <input type="radio" name="sim" id="idSim" value="Sim">
                         <label>Sim</label>
                <input type="radio" name="nao" id="idNao" value="Não">
                         <label>Não</label>
            </td>
            <td> 
                <input type="text">
            </td>
            <td>
                <input type="text">
            </td>
        </tr>
        <tr>
            <td>
                1.4
            </td>
            <td>
                Aterrar o sistema elétrico e curtocircuitar
             </td>
            <td>
                <input type="radio" name="sim" id="idSim" value="Sim">
                         <label>Sim</label>
                <input type="radio" name="nao" id="idNao" value="Não">
                         <label>Não</label>
            </td>
            <td> 
                <input type="text">
            </td>
            <td>
                <input type="text">
            </td>
        </tr>
        <tr>
            <td>
                1.5
            </td>
            <td>
                Sinalizar a zona de trabalho
            </td>
            <td>
                <input type="radio" name="sim" id="idSim" value="Sim">
                         <label>Sim</label>
                <input type="radio" name="nao" id="idNao" value="Não">
                         <label>Não</label>
            </td>
            <td> 
                <input type="text">
            </td>
            <td>
                <input type="text">
            </td>
        </tr>
    </tbody>
    </table>
<br>
    <table  class="tbl-isnpec" align="center" border="1" cellspacing="10">
        <thead>
            <tr>
                <th>I-2</th>
                <th>Autorização para ingresso em circuitos</th>
                <th>Cumpre</th>
                <th>NA</th>
                <th>Observação</th>
            </tr>
        </thead>
        <tbody>
            
        <tr>
            <td>
                2.1
            </td>
            <td>
                Existe cartão de liberação de circuitos (SE)        
            </td>
            <td>
                <input type="radio" name="sim" id="idSim" value="Sim">
                         <label>Sim</label>
                <input type="radio" name="nao" id="idNao" value="Não">
                         <label>Não</label>
            </td>
            <td> 
                <input type="text">
            </td>
            <td>
                <input type="text">
            </td>
        </tr>
        <tr>
            <td>
                2.2
            </td>
            <td>
                 Possui cartão de segurança pessoal (SE)
            </td>
            <td>
                <input type="radio" name="sim" id="idSim" value="Sim">
                         <label>Sim</label>
                <input type="radio" name="nao" id="idNao" value="Não">
                         <label>Não</label>
            </td>
            <td> 
                <input type="text">
            </td>
            <td>
                <input type="text">
            </td>
        </tr>
        <tr>
            <td>
                2.3
            </td>
            <td>
                Possui número da chave a ser manobrada,<br> fornecido pelo centro de operação
            </td>
            <td>
                <input type="radio" name="sim" id="idSim" value="Sim">
                         <label>Sim</label>
                <input type="radio" name="nao" id="idNao" value="Não">
                         <label>Não</label>
            </td>
            <td> 
                <input type="text">
            </td>
            <td>
                <input type="text">
            </td>
        </tr>
        </tbody>
    </table>
<br>
        <table class="tbl-isnpec" align="center" border="1" cellspacing="10">
            <thead>
            <tr>
                <th>I-3</th>
                <th>Autorização para ingresso em circuitos</th>
                <th>Cumpre</th>
                <th>NA</th>
                <th>Observação</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                 <td>
                    3.1
                 </td>
                 <td>
                     Está com a ordem de trabalho
                 </td>
                 <td>
                     <input type="radio" name="sim" id="idSim" value="Sim">
                         <label>Sim</label>
                     <input type="radio" name="nao" id="idNao" value="Não">
                         <label>Não</label>
                 </td>
                <td> 
                    <input type="text">
                </td>
                <td>
                    <input type="text">
                </td>
            </tr>
            <tr>
                 <td>
                    3.2
                 </td>
                 <td>
                    O(s) nome(s) do(s) empregado(s) está(ão) <br> na ordem de trabalho
                 </td>
                 <td>
                     <input type="radio" name="sim" id="idSim" value="Sim">
                         <label>Sim</label>
                     <input type="radio" name="nao" id="idNao" value="Não">
                         <label>Não</label>
                 </td>
                <td> 
                    <input type="text">
                </td>
                <td>
                    <input type="text">
                </td>
            </tr>
            <tr>
                 <td>
                    3.3
                 </td>
                 <td>
                    Cumpre com o procedimento de trabalho e <br> as normas técnicas     
                </td>
                 <td>
                     <input type="radio" name="sim" id="idSim" value="Sim">
                         <label>Sim</label>
                     <input type="radio" name="nao" id="idNao" value="Não">
                         <label>Não</label>
                 </td>
                <td> 
                    <input type="text">
                </td>
                <td>
                    <input type="text">
                </td>
            </tr>
            <tr>
                 <td>
                    3.4
                 </td>
                 <td>
                    Possui procedimento vigente e disponível <br> para a atividade executada.  
                </td>
                 <td>
                     <input type="radio" name="sim" id="idSim" value="Sim">
                         <label>Sim</label>
                     <input type="radio" name="nao" id="idNao" value="Não">
                         <label>Não</label>
                 </td>
                <td> 
                    <input type="text">
                </td>
                <td>
                    <input type="text">
                </td>
            </tr>

            <tr>
                 <td>
                    3.5
                 </td>
                 <td>
                    Dispõe de unifilares ou croquis das instalações.
                </td>
                 <td>
                     <input type="radio" name="sim" id="idSim" value="Sim">
                         <label>Sim</label>
                     <input type="radio" name="nao" id="idNao" value="Não">
                         <label>Não</label>
                 </td>
                <td> 
                    <input type="text">
                </td>
                <td>
                    <input type="text">
                </td>
            </tr>
            </tbody>
        </table>
        <br> 
        <table class="tbl-isnpec" align="center" border="1" cellspacing="10">
            <thead>
            <tr>
                <th>I-4</th>
                <th>Equipamentos de Proteção Individual</th>
                <th>Cumpre</th>
                <th>NA</th>
                <th>Observação</th>
            </tr>
            </thead>

            <tbody>
            <tr>
                 <td>
                    4.1
                 </td>
                 <td>
                    Utiliza capacete de segurança com carneira e jugular <br> em bom estado de conservação.
                </td>
                 <td>
                     <input type="radio" name="sim" id="idSim" value="Sim">
                         <label>Sim</label>
                     <input type="radio" name="nao" id="idNao" value="Não">
                         <label>Não</label>
                 </td>
                <td> 
                    <input type="text">
                </td>
                <td>
                    <input type="text">
                </td>
            </tr>
            <tr>
                 <td>
                    4.2
                 </td>
                 <td>
                    Utiliza calçado de segurança em bom <br> estado de conservação.
                </td>
                 <td>
                     <input type="radio" name="sim" id="idSim" value="Sim">
                         <label>Sim</label>
                     <input type="radio" name="nao" id="idNao" value="Não">
                         <label>Não</label>
                 </td>
                <td> 
                    <input type="text">
                </td>
                <td>
                    <input type="text">
                </td>
            </tr>
            <tr>
                 <td>
                    4.3
                 </td>
                 <td>
                    Utiliza luvas de (vaqueta, pelica, etc) de <br> acordo com a atividade, em bom estado de conservação.
                </td>
                 <td>
                     <input type="radio" name="sim" id="idSim" value="Sim">
                         <label>Sim</label>
                     <input type="radio" name="nao" id="idNao" value="Não">
                         <label>Não</label>
                 </td>
                <td> 
                    <input type="text">
                </td>
                <td>
                    <input type="text">
                </td>
            </tr>
            <tr>
                 <td>
                    4.4
                 </td>
                 <td>
                    Utiliza luvas isolantes (BT/AT) conforme atividade,<br> em bom estado de conservação.                </td>
                 <td>
                     <input type="radio" name="sim" id="idSim" value="Sim">
                         <label>Sim</label>
                     <input type="radio" name="nao" id="idNao" value="Não">
                         <label>Não</label>
                 </td>
                <td> 
                    <input type="text">
                </td>
                <td>
                    <input type="text">
                </td>
            </tr>
            <tr>
                 <td>
                    4.5
                 </td>
                 <td>
                    Utiliza protetor facial em bom estado de conservação.
                 <td>
                     <input type="radio" name="sim" id="idSim" value="Sim">
                         <label>Sim</label>
                     <input type="radio" name="nao" id="idNao" value="Não">
                         <label>Não</label>
                 </td>
                <td> 
                    <input type="text">
                </td>
                <td>
                    <input type="text">
                </td>
            </tr>
            <tr>
                 <td>
                    4.5
                 </td>
                 <td>
                     Utiliza sistema de proteção contra quedas (cinturão e trava quedas completo).
                 <td>
                     <input type="radio" name="sim" id="idSim" value="Sim">
                         <label>Sim</label>
                     <input type="radio" name="nao" id="idNao" value="Não">
                         <label>Não</label>
                 </td>
                <td> 
                    <input type="text">
                </td>
                <td>
                    <input type="text">
                </td>
            </tr>
            </tbody>

        </table>

    </div>

    </form>


</body>


</html>