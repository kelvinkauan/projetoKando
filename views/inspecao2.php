<!DOCTYPE html>

<html>

<head>
<meta charset="UTF-8" >
<link rel="stylesheet" href="../views/Styleforms/inspecao2.css" >

<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
<title>Formulário</title>
<style>
    input:required:invalid {
  border-color: #c00000;
}
</style>
</head>


<body>
    
    <nav>
      <div id=" title">
         <h1> Relatório IPAL </h1>
      </div>
      <ul>
         <a class="a" href="./UsuarioController.php?action=PaginaPrincipal">
            <li>Home</li>
         </a>
      </ul>
   </nav>

    <div class="container">
    <table class="table " align="center" border="1" cellspacing="10"> 
        <thead class="table-light">
            <tr align="center">
                <td>
                    <h4> Áreas / Atuações </h4> </p>
                </td>

            </tr>
        </thead>
    </table>
    </div>

<!-- <form action="charts.php" method="post"> -->
   <div class="container">
   <table class="table table-hover" align="center" border="1" cellspacing="10">
    <thead class="table-light">
        <tr>
            <th>I-1</th>
            <th>Cinco Regras de Ouro</th>
            <th>Cumpre</th>
            <th>NA</th>
            <th>Observação</th>
        </tr>
    </thead>
    <tbody>
        <form action="../controllers/formInspecSecController.php?action=Salvar" method="post">
        <tr>
            <td>
                1.1
            </td>
            <td>
                Desligar a(s) fonte(s) de tensão 
            </td>
            <td>
            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                <input type="radio" class="btn-check" name="item[1][1][valor]" id="btncheck1" value="1" autocomplete="off" required>
                <label class="btn btn-outline-primary" for="btncheck1">Sim</label>

                <input type="radio" class="btn-check" name="item[1][1][valor]" id="btncheck2" value="2" autocomplete="off" required>
                <label class="btn btn-outline-primary" for="btncheck2">Não</label>

            </div>
               
            </td>
            <td>
                <input type="radio" class="btn-check" name="item[1][1][valor]" id="btncheck3" value="3" autocomplete="off" required>
                <label class="btn btn-outline-primary" for="btncheck3">NA</label>
            </td>
            <td>
                <textarea type="text" name="item[1][1][observacao]" id="idObs"> </textarea>
            </td>
            
                <input type="hidden" name="item[1][1][nome]" value="1.1">
            
        </tr>
        
        <tr>
            <td>
                1.2
            </td>
            <td>
                Impedimento da reenergização (bloqueio)
            </td>
            <td>
                
                <input type="radio" class="btn-check" name="item[1][2][valor]" id="btncheck4"  autocomplete="off" required value="1"  >
                         <label class="btn btn-outline-primary" for="btncheck4">Sim</label>
                         <input type="radio" class="btn-check" name="item[1][2][valor]" id="btncheck5" autocomplete="off" required value="2"  >
                         <label class="btn btn-outline-primary" for="btncheck5">Não</label>
            </td>
            <td>
            <input type="radio" class="btn-check" name="item[1][2][valor]" id="btncheck6" autocomplete="off" required value="3"  >
                         <label class="btn btn-outline-primary" for="btncheck6">NA</label>
            </td>
            <td>
                <textarea type="text" name="item[1][2][observacao]" id="idObs"> </textarea>
            </td>
            <input type="hidden" name="item[1][2][nome]" value="1.2">
        </tr>
        <tr>
            <td>
                1.3
            </td>
            <td>
                Constatar a ausência de tensão</td>
            <td>
            <input type="radio" class="btn-check" name="item[1][3][valor]" id="btncheck7"  autocomplete="off" required value="1"  >
                         <label class="btn btn-outline-primary" for="btncheck7">Sim</label>
                         <input type="radio" class="btn-check" name="item[1][3][valor]" id="btncheck8" autocomplete="off" required value="2"  >
                         <label class="btn btn-outline-primary" for="btncheck8">Não</label>
            </td>
            <td>
            <input type="radio" class="btn-check" name="item[1][3][valor]" id="btncheck9" autocomplete="off" required value="3"  >
                         <label class="btn btn-outline-primary" for="btncheck9">NA</label>
            </td>
            <td>
                <textarea type="text" name="item[1][3][observacao]" id="idObs"> </textarea>
            </td>
            <input type="hidden" name="item[1][3][nome]" value="1.3">
        </tr>
        <tr>
            <td>
                1.4
            </td>
            <td>
                Aterrar o sistema elétrico e curtocircuitar
             </td>
            <td>
            <input type="radio" class="btn-check" name="item[1][4][valor]" id="btncheck10" autocomplete="off" required value="1"  >
                         <label class="btn btn-outline-primary" for="btncheck10">Sim</label>
                         <input type="radio" class="btn-check" name="item[1][4][valor]" id="btncheck11" autocomplete="off" required value="2"  >
                         <label class="btn btn-outline-primary" for="btncheck11">Não</label>
            </td>
            <td>
            <input type="radio" class="btn-check" name="item[1][4][valor]" id="btncheck12" autocomplete="off" required value="3"  >
                         <label class="btn btn-outline-primary" for="btncheck12">NA</label>
            </td>
            <td>
                <textarea type="text" name="item[1][4][observacao]" id="idObs"> </textarea>
            </td>
            <input type="hidden" name="item[1][4][nome]" value="1.4">
        </tr>
        <tr>
            <td>
                1.5
            </td>
            <td>
                Sinalizar a zona de trabalho
            </td>
            <td>
            <input type="radio" class="btn-check" name="item[1][5][valor]" id="btncheck13"  autocomplete="off" required value="1"  >
                         <label class="btn btn-outline-primary" for="btncheck13">Sim</label>
                         <input type="radio" class="btn-check" name="item[1][5][valor]" id="btncheck14" autocomplete="off" required value="2"  >
                         <label class="btn btn-outline-primary" for="btncheck14">Não</label>
            </td>
            <td>
            <input type="radio" class="btn-check" name="item[1][5][valor]" id="btncheck15" autocomplete="off" required value="3"  >
                         <label class="btn btn-outline-primary" for="btncheck15">NA</label>
            </td>
            <td>
                <textarea type="text" name="item[1][5][observacao]" id="idObs"> </textarea>
            </td>
            <input type="hidden" name="item[1][5][nome]" value="1.5">
        </tr>
    </tbody>
    </table>
<br>
<table  class="table table-hover"align="center" border="1" cellspacing="10">
        <thead class="table-light">
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
            <input type="radio" class="btn-check" name="item[2][1][valor]" id="btncheck16" autocomplete="off" required value="1"  >
                         <label class="btn btn-outline-primary" for="btncheck16">Sim</label>
                         <input type="radio" class="btn-check" name="item[2][1][valor]" id="btncheck17" autocomplete="off" required value="2"  >
                         <label class="btn btn-outline-primary" for="btncheck17">Não</label>
            </td>
            <td>
            <input type="radio" class="btn-check" name="item[2][1][valor]" id="btncheck18" autocomplete="off" required value="3"  >
                         <label class="btn btn-outline-primary" for="btncheck18">NA</label>
            </td>
            <td>
                <textarea type="text" name="item[2][1][observacao]" id="idObs"> </textarea>
            </td>
            <input type="hidden" name="item[2][1][nome]" value="2.1">
        </tr>
        <tr>
            <td>
                2.2
            </td>
            <td>
                 Possui cartão de segurança pessoal (SE)
            </td>
            <td>
            <input type="radio" class="btn-check" name="item[2][2][valor]" id="btncheck19" autocomplete="off" required value="1"  >
                         <label class="btn btn-outline-primary" for="btncheck19">Sim</label>
                         <input type="radio" class="btn-check" name="item[2][2][valor]" id="btncheck20" autocomplete="off" required value="2"  >
                         <label class="btn btn-outline-primary" for="btncheck20">Não</label>
            </td>
            <td>
            <input type="radio" class="btn-check" name="item[2][2][valor]" id="btncheck21" autocomplete="off" required value="3"  >
                         <label class="btn btn-outline-primary" for="btncheck21">NA</label>
            </td>
            <td>
                <textarea type="text" name="item[2][2][observacao]" id="idObs"> </textarea>
            </td>
            <input type="hidden" name="item[2][2][nome]" value="2.2">
        </tr>
        <tr>
            <td>
                2.3
            </td>
            <td>
                Possui número da chave a ser manobrada,<br> fornecido pelo centro de operação
            </td>
            <td>
            <input type="radio" class="btn-check" name="item[2][3][valor]" id="btncheck22" autocomplete="off" required value="1"  >
                         <label class="btn btn-outline-primary" for="btncheck22">Sim</label>
                         <input type="radio" class="btn-check" name="item[2][3][valor]" id="btncheck23" autocomplete="off" required value="2"  >
                         <label class="btn btn-outline-primary" for="btncheck23">Não</label>
            </td>
            <td>
            <input type="radio" class="btn-check" name="item[2][3][valor]" id="btncheck24" autocomplete="off" required value="3"  >
                         <label class="btn btn-outline-primary" for="btncheck24">NA</label>
            </td>
            <td>
                <textarea type="text" name="item[2][3][observacao]" id="idObs"> </textarea>
            </td>
            <input type="hidden" name="item[2][3][nome]" value="2.3">
        </tr>
        </tbody>
    </table>
<br>
        <table class="table table-hover"align="center" border="1" cellspacing="10">
            <thead class="table-light">
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
                <input type="radio" class="btn-check" name="item[3][1][valor]" id="btncheck25" autocomplete="off" required value="1"  >
                         <label class="btn btn-outline-primary" for="btncheck25">Sim</label>
                         <input type="radio" class="btn-check" name="item[3][1][valor]" id="btncheck26" autocomplete="off" required value="2"  >
                         <label class="btn btn-outline-primary" for="btncheck26">Não</label>
            </td>
                 </td>
                <td>
                <input type="radio" class="btn-check" name="item[3][1][valor]" id="btncheck27" autocomplete="off" required value="3"  >
                         <label class="btn btn-outline-primary" for="btncheck27">NA</label>
            </td>
            <td>
                <textarea type="text" name="item[3][1][observacao]" id="idObs"> </textarea>
            </td>
                <input type="hidden" name="item[3][1][nome]" value="3.1">
            </tr>
            <tr>
                 <td>
                    3.2
                 </td>
                 <td>
                    O(s) nome(s) do(s) empregado(s) está(ão) <br> na ordem de trabalho
                 </td>
                <td>
                <input type="radio" class="btn-check" name="item[3][2][valor]" id="btncheck28" autocomplete="off" required value="1"  >
                         <label class="btn btn-outline-primary" for="btncheck28">Sim</label>
                         <input type="radio" class="btn-check" name="item[3][2][valor]" id="btncheck29" autocomplete="off" required value="2"  >
                         <label class="btn btn-outline-primary" for="btncheck29">Não</label>
            </td>
                 </td>
                <td>
                <input type="radio" class="btn-check" name="item[3][2][valor]" id="btncheck30" autocomplete="off" required value="3"  >
                         <label class="btn btn-outline-primary" for="btncheck30">NA</label>
            </td>
            <td>
                <textarea type="text" name="item[3][2][observacao]" id="idObs"> </textarea>
            </td>
                         <input type="hidden" name="item[3][2][nome]" value="3.2">
            </tr>
            <tr>
                 <td>
                    3.3
                 </td>
                 <td>
                    Cumpre com o procedimento de trabalho e <br> as normas técnicas     
                </td>
                <td>
                <input type="radio" class="btn-check" name="item[3][3][valor]" id="btncheck31" autocomplete="off" required value="1"  >
                         <label class="btn btn-outline-primary" for="btncheck31">Sim</label>
                         <input type="radio" class="btn-check" name="item[3][3][valor]" id="btncheck32" autocomplete="off" required value="2"  >
                         <label class="btn btn-outline-primary" for="btncheck32">Não</label>
            </td>
                 </td>
                <td>
                <input type="radio" class="btn-check" name="item[3][3][valor]" id="btncheck33" autocomplete="off" required value="3"  >
                         <label class="btn btn-outline-primary" for="btncheck33">NA</label>
            </td>
            <td>
                <textarea type="text" name="item[3][3][observacao]" id="idObs"> </textarea>
            </td>
                <input type="hidden" name="item[3][3][nome]" value="3.3">
            </tr>
            <tr>
                 <td>
                    3.4
                 </td>
                 <td>
                    Possui procedimento vigente e disponível <br> para a atividade executada.  
                </td>
                <td>
                <input type="radio" class="btn-check" name="item[3][4][valor]" id="btncheck34" autocomplete="off" required value="1"  >
                         <label class="btn btn-outline-primary" for="btncheck34">Sim</label>
                         <input type="radio" class="btn-check" name="item[3][4][valor]" id="btncheck35" autocomplete="off" required value="2"  >
                         <label class="btn btn-outline-primary" for="btncheck35">Não</label>
            </td>
                 </td>
                <td>
                <input type="radio" class="btn-check" name="item[3][4][valor]" id="btncheck36" autocomplete="off" required value="3"  >
                         <label class="btn btn-outline-primary" for="btncheck36">NA</label>
            </td>
            <td>
                <textarea type="text" name="item[3][4][observacao]" id="idObs"> </textarea>
            </td>
                    <input type="hidden" name="item[3][4][nome]" value="3.4">
            </tr>

            <tr>
                 <td>
                    3.5
                 </td>
                 <td>
                    Dispõe de unifilares ou croquis das instalações.
                </td>
                <td>
                <input type="radio" class="btn-check" name="item[3][5][valor]" id="btncheck37" autocomplete="off" required value="1"  >
                         <label class="btn btn-outline-primary" for="btncheck37">Sim</label>
                         <input type="radio" class="btn-check" name="item[3][5][valor]" id="btncheck38" autocomplete="off" required value="2"  >
                         <label class="btn btn-outline-primary" for="btncheck38">Não</label>
            </td>
                 </td>
                <td>
                <input type="radio" class="btn-check" name="item[3][5][valor]" id="btncheck39" autocomplete="off" required value="3"  >
                         <label class="btn btn-outline-primary" for="btncheck39">NA</label>
            </td>
            <td>
                <textarea type="text" name="item[3][5][observacao]" id="idObs"> </textarea>
            </td>
                <input type="hidden" name="item[3][5][nome]" value="3.5">
            </tr>
            </tbody>
        </table>
        <br> 
        <table class="table table-hover"align="center" border="1" cellspacing="10">
            <thead class="table-light">
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
                <input type="radio" class="btn-check" name="item[4][1][valor]" id="btncheck40" autocomplete="off" required value="1"  >
                         <label class="btn btn-outline-primary" for="btncheck40">Sim</label>
                         <input type="radio" class="btn-check" name="item[4][1][valor]" id="btncheck41" autocomplete="off" required value="2"  >
                         <label class="btn btn-outline-primary" for="btncheck41">Não</label>
            </td>
                 </td>
                <td>
                <input type="radio" class="btn-check" name="item[4][1][valor]" id="btncheck42" autocomplete="off" required value="3"  >
                         <label class="btn btn-outline-primary" for="btncheck42">NA</label>
            </td>
            <td>
                <textarea type="text" name="item[4][1][observacao]" id="idObs"> </textarea>
            </td>
            <input type="hidden" name="item[4][1][nome]" value="4.1">
            </tr>
            <tr>
                 <td>
                    4.2
                 </td>
                 <td>
                    Utiliza calçado de segurança em bom <br> estado de conservação.
                </td>
                <td>
                <input type="radio" class="btn-check" name="item[4][2][valor]" id="btncheck43" autocomplete="off" required value="1"  >
                         <label class="btn btn-outline-primary" for="btncheck43">Sim</label>
                         <input type="radio" class="btn-check" name="item[4][2][valor]" id="btncheck44" autocomplete="off" required value="2"  >
                         <label class="btn btn-outline-primary" for="btncheck44">Não</label>
            </td>
                 </td>
                <td>
                <input type="radio" class="btn-check" name="item[4][2][valor]" id="btncheck45" autocomplete="off" required value="3"  >
                         <label class="btn btn-outline-primary" for="btncheck45">NA</label>
            </td>
            <td>
                <textarea type="text" name="item[4][2][observacao]" id="idObs"> </textarea>
            </td>
            <input type="hidden" name="item[4][2][nome]" value="4.2">
            </tr>
            <tr>
                 <td>
                    4.3
                 </td>
                 <td>
                    Utiliza luvas de (vaqueta, pelica, etc) de <br> acordo com a atividade, em bom estado de conservação.
                </td>
                <td>
                <input type="radio" class="btn-check" name="item[4][3][valor]" id="btncheck46" autocomplete="off" required value="1"  >
                         <label class="btn btn-outline-primary" for="btncheck46">Sim</label>
                         <input type="radio" class="btn-check" name="item[4][3][valor]" id="btncheck47" autocomplete="off" required value="2"  >
                         <label class="btn btn-outline-primary" for="btncheck47">Não</label>
            </td>
                 </td>
                <td>
                <input type="radio" class="btn-check" name="item[4][3][valor]" id="btncheck48" autocomplete="off" required value="3"  >
                         <label class="btn btn-outline-primary" for="btncheck48">NA</label>            </td>
            <td>
                <textarea type="text" name="item[4][3][observacao]" id="idObs"> </textarea>
            </td>
            <input type="hidden" name="item[4][3][nome]" value="4.3">
            </tr>
            <tr>
                 <td>
                    4.4
                 </td>
                 <td>
                    Utiliza luvas isolantes (BT/AT) conforme atividade,<br> em bom estado de conservação.
                </td>
                <td>
                <input type="radio" class="btn-check" name="item[4][4][valor]" id="btncheck49" autocomplete="off" required value="1"  >
                         <label class="btn btn-outline-primary" for="btncheck49">Sim</label>
                         <input type="radio" class="btn-check" name="item[4][4][valor]" id="btncheck50" autocomplete="off" required value="2"  >
                         <label class="btn btn-outline-primary" for="btncheck50">Não</label>
            </td>
                 </td>
                <td>
                <input type="radio" class="btn-check" name="item[4][4][valor]" id="btncheck51" autocomplete="off" required value="3"  >
                         <label class="btn btn-outline-primary" for="btncheck51">NA</label> 
            </td>
            <td>
                <textarea type="text" name="item[4][4][observacao]" id="idObs"> </textarea>
            </td>
                <input type="hidden" name="item[4][4][nome]" value="4.4">
            </tr>
            <tr>
                 <td>
                    4.5
                 </td>
                 <td>
                    Utiliza protetor facial em bom estado de conservação.
                 </td>
                <td>
                <input type="radio" class="btn-check" name="item[4][5][valor]" id="btncheck52" autocomplete="off" required value="1"  >
                         <label class="btn btn-outline-primary" for="btncheck52">Sim</label>
                         <input type="radio" class="btn-check" name="item[4][5][valor]" id="btncheck53" autocomplete="off" required value="2"  >
                         <label class="btn btn-outline-primary" for="btncheck53">Não</label>
            </td>
                 </td>
                <td>
                <input type="radio" class="btn-check" name="item[4][5][valor]" id="btncheck54" autocomplete="off" required value="3"  >
                         <label class="btn btn-outline-primary" for="btncheck54">NA</label> 
            </td>
            <td>
                <textarea type="text" name="item[4][5][observacao]" id="idObs"> </textarea>
            </td>
                <input type="hidden" name="item[4][5][nome]" value="4.5">
            </tr>
            <tr>
                 <td>
                    4.6
                 </td>
                 <td>
                    Utiliza sistema de proteção contra quedas <br> (cinturão e trava quedas completo).
                 </td>
                <td>
                <input type="radio" class="btn-check" name="item[4][6][valor]" id="btncheck55" autocomplete="off" required value="1"  >
                         <label class="btn btn-outline-primary" for="btncheck55">Sim</label>
                         <input type="radio" class="btn-check" name="item[4][6][valor]" id="btncheck56" autocomplete="off" required value="2"  >
                         <label class="btn btn-outline-primary" for="btncheck56">Não</label>
            </td>
                 </td>
                <td>
                <input type="radio" class="btn-check" name="item[4][6][valor]" id="btncheck57" autocomplete="off" required value="3"  >
                         <label class="btn btn-outline-primary" for="btncheck57">NA</label>
            </td>
            <td>
                <textarea type="text" name="item[4][6][observacao]" id="idObs"> </textarea>
            </td>
                <input type="hidden" name="item[4][6][nome]" value="4.6">
            </tr>
            <tr>
                 <td>
                    4.7
                 </td>
                 <td>
                    Utiliza roupa de trabalho adequada  <br> para a atividade em bom estado de conservação.
                 </td>
                <td>
                <input type="radio" class="btn-check" name="item[4][7][valor]" id="btncheck58" autocomplete="off" required value="1"  >
                         <label class="btn btn-outline-primary" for="btncheck58">Sim</label>
                         <input type="radio" class="btn-check" name="item[4][7][valor]" id="btncheck59" autocomplete="off" required value="2"  >
                         <label class="btn btn-outline-primary" for="btncheck59">Não</label>
            </td>
                 </td>
                <td>
                <input type="radio" class="btn-check" name="item[4][7][valor]" id="btncheck60" autocomplete="off" required value="3"  >
                         <label class="btn btn-outline-primary" for="btncheck60">NA</label>
            </td>
            <td>
                <textarea type="text" name="item[4][7][observacao]" id="idObs"> </textarea>
            </td>
                <input type="hidden" name="item[4][7][nome]" value="4.7">
            </tr>

            <tr>
                 <td>
                    4.8
                 </td>
                 <td>
                 Utiliza óculos de proteção, conforme <br> atividade, em bom estado de conservação.
                 </td>
                <td>
                <input type="radio" class="btn-check" name="item[4][8][valor]" id="btncheck61" autocomplete="off" required value="1"  >
                         <label class="btn btn-outline-primary" for="btncheck61">Sim</label>
                         <input type="radio" class="btn-check" name="item[4][8][valor]" id="btncheck62" autocomplete="off" required value="2"  >
                         <label class="btn btn-outline-primary" for="btncheck62">Não</label>
            </td>
                 </td>
                <td>
                <input type="radio" class="btn-check" name="item[4][8][valor]" id="btncheck63" autocomplete="off" required value="3"  >
                         <label class="btn btn-outline-primary" for="btncheck63">NA</label>
            </td>
            <td>
                <textarea type="text" name="item[4][8][observacao]" id="idObs"> </textarea>
            </td>
                <input type="hidden" name="item[4][8][nome]" value="4.9">
            </tr>

            <tr>
                 <td>
                    4.9
                 </td>
                 <td>
                    Utiliza protetores auriculares em bom estado de conservação.
                 </td>
                <td>
                <input type="radio" class="btn-check" name="item[4][9][valor]" id="btncheck64" autocomplete="off" required value="1"  >
                         <label class="btn btn-outline-primary" for="btncheck64">Sim</label>
                         <input type="radio" class="btn-check" name="item[4][9][valor]" id="btncheck65" autocomplete="off" required value="2"  >
                         <label class="btn btn-outline-primary" for="btncheck65">Não</label>
            </td>
                 </td>
                <td>
                <input type="radio" class="btn-check" name="item[4][9][valor]" id="btncheck66" autocomplete="off" required value="3"  >
                         <label class="btn btn-outline-primary" for="btncheck66">NA</label>
            </td>
            <td>
                <textarea type="text" name="item[4][9][observacao]" id="idObs"> </textarea>
            </td>
                <input type="hidden" name="item[4][9][nome]" value="4.9">
            </tr>
            <tr>
                 <td>
                    4.10
                 </td>
                 <td>
                     O refletivo do uniforme ou colete refletivo <br> encontra-se em bom estado de conservação.
                 </td>
                <td>
                <input type="radio" class="btn-check" name="item[4][10][valor]" id="btncheck67" autocomplete="off" required value="1"  >
                         <label class="btn btn-outline-primary" for="btncheck67">Sim</label>
                         <input type="radio" class="btn-check" name="item[4][10][valor]" id="btncheck68" autocomplete="off" required value="2"  >
                         <label class="btn btn-outline-primary" for="btncheck68">Não</label>
            
                 </td>
                <td>
                <input type="radio" class="btn-check" name="item[4][10][valor]" id="btncheck69" autocomplete="off" required value="3"  >
                         <label class="btn btn-outline-primary" for="btncheck69">NA</label>
            </td>
            <td>
                <textarea type="text" name="item[4][10][observacao]0" id="idObs"> </textarea>
            </td>
                <input type="hidden" name="item[4][10][nome]" value="4.10">
            </tr>
            <tr>
                 <td>
                    4.11
                 </td>
                 <td>
                     Utiliza mangas isolantes, de acordo com <br> atividade em bom estado de conservação.
                 </td>   
                <td>
                <input type="radio" class="btn-check" name="item[4][11][valor]" id="btncheck70" autocomplete="off" required value="1"  >
                         <label class="btn btn-outline-primary" for="btncheck70">Sim</label>
                         <input type="radio" class="btn-check" name="item[4][11][valor]" id="btncheck71" autocomplete="off" required value="2"  >
                         <label class="btn btn-outline-primary" for="btncheck71">Não</label>
        
                 </td>
                <td>
                <input type="radio" class="btn-check" name="item[4][11][valor]" id="btncheck72" autocomplete="off" required value="3"  >
                         <label class="btn btn-outline-primary" for="btncheck72">NA</label>
            </td>
            <td>
                <textarea type="text" name="item[4][11][observacao]" id="idObs"> </textarea>
            </td>
                <input type="hidden" name="item[4][11][nome]" value="4.11">
            </tr>

            <tr>
                 <td>
                    4.12
                 </td>
                 <td>
                    Utiliza proteção respiratória em bom estado de conservação..
                 </td>
                <td>
                <input type="radio" class="btn-check" name="item[4][12][valor]" id="btncheck73" autocomplete="off" required value="1"  >
                         <label class="btn btn-outline-primary" for="btncheck73">Sim</label>
                         <input type="radio" class="btn-check" name="item[4][12][valor]" id="btncheck74" autocomplete="off" required value="2"  >
                         <label class="btn btn-outline-primary" for="btncheck74">Não</label>
            
                 </td>
                <td>
                <input type="radio" class="btn-check" name="item[4][12][valor]" id="btncheck75" autocomplete="off" required value="3"  >
                         <label class="btn btn-outline-primary" for="btncheck75">NA</label>
            </td>
            <td>
                <textarea type="text" name="item[4][12][observacao]" id="idObs"> </textarea>
            </td>
                    <input type="hidden" name="item[4][12][nome]" value="4.12">
            </tr>
            </tbody>
        </table>
    <br>
        <table class="table table-hover"align="center" border="1" cellspacing="10">
            <thead class="table-light">
                <tr>
                    <th>I-5</th>
                    <th>Materiais, Equipamentos e Ferramentas</th>
                    <th>Cumpre</th>
                    <th>NA</th>
                    <th>Observação</th>
                    </tr>
            </thead>

            <tbody>
            <tr>
                 <td>
                    5.1
                 </td>
                 <td>
                    Utiliza os materiais adequados
                 </td>
                <td>
                <input type="radio" class="btn-check" name="item[5][1][valor]" id="btncheck76" autocomplete="off" required value="1"  >
                         <label class="btn btn-outline-primary" for="btncheck76">Sim</label>
                         <input type="radio" class="btn-check" name="item[5][1][valor]" id="btncheck77" autocomplete="off" required value="2"  >
                         <label class="btn btn-outline-primary" for="btncheck77">Não</label>
        
                 </td>
                <td>
                <input type="radio" class="btn-check" name="item[5][1][valor]" id="btncheck78" autocomplete="off" required value="3"  >
                         <label class="btn btn-outline-primary" for="btncheck78">NA</label>
            </td>
            <td>
                <textarea type="text" name="item[5][1][observacao]" id="idObs"> </textarea>
            </td>
                <input type="hidden" name="item[5][1][nome]" value="5.1">
            </tr>        
            
            <tr>
                 <td>
                    5.2
                 </td>
                 <td>
                    Utiliza os equipamentos indicados
                 </td>
                <td>
                <input type="radio" class="btn-check" name="item[5][2][valor]" id="btncheck79" autocomplete="off" required value="1"  >
                         <label class="btn btn-outline-primary" for="btncheck79">Sim</label>
                         <input type="radio" class="btn-check" name="item[5][2][valor]" id="btncheck80" autocomplete="off" required value="2"  >
                         <label class="btn btn-outline-primary" for="btncheck80">Não</label>
                </td>
                <td>
               <input type="radio" class="btn-check" name="item[5][2][valor]" id="btncheck81" autocomplete="off" required value="3"  >
                         <label class="btn btn-outline-primary" for="btncheck81">NA</label>
            </td>
            <td>
                <textarea type="text" name="item[5][2][observacao]" id="idObs"> </textarea>
            </td>
                <input type="hidden" name="item[5][2][nome]" value="5.2">
            </tr>   
            <tr>
                 <td>
                    5.3
                 </td>
                 <td>
                    Utiliza as ferramentas indicadas
                 </td>
                <td>
                <input type="radio" class="btn-check" name="item[5][3][valor]" id="btncheck82" autocomplete="off" required value="1"  >
                         <label class="btn btn-outline-primary" for="btncheck82">Sim</label>
                         <input type="radio" class="btn-check" name="item[5][3][valor]" id="btncheck83" autocomplete="off" required value="2"  >
                         <label class="btn btn-outline-primary" for="btncheck83">Não</label>
                </td>
                <td>
                <input type="radio" class="btn-check" name="item[5][3][valor]" id="btncheck84" autocomplete="off" required value="3"  >
                         <label class="btn btn-outline-primary" for="btncheck84">NA</label>
            </td>
            <td>
                <textarea type="text" name="item[5][3][observacao]" id="idObs"> </textarea>
            </td>
            <input type="hidden" name="item[5][3][nome]" value="5.3">
            </tr>
            </tbody>
        </table>
<br>
        <table class="table table-hover"align="center" border="1" cellspacing="10">
           <thead class="table-light">
                    <tr>
                        <th>I-6</th>
                        <th>Condições de Trabalho</th>
                        <th>Cumpre</th>
                        <th>NA</th>
                        <th>Observação</th>
                    </tr>
            </thead>
            <tbody>
                <tr>
                        <td>
                            6.1
                        </td>
                        <td>
                            Existem ordem e limpeza na área de trabalho
                        </td>
                        <td>
                        <input type="radio" class="btn-check" name="item[6][1][valor]" id="btncheck85" autocomplete="off" required value="1"  >
                         <label class="btn btn-outline-primary" for="btncheck85">Sim</label>
                         <input type="radio" class="btn-check" name="item[6][1][valor]" id="btncheck86" autocomplete="off" required value="2"  >
                         <label class="btn btn-outline-primary" for="btncheck86">Não</label>
                            </td>
                        <td>
                        <input type="radio" class="btn-check" name="item[6][1][valor]" id="btncheck87" autocomplete="off" required value="3"  >
                         <label class="btn btn-outline-primary" for="btncheck87">NA</label>
                        </td>
                        <td>
                             <textarea type="text" name="item[6][1][observacao]" id="idObs"> </textarea>
                        </td>
                        <input type="hidden" name="item[6][1][nome]" value="6.1">
                </tr>

                <tr>
                        <td>
                            6.2
                        </td>
                        <td>
                            Existe meio de comunicação adequado
                        </td>
                         <td>
                         <input type="radio" class="btn-check" name="item[6][2][valor]" id="btncheck88" autocomplete="off" required value="1"  >
                         <label class="btn btn-outline-primary" for="btncheck88">Sim</label>
                         <input type="radio" class="btn-check" name="item[6][2][valor]" id="btncheck89" autocomplete="off" required value="2"  >
                         <label class="btn btn-outline-primary" for="btncheck89">Não</label>
                        </td>
                        <td>
                        <input type="radio" class="btn-check" name="item[6][2][valor]" id="btncheck90" autocomplete="off" required value="3"  >
                         <label class="btn btn-outline-primary" for="btncheck90">NA</label>
                        </td>
                        <td>
                             <textarea type="text" name="item[6][2][observacao]" id="idObs"> </textarea>
                        </td>
                        <input type="hidden" name="item[6][2][nome]" value="6.2">
                </tr>

                <tr>
                        <td>
                            6.3
                        </td>
                        <td>
                            Empregado encontra-se trabalhando em condições físicas <br> e psíquicas adequadas
                         <td>
                         <input type="radio" class="btn-check" name="item[6][3][valor]" id="btncheck91" autocomplete="off" required value="1"  >
                         <label class="btn btn-outline-primary" for="btncheck91">Sim</label>
                         <input type="radio" class="btn-check" name="item[6][3][valor]" id="btncheck92" autocomplete="off" required value="2"  >
                         <label class="btn btn-outline-primary" for="btncheck92">Não</label>
                        </td>
                        <td>
                        <input type="radio" class="btn-check" name="item[6][3][valor]" id="btncheck93" autocomplete="off" required value="3"  >
                         <label class="btn btn-outline-primary" for="btncheck93">NA</label>
                        </td>
                        <td>
                             <textarea type="text" name="item[6][3][observacao]" id="idObs"> </textarea>
                        </td>
                        <input type="hidden" name="item[6][3][nome]" value="6.3">
                </tr>
                <tr>
                        <td>
                            6.4
                        </td>
                        <td>
                            Existe supervisão adequada da tarefa
                         <td>
                         <input type="radio" class="btn-check" name="item[6][4][valor]" id="btncheck94" autocomplete="off" required value="1"  >
                         <label class="btn btn-outline-primary" for="btncheck94">Sim</label>
                         <input type="radio" class="btn-check" name="item[6][4][valor]" id="btncheck95" autocomplete="off" required value="2"  >
                         <label class="btn btn-outline-primary" for="btncheck95">Não</label>
                        </td>
                        <td>
                        <input type="radio" class="btn-check" name="item[6][4][valor]" id="btncheck96" autocomplete="off" required value="3"  >
                         <label class="btn btn-outline-primary" for="btncheck96">NA</label>
                        </td>
                        <td>
                             <textarea type="text" name="item[6][4][observacao]" id="idObs"> </textarea>
                        </td>
                        <input type="hidden" name="item[6][4][nome]" value="6.4">
                </tr>
            </tbody>
        </table>
<br>
        <table class="table table-hover"align="center" border="1" cellspacing="10">
        <thead class="table-light">
                    <tr>
                        <th>I-7</th>
                        <th>Sinalização e proteção pública</th>
                        <th>Cumpre</th>
                        <th>NA</th>
                        <th>Observação</th>
                    </tr>
            </thead>

            <tbody>
                <tr>
                        <td>
                            7.1
                        </td>
                        <td>
                            Existe proteção completa da área de trabalho
                         <td>
                         <input type="radio" class="btn-check" name="item[7][1][valor]" id="btncheck97" autocomplete="off" required value="1"  >
                         <label class="btn btn-outline-primary" for="btncheck97">Sim</label>
                         <input type="radio" class="btn-check" name="item[7][1][valor]" id="btncheck98" autocomplete="off" required value="2"  >
                         <label class="btn btn-outline-primary" for="btncheck98">Não</label>
                        </td>
                        <td>
                        <input type="radio" class="btn-check" name="item[7][1][valor]" id="btncheck99" autocomplete="off" required value="3"  >
                         <label class="btn btn-outline-primary" for="btncheck99">NA</label>
                        </td>
                        <td>
                             <textarea type="text" name="item[7][1][observacao]" id="idObs"> </textarea>
                        </td>
                        <input type="hidden" name="item[7][1][nome]" value="7.1">
                </tr>

                <tr>
                        <td>
                            7.2
                        </td>
                        <td>
                        Existe sinalização completa da área de trabalho
                         <td>
                         <input type="radio" class="btn-check" name="item[7][2][valor]" id="btncheck100" autocomplete="off" required value="1"  >
                         <label class="btn btn-outline-primary" for="btncheck100">Sim</label>
                         <input type="radio" class="btn-check" name="item[7][2][valor]" id="btncheck101" autocomplete="off" required value="2"  >
                         <label class="btn btn-outline-primary" for="btncheck101">Não</label>
                        </td>
                        <td>
                        <input type="radio" class="btn-check" name="item[7][2][valor]" id="btncheck102" autocomplete="off" required value="3"  >
                         <label class="btn btn-outline-primary" for="btncheck102">NA</label>
                        </td>
                        <td>
                             <textarea type="text" name="item[7][2][observacao]" id="idObs"> </textarea>
                        </td>
                        <input type="hidden" name="item[7][2][nome]" value="7.2">
                </tr>
            </tbody>
        </table>
<br>
        <table class="table table-hover"align="center" border="1" cellspacing="10">
                <thead class="table-light">
                            <tr>
                                <th>I-8</th>
                                <th>Identificação dos riscos (conversa ao pé do poste)</th>
                                <th>Cumpre</th>
                                <th>NA</th>
                                <th>Observação</th>
                            </tr>
                    </thead>

                    <tbody>
                        <tr>
                                <td>
                                    8.1
                                </td>
                                <td>
                                    Foi identificado os riscos da atividade
                                <td>
                                <input type="radio" class="btn-check" name="item[8][1][valor]" id="btncheck103" autocomplete="off" required value="1"  >
                                <label class="btn btn-outline-primary" for="btncheck103">Sim</label>
                                <input type="radio" class="btn-check" name="item[8][1][valor]" id="btncheck104" autocomplete="off" required value="2"  >
                                <label class="btn btn-outline-primary" for="btncheck104">Não</label>
                                </td>
                                <td>
                                <input type="radio" class="btn-check" name="item[8][1][valor]" id="btncheck105" autocomplete="off" required value="3"  >
                                <label class="btn btn-outline-primary" for="btncheck105">NA</label>
                                </td>
                                 <td>
                                    <textarea type="text" name="item[8][1][observacao]" id="idObs"> </textarea>
                                 </td>
                                 <input type="hidden" name="item[8][1][nome]" value="8.1">
                        </tr>

                        <tr>
                                <td>
                                    8.2
                                </td>
                                <td>
                                    Foi realizada a conversa de 05 minutos (conversa ao pé do poste)
                                <td>
                                <input type="radio" class="btn-check" name="item[8][2][valor]" id="btncheck106" autocomplete="off" required value="1"  >
                                <label class="btn btn-outline-primary" for="btncheck106">Sim</label>
                                <input type="radio" class="btn-check" name="item[8][2][valor]" id="btncheck107" autocomplete="off" required value="2"  >
                                <label class="btn btn-outline-primary" for="btncheck107">Não</label>
                                </td>
                                <td>
                                <input type="radio" class="btn-check" name="item[8][2][valor]" id="btncheck108" autocomplete="off" required value="3"  >
                                <label class="btn btn-outline-primary" for="btncheck108">NA</label>
                                </td>
                                <td>
                                    <textarea type="text" name="item[8][2][observacao]" id="idObs"> </textarea>
                                </td>
                                <input type="hidden" name="item[8][2][nome]" value="8.2">
                        </tr>
                    </tbody>
                </table>
<br>
                <table class="table table-hover"align="center" border="1" cellspacing="10">
                        <thead class="table-light">
                                    <tr>
                                        <th>I-9</th>
                                        <th>Identificação e competência do pessoal</th>
                                        <th>Cumpre</th>
                                        <th>NA</th>
                                        <th>Observação</th>
                                    </tr>
                            </thead>

                            <tbody>
                                <tr>
                                        <td>
                                            9.1
                                        </td>
                                        <td>
                                            Possui crachá de identificação
                                         <td>
                                         <input type="radio" class="btn-check" name="item[9][1][valor]" id="btncheck109" autocomplete="off" required value="1"  >
                                        <label class="btn btn-outline-primary" for="btncheck109">Sim</label>
                                        <input type="radio" class="btn-check" name="item[9][1][valor]" id="btncheck110" autocomplete="off" required value="2"  >
                                        <label class="btn btn-outline-primary" for="btncheck110">Não</label>
                                        </td>
                                        <td>
                                        <input type="radio" class="btn-check" name="item[9][1][valor]" id="btncheck111" autocomplete="off" required value="3"  >
                                        <label class="btn btn-outline-primary" for="btncheck111">NA</label>
                                        </td>
                                        <td>
                                             <textarea type="text" name="item[9][1][observacao]" id="idObs"> </textarea>
                                        </td>
                                        <input type="hidden" name="item[9][1][nome]" value="9.1">
                                </tr>

                                <tr>
                                        <td>
                                            9.2
                                        </td>
                                        <td>
                                            Possui qualificação adequada para a atividade em que executa
                                         <td>
                                         <input type="radio" class="btn-check" name="item[9][2][valor]" id="btncheck112" autocomplete="off" required value="1"  >
                                        <label class="btn btn-outline-primary" for="btncheck112">Sim</label>
                                        <input type="radio" class="btn-check" name="item[9][2][valor]" id="btncheck113" autocomplete="off" required value="2"  >
                                        <label class="btn btn-outline-primary" for="btncheck113">Não</label>
                                        </td>
                                        <td>
                                        <input type="radio" class="btn-check" name="item[9][2][valor]" id="btncheck114" autocomplete="off" required value="3"  >
                                        <label class="btn btn-outline-primary" for="btncheck114">NA</label>
                                        </td>
                                        <td>
                                            <textarea type="text" name="item[9][2][observacao]" id="idObs"> </textarea>
                                        </td>
                                            <input type="hidden" name="item[9][2][nome]" value="9.2">
                                </tr>
                                <tr>
                                        <td>
                                            9.3
                                        </td>
                                        <td>
                                             Sabe como agir em caso de ocorrência de emergências,<br>
                                              acidentes ou incidentes do trabalho
                                         <td>
                                         <input type="radio" class="btn-check" name="item[9][3][valor]" id="btncheck115" autocomplete="off" required value="1"  >
                                        <label class="btn btn-outline-primary" for="btncheck115">Sim</label>
                                        <input type="radio" class="btn-check" name="item[9][3][valor]" id="btncheck116" autocomplete="off" required value="2"  >
                                        <label class="btn btn-outline-primary" for="btncheck116">Não</label>
                                        </td>
                                        <td>
                                        <input type="radio" class="btn-check" name="item[9][3][valor]" id="btncheck117" autocomplete="off" required value="3"  >
                                        <label class="btn btn-outline-primary" for="btncheck117">NA</label>
                                        </td>
                                        <td>
                                            <textarea type="text" name="item[9][3][observacao]" id="idObs"> </textarea>
                                        </td>
                                        <input type="hidden" name="item[9][3][nome]" value="9.3">
                                    </tr>
                            </tbody>
                        </table>
<br>
                    <table class="table table-hover"align="center" border="1" cellspacing="10">
                                            <thead class="table-light">
                                                        <tr>
                                                            <th>I-10</th>
                                                            <th>Veículo (Carro, caminhão, moto, etc)</th>
                                                            <th>Cumpre</th>
                                                            <th>NA</th>
                                                            <th>Observação</th>
                                                        </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                            <td>
                                                                10.1
                                                            </td>
                                                            <td>
                                                                O veículo utilizado para a tarefa, seus equipamentos <br> e acessórios cumprem com as <br> especificações técnicas requeridas.
                                                             <td>
                                                             <input type="radio" class="btn-check" name="item[10][1][valor]" id="btncheck118" autocomplete="off" required value="1"  >
                                                                <label class="btn btn-outline-primary" for="btncheck118">Sim</label>
                                                                <input type="radio" class="btn-check" name="item[10][1][valor]" id="btncheck119" autocomplete="off" required value="2"  >
                                                                <label class="btn btn-outline-primary" for="btncheck119">Não</label>
                                                            </td>
                                                           <td>
                                                           <input type="radio" class="btn-check" name="item[10][1][valor]" id="btncheck120" autocomplete="off" required value="3"  >
                                                            <label class="btn btn-outline-primary" for="btncheck120">NA</label>
                                                            </td>
                                                            <td>
                                                                <textarea type="text" name="item[10][1][observacao]" id="idObs"> </textarea>
                                                            </td>
                                                            <input type="hidden" name="item[10][1][nome]" value="10.1">
                                                    </tr>

                                                    <tr>
                                                            <td>
                                                                10.2
                                                            </td>
                                                            <td>
                                                                Possui a documentação do veículo do condutor <br> exigido pelo Código de Trânsito Brasileiro.
                                                             <td>
                                                             <input type="radio" class="btn-check" name="item[10][2][valor]" id="btncheck121" autocomplete="off" required value="1"  >
                                                                <label class="btn btn-outline-primary" for="btncheck121">Sim</label>
                                                                <input type="radio" class="btn-check" name="item[10][2][valor]" id="btncheck122" autocomplete="off" required value="2"  >
                                                                <label class="btn btn-outline-primary" for="btncheck122">Não</label>
                                                            </td>
                                                           <td>
                                                           <input type="radio" class="btn-check" name="item[10][2][valor]" id="btncheck123" autocomplete="off" required value="3"  >
                                                            <label class="btn btn-outline-primary" for="btncheck123">NA</label>
                                                        </td>
                                                        <td>
                                                             <textarea type="text" name="item[10][2][observacao]" id="idObs"> </textarea>
                                                        </td>
                                                        <input type="hidden" name="item[10][2][nome]" value="10.2">
                                                    </tr>
                                                    <tr>
                                                            <td>
                                                                10.3
                                                            </td>
                                                            <td>
                                                                O transporte de pessoas em veículos é <br> realizado de acordo com as normas de trânsito brasileiro
                                                             <td>
                                                             <input type="radio" class="btn-check" name="item[10][3][valor]" id="btncheck124" autocomplete="off" required value="1"  >
                                                                <label class="btn btn-outline-primary" for="btncheck124">Sim</label>
                                                                <input type="radio" class="btn-check" name="item[10][3][valor]" id="btncheck125" autocomplete="off" required value="2"  >
                                                                <label class="btn btn-outline-primary" for="btncheck125">Não</label>
                                                            </td>
                                                           <td>
                                                           <input type="radio" class="btn-check" name="item[10][3][valor]" id="btncheck126" autocomplete="off" required value="3"  >
                                                            <label class="btn btn-outline-primary" for="btncheck126">NA</label>
                                                        </td>
                                                        <td>
                                                             <textarea type="text" name="item[10][3][observacao]" id="idObs"> </textarea>
                                                        </td>
                                                        <input type="hidden" name="item[10][3][nome]" value="10.3">
                                                        </tr>
                                                </tbody>
                                            </table>
<br>
                <table class="table table-hover"align="center" border="1" cellspacing="10">
                    <thead class="table-light">
                            <tr>
                                  <th>I-11</th>
                                  <th>Primeiros socorros e emergências</th>
                                  <th>Cumpre</th>
                                  <th>NA</th>
                                  <th>Observação</th>
                            </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>
                                    11.1
                                </td>
                                <td>
                                    O estojo de primeiro socorros está em boas condições de conservação
                                    <td>
                                    <input type="radio" class="btn-check" name="item[11][1][valor]" id="btncheck127" autocomplete="off" required value="1"  >
                                    <label class="btn btn-outline-primary" for="btncheck127">Sim</label>
                                    <input type="radio" class="btn-check" name="item[11][1][valor]" id="btncheck128" autocomplete="off" required value="2"  >
                                    <label class="btn btn-outline-primary" for="btncheck128">Não</label>
                                </td>
                                <td>
                                <input type="radio" class="btn-check" name="item[11][1][valor]" id="btncheck129" autocomplete="off" required value="3"  >
                                <label class="btn btn-outline-primary" for="btncheck129">NA</label>
                                </td>
                                <td>
                                    <textarea type="text" name="item[11][1][observacao]" id="idObs"> </textarea>
                                </td>
                                <input type="hidden" name="item[11][1][nome]" value="11.1">
                            </tr>

                            
                    </tbody>
                
                </table>
                <button class="btn btn-primary"  type="submit"> Salvar </button>
                             </form>
                <br>   
                
                <script type="text/javascript">
                            $("input:checkbox").on('click', function() {

                            var $box = $(this);
                            if ($box.is(":checked")) {
                                var group = "input:checkbox[name='" + $box.attr("name") + "']";
                                $(group).prop("checked", false);
                                $box.prop("checked", true);
                            } else {
                                $box.prop("checked", false);
                            }
                            });
                    // $('.escolha').on('change', function() {
                    // $('.escolha').not(this).prop('checked', false);  
                    // });

                    // $('.tlo').on('change', function() {
                    // $('.tlo').not(this).prop('checked', false);  
                    // });
                 </script>

                <!-- <input type="submit"></input> -->

                </div>
                
    <!-- </form> -->

</body>















</html>