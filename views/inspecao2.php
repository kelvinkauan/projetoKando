<!DOCTYPE html>

<html>

<head>
<meta charset="UTF-8" >
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
<title>Formulário</title>
</head>


<body>
    
<p align="center"> Áreas / Atuações</p>
<form action="">
   
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
                <input type="checkbox" name="fooby[1][]" id="idSim" value="Sim" class="escolha" >
                         <label>Sim</label>
                <input type="checkbox" name="fooby[1][]" id="idNao" value="Não" class="escolha" >
                         <label>Não</label>
            </td>
            <td>
                <input type="checkbox" name="fooby[1][]" id="idNa">
            </td>
            <td>
                <input type="text" name="observacoes" id="idObs">
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
                <input type="checkbox" name="fooby[2][]" id="idSim" value="Sim" class="tlo" >
                         <label>Sim</label>
                <input type="checkbox" name="fooby[2][]" id="idNao" value="Não" class="tlo" >
                         <label>Não</label>
            </td>
            <td>
            <input type="checkbox" name="fooby[2][]" id="idNa">
            </td>
            <td>
                <input type="text" name="observacoes" id="idObs">
            </td>
        </tr>
        <tr>
            <td>
                1.3
            </td>
            <td>
                Constatar a ausência de tensão</td>
            <td>
                <input type="checkbox" name="fooby[3][]" id="idSim" value="Sim">
                         <label>Sim</label>
                <input type="checkbox" name="fooby[3][]" id="idNao" value="Não">
                         <label>Não</label>
            </td>
            <td>
            <input type="checkbox" name="fooby[3][]" id="idNa">
            </td>
            <td>
                <input type="text" name="observacoes" id="idObs">
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
                <input type="checkbox" name="fooby[4][]" id="idSim" value="Sim">
                         <label>Sim</label>
                <input type="checkbox" name="fooby[4][]" id="idNao" value="Não">
                         <label>Não</label>
            </td>
            <td>
            <input type="checkbox" name="fooby[4][]" id="idNa">
            </td>
            <td>
                <input type="text" name="observacoes" id="idObs">
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
                <input type="checkbox" name="fooby[5][]" id="idSim" value="Sim">
                         <label>Sim</label>
                <input type="checkbox" name="fooby[5][]" id="idNao" value="Não">
                         <label>Não</label>
            </td>
            <td>
            <input type="checkbox" name="fooby[5][]" id="idNa">
            </td>
            <td>
                <input type="text" name="observacoes" id="idObs">
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
                <input type="checkbox" name="fooby[6][]" id="idSim" value="Sim">
                         <label>Sim</label>
                <input type="checkbox" name="fooby[6][]" id="idNao" value="Não">
                         <label>Não</label>
            </td>
            <td>
            <input type="checkbox" name="fooby[6][]" id="Na">
            </td>
            <td>
                <input type="text" name="observacoes" id="idObs">
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
                <input type="checkbox" name="fooby[7][]" id="idSim" value="Sim">
                         <label>Sim</label>
                <input type="checkbox" name="fooby[7][]" id="idNao" value="Não">
                         <label>Não</label>
            </td>
            <td>
            <input type="checkbox" name="fooby[7][]" id="Na">
            </td>
            <td>
                <input type="text" name="observacoes" id="idObs">
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
                <input type="checkbox" name="fooby[8][]" id="idSim" value="Sim">
                         <label>Sim</label>
                <input type="checkbox" name="fooby[8][]" id="idNao" value="Não">
                         <label>Não</label>
            </td>
            <td>
            <input type="checkbox" name="fooby[8][]" id="Na">
            </td>
            <td>
                <input type="text" name="observacoes" id="idObs">
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
                <input type="checkbox" name="fooby[9][]" id="idSim" value="Sim">
                         <label>Sim</label>
                <input type="checkbox" name="fooby[9][]" id="idNao" value="Não">
                         <label>Não</label>
            </td>
                 </td>
                <td>
                <input type="checkbox" name="fooby[9][]" id="Na">
            </td>
            <td>
                <input type="text" name="observacoes" id="idObs">
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
                <input type="checkbox" name="fooby[10][]" id="idSim" value="Sim">
                         <label>Sim</label>
                <input type="checkbox" name="fooby[10][]" id="idNao" value="Não">
                         <label>Não</label>
            </td>
                 </td>
                <td>
                <input type="checkbox" name="fooby[10][]" id="Na">
            </td>
            <td>
                <input type="text" name="observacoes" id="idObs">
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
                <input type="checkbox" name="fooby[11][]" id="idSim" value="Sim">
                         <label>Sim</label>
                <input type="checkbox" name="fooby[11][]" id="idNao" value="Não">
                         <label>Não</label>
            </td>
                 </td>
                <td>
                <input type="checkbox" name="fooby[11][]" id="Na">
            </td>
            <td>
                <input type="text" name="observacoes" id="idObs">
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
                <input type="checkbox" name="fooby[12][]" id="idSim" value="Sim">
                         <label>Sim</label>
                <input type="checkbox" name="fooby[12][]" id="idNao" value="Não">
                         <label>Não</label>
            </td>
                 </td>
                <td>
                <input type="checkbox" name="fooby[12][]" id="Na">
            </td>
            <td>
                <input type="text" name="observacoes" id="idObs">
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
                <input type="checkbox" name="fooby[13][]" id="idSim" value="Sim">
                         <label>Sim</label>
                <input type="checkbox" name="fooby[13][]" id="idNao" value="Não">
                         <label>Não</label>
            </td>
                 </td>
                <td>
                <input type="checkbox" name="fooby[13][]" id="Na">
            </td>
            <td>
                <input type="text" name="observacoes" id="idObs">
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
                <input type="checkbox" name="fooby[14][]" id="idSim" value="Sim">
                         <label>Sim</label>
                <input type="checkbox" name="fooby[14][]" id="idNao" value="Não">
                         <label>Não</label>
            </td>
                 </td>
                <td>
                <input type="checkbox" name="fooby[14][]" id="Na">
            </td>
            <td>
                <input type="text" name="observacoes" id="idObs">
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
                <input type="checkbox" name="fooby[15][]" id="idSim" value="Sim">
                         <label>Sim</label>
                <input type="checkbox" name="fooby[15][]" id="idNao" value="Não">
                         <label>Não</label>
            </td>
                 </td>
                <td>
                <input type="checkbox" name="fooby[15][]" id="Na">
            </td>
            <td>
                <input type="text" name="observacoes" id="idObs">
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
                <input type="checkbox" name="fooby[16][]" id="idSim" value="Sim">
                         <label>Sim</label>
                <input type="checkbox" name="fooby[16][]" id="idNao" value="Não">
                         <label>Não</label>
            </td>
                 </td>
                <td>
                <input type="checkbox" name="fooby[16][]" id="Na">
            </td>
            <td>
                <input type="text" name="observacoes" id="idObs">
            </td>
            </tr>
            <tr>
                 <td>
                    4.4
                 </td>
                 <td>
                    Utiliza luvas isolantes (BT/AT) conforme atividade,<br> em bom estado de conservação.
                </td>
                <td>
                <input type="checkbox" name="fooby[17][]" id="idSim" value="Sim">
                         <label>Sim</label>
                <input type="checkbox" name="fooby[17][]" id="idNao" value="Não">
                         <label>Não</label>
            </td>
                 </td>
                <td>
                <input type="checkbox" name="fooby[17][]" id="Na">
            </td>
            <td>
                <input type="text" name="observacoes" id="idObs">
            </td>
            </tr>
            <tr>
                 <td>
                    4.5
                 </td>
                 <td>
                    Utiliza protetor facial em bom estado de conservação.
                 </td>
                <td>
                <input type="checkbox" name="fooby[18][]" id="idSim" value="Sim">
                         <label>Sim</label>
                <input type="checkbox" name="fooby[18][]" id="idNao" value="Não">
                         <label>Não</label>
            </td>
                 </td>
                <td>
                <input type="checkbox" name="fooby[18][]" id="Na">
            </td>
            <td>
                <input type="text" name="observacoes" id="idObs">
            </td>
            </tr>
            <tr>
                 <td>
                    4.6
                 </td>
                 <td>
                    Utiliza sistema de proteção contra quedas <br> (cinturão e trava quedas completo).
                 </td>
                <td>
                <input type="checkbox" name="fooby[19][]" id="idSim" value="Sim">
                         <label>Sim</label>
                <input type="checkbox" name="fooby[19][]" id="idNao" value="Não">
                         <label>Não</label>
            </td>
                 </td>
                <td>
                <input type="checkbox" name="fooby[19][]" id="Na">
            </td>
            <td>
                <input type="text" name="observacoes" id="idObs">
            </td>
            </tr>
            <tr>
                 <td>
                    4.7
                 </td>
                 <td>
                    Utiliza roupa de trabalho adequada  <br> para a atividade em bom estado de conservação.
                 </td>
                <td>
                <input type="checkbox" name="fooby[20][]" id="idSim" value="Sim">
                         <label>Sim</label>
                <input type="checkbox" name="fooby[20][]" id="idNao" value="Não">
                         <label>Não</label>
            </td>
                 </td>
                <td>
                <input type="checkbox" name="fooby[20][]" id="Na">
            </td>
            <td>
                <input type="text" name="observacoes" id="idObs">
            </td>
            </tr>

            <tr>
                 <td>
                    4.8
                 </td>
                 <td>
                 Utiliza óculos de proteção, conforme <br> atividade, em bom estado de conservação.
                 </td>
                <td>
                <input type="checkbox" name="fooby[21][]" id="idSim" value="Sim">
                         <label>Sim</label>
                <input type="checkbox" name="fooby[21][]" id="idNao" value="Não">
                         <label>Não</label>
            </td>
                 </td>
                <td>
                <input type="checkbox" name="fooby[21][]" id="Na">
            </td>
            <td>
                <input type="text" name="observacoes" id="idObs">
            </td>
            </tr>

            <tr>
                 <td>
                    4.9
                 </td>
                 <td>
                    Utiliza protetores auriculares em bom estado de conservação.
                 </td>
                <td>
                <input type="checkbox" name="fooby[22][]" id="idSim" value="Sim">
                         <label>Sim</label>
                <input type="checkbox" name="fooby[22][]" id="idNao" value="Não">
                         <label>Não</label>
            </td>
                 </td>
                <td>
                <input type="checkbox" name="fooby[22][]" id="Na">
            </td>
            <td>
                <input type="text" name="observacoes" id="idObs">
            </td>
            </tr>
            <tr>
                 <td>
                    4.10
                 </td>
                 <td>
                     O refletivo do uniforme ou colete refletivo <br> encontra-se em bom estado de conservação.
                 </td>
                <td>
                <input type="checkbox" name="fooby[23][]" id="idSim" value="Sim">
                         <label>Sim</label>
                <input type="checkbox" name="fooby[23][]" id="idNao" value="Não">
                         <label>Não</label>
            
                 </td>
                <td>
                <input type="checkbox" name="fooby[23][]" id="Na">
            </td>
            <td>
                <input type="text" name="observacoes" id="idObs">
            </td>
            </tr>
            <tr>
                 <td>
                    4.11
                 </td>
                 <td>
                     Utiliza mangas isolantes, de acordo com <br> atividade em bom estado de conservação.
                 </td>   
                <td>
                <input type="checkbox" name="fooby[24][]" id="idSim" value="Sim">
                         <label>Sim</label>
                <input type="checkbox" name="fooby[24][]" id="idNao" value="Não">
                         <label>Não</label>
        
                 </td>
                <td>
                <input type="checkbox" name="fooby[24][]" id="Na">
            </td>
            <td>
                <input type="text" name="observacoes" id="idObs">
            </td>
            </tr>

            <tr>
                 <td>
                    4.12
                 </td>
                 <td>
                    Utiliza proteção respiratória em bom estado de conservação..
                 </td>
                <td>
                <input type="checkbox" name="fooby[25][]" id="idSim" value="Sim">
                         <label>Sim</label>
                <input type="checkbox" name="fooby[25][]" id="idNao" value="Não">
                         <label>Não</label>
            
                 </td>
                <td>
                <input type="checkbox" name="fooby[25][]" id="Na">
            </td>
            <td>
                <input type="text" name="observacoes" id="idObs">
            </td>
            </tr>
            </tbody>
        </table>
    <br>
        <table class="tbl-isnpec" align="center" border="1" cellspacing="10">
            <thead>
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
                <input type="checkbox" name="fooby[26][]" id="idSim" value="Sim">
                         <label>Sim</label>
                <input type="checkbox" name="fooby[26][]" id="idNao" value="Não">
                         <label>Não</label>
        
                 </td>
                <td>
                <input type="checkbox" name="fooby[26][]" id="Na">
            </td>
            <td>
                <input type="text" name="observacoes" id="idObs">
            </td>
            </tr>        
            
            <tr>
                 <td>
                    5.2
                 </td>
                 <td>
                    Utiliza os equipamentos indicados
                 </td>
                <td>
                <input type="checkbox" name="fooby[27][]" id="idSim" value="Sim">
                         <label>Sim</label>
                <input type="checkbox" name="fooby[27][]" id="idNao" value="Não">
                         <label>Não</label>
                </td>
                <td>
                <input type="checkbox" name="fooby[27][]" id="Na">
            </td>
            <td>
                <input type="text" name="observacoes" id="idObs">
            </td>
            </tr>   
            <tr>
                 <td>
                    5.3
                 </td>
                 <td>
                    Utiliza as ferramentas indicadas
                 </td>
                <td>
                <input type="checkbox" name="fooby[28][]" id="idSim" value="Sim">
                         <label>Sim</label>
                <input type="checkbox" name="fooby[28][]" id="idNao" value="Não">
                         <label>Não</label>
                </td>
                <td>
                <input type="checkbox" name="fooby[28][]" id="Na">
            </td>
            <td>
                <input type="text" name="observacoes" id="idObs">
            </td>
            </tr>
            </tbody>
        </table>
<br>
        <table class="tbl-isnpec" align="center" border="1" cellspacing="10">
           <thead>
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
                            <input type="checkbox" name="fooby[29][]" id="idSim" value="Sim">
                         <label>Sim</label>
                            <input type="checkbox" name="fooby[29][]" id="idNao" value="Não">
                         <label>Não</label>
                            </td>
                        <td>
                        <input type="checkbox" name="fooby[29][]" id="Na">
                        </td>
                        <td>
                             <input type="text" name="observacoes" id="idObs">
                        </td>
                </tr>

                <tr>
                        <td>
                            6.2
                        </td>
                        <td>
                            Existe meio de comunicação adequado
                        </td>
                         <td>
                            <input type="checkbox" name="fooby[30][]" id="idSim" value="Sim">
                         <label>Sim</label>
                            <input type="checkbox" name="fooby[30][]" id="idNao" value="Não">
                         <label>Não</label>
                        </td>
                        <td>
                        <input type="checkbox" name="fooby[30][]" id="Na">
                                                        </td>
                                                        <td>
                             <input type="text" name="observacoes" id="idObs">
                        </td>
                </tr>

                <tr>
                        <td>
                            6.3
                        </td>
                        <td>
                            Empregado encontra-se trabalhando em condições físicas <br> e psíquicas adequadas
                         <td>
                <input type="checkbox" name="fooby[31][]" id="idSim" value="Sim">
                         <label>Sim</label>
                <input type="checkbox" name="fooby[31][]" id="idNao" value="Não">
                         <label>Não</label>
                </td>
                        <td>
                        <input type="checkbox" name="fooby[31][]" id="Na">
                                                        </td>
                                                        <td>
                             <input type="text" name="observacoes" id="idObs">
                        </td>
                </tr>
                <tr>
                        <td>
                            6.4
                        </td>
                        <td>
                            Existe supervisão adequada da tarefa
                         <td>
                <input type="checkbox" name="fooby[32][]" id="idSim" value="Sim">
                         <label>Sim</label>
                <input type="checkbox" name="fooby[32][]" id="idNao" value="Não">
                         <label>Não</label>
                </td>
                        <td>
                        <input type="checkbox" name="fooby[32][]" id="Na">
                                                        </td>
                                                        <td>
                             <input type="text" name="observacoes" id="idObs">
                        </td>
                </tr>
            </tbody>
        </table>
<br>
        <table class="tbl-isnpec" align="center" border="1" cellspacing="10">
        <thead>
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
                <input type="checkbox" name="fooby[33][]" id="idSim" value="Sim">
                         <label>Sim</label>
                <input type="checkbox" name="fooby[33][]" id="idNao" value="Não">
                         <label>Não</label>
                </td>
                        <td>
                        <input type="checkbox" name="fooby[33][]" id="Na">
                                                        </td>
                                                        <td>
                             <input type="text" name="observacoes" id="idObs">
                        </td>
                </tr>

                <tr>
                        <td>
                            7.2
                        </td>
                        <td>
                        Existe sinalização completa da área de trabalho
                         <td>
                <input type="checkbox" name="fooby[34][]" id="idSim" value="Sim">
                         <label>Sim</label>
                <input type="checkbox" name="fooby[34][]" id="idNao" value="Não">
                         <label>Não</label>
                </td>
                        <td>
                        <input type="checkbox" name="fooby[34][]" id="Na">
                                                        </td>
                                                        <td>
                             <input type="text" name="observacoes" id="idObs">
                        </td>
                </tr>
            </tbody>
        </table>
<br>
        <table class="tbl-isnpec" align="center" border="1" cellspacing="10">
                <thead>
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
                <input type="checkbox" name="fooby[35][]" id="idSim" value="Sim">
                         <label>Sim</label>
                <input type="checkbox" name="fooby[35][]" id="idNao" value="Não">
                         <label>Não</label>
                </td>
                                <td>
                                <input type="checkbox" name="fooby[35][]" id="Na">
                                </td>
                                 <td>
                                    <input type="text" name="observacoes" id="idObs">
                                 </td>
                        </tr>

                        <tr>
                                <td>
                                    8.2
                                </td>
                                <td>
                                    Foi realizada a conversa de 05 minutos (conversa ao pé do poste)
                                <td>
                <input type="checkbox" name="fooby[36][]" id="idSim" value="Sim">
                         <label>Sim</label>
                <input type="checkbox" name="fooby[36][]" id="idNao" value="Não">
                         <label>Não</label>
                </td>
                                <td>
                                <input type="checkbox" name="fooby[36][]" id="Na">
                                </td>
                                <td>
                                    <input type="text" name="observacoes" id="idObs">
                                </td>
                        </tr>
                    </tbody>
                </table>
<br>
                <table class="tbl-isnpec" align="center" border="1" cellspacing="10">
                        <thead>
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
                <input type="checkbox" name="fooby[37][]" id="idSim" value="Sim">
                         <label>Sim</label>
                <input type="checkbox" name="fooby[37][]" id="idNao" value="Não">
                         <label>Não</label>
                </td>
                                        <td>
                                        <input type="checkbox" name="fooby[37][]" id="Na">
                                        </td>
                                        <td>
                                             <input type="text" name="observacoes" id="idObs">
                                        </td>
                                </tr>

                                <tr>
                                        <td>
                                            9.2
                                        </td>
                                        <td>
                                            Possui qualificação adequada para a atividade em que executa
                                         <td>
                <input type="checkbox" name="fooby[38][]" id="idSim" value="Sim">
                         <label>Sim</label>
                <input type="checkbox" name="fooby[38][]" id="idNao" value="Não">
                         <label>Não</label>
                </td>
                                        <td>
                                        <input type="checkbox" name="fooby[38][]" id="Na">
                                        </td>
                                        <td>
                                            <input type="text" name="observacoes" id="idObs">
                                        </td>
                                </tr>
                                <tr>
                                        <td>
                                            9.3
                                        </td>
                                        <td>
                                             Sabe como agir em caso de ocorrência de emergências,<br>
                                              acidentes ou incidentes do trabalho
                                         <td>
                <input type="checkbox" name="fooby[39][]" id="idSim" value="Sim">
                         <label>Sim</label>
                <input type="checkbox" name="fooby[39][]" id="idNao" value="Não">
                         <label>Não</label>
                </td>
                                        <td>
                                        <input type="checkbox" name="fooby[39][]" id="Na">
                                        </td>
                                        <td>
                                            <input type="text" name="observacoes" id="idObs">
                                        </td>
                                    </tr>
                            </tbody>
                        </table>
<br>
                    <table class="tbl-isnpec" align="center" border="1" cellspacing="10">
                                            <thead>
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
                <input type="checkbox" name="fooby[40][]" id="idSim" value="Sim">
                         <label>Sim</label>
                <input type="checkbox" name="fooby[40][]" id="idNao" value="Não">
                         <label>Não</label>
                </td>
                                                           <td>
                                                           <input type="checkbox" name="fooby[40][]" id="Na">
                                                            </td>
                                                            <td>
                                                                <input type="text" name="observacoes" id="idObs">
                                                            </td>
                                                    </tr>

                                                    <tr>
                                                            <td>
                                                                10.2
                                                            </td>
                                                            <td>
                                                                Possui a documentação do veículo do condutor <br> exigido pelo Código de Trânsito Brasileiro.
                                                             <td>
                <input type="checkbox" name="fooby[41][]" id="idSim" value="Sim">
                         <label>Sim</label>
                <input type="checkbox" name="fooby[41][]" id="idNao" value="Não">
                         <label>Não</label>
                </td>
                                                           <td>
                                                           <input type="checkbox" name="fooby[41][]" id="Na">
                                                        </td>
                                                        <td>
                                                             <input type="text" name="observacoes" id="idObs">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                            <td>
                                                                10.3
                                                            </td>
                                                            <td>
                                                                O transporte de pessoas em veículos é <br> realizado de acordo com as normas de trânsito brasileiro
                                                             <td>
                <input type="checkbox" name="fooby[42][]" id="idSim" value="Sim">
                         <label>Sim</label>
                <input type="checkbox" name="fooby[42][]" id="idNao" value="Não">
                         <label>Não</label>
                </td>
                                                           <td>
                                                            <input type="checkbox" name="fooby[42][]" id="Na">
                                                        </td>
                                                        <td>
                                                             <input type="text" name="observacoes" id="idObs">
                                                        </td>
                                                        </tr>
                                                </tbody>
                                            </table>
<br>
                <table class="tbl-isnpec" align="center" border="1" cellspacing="10">
                    <thead>
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
                <input type="checkbox" name="fooby[43][]" id="idSim" value="Sim">
                         <label>Sim</label>
                <input type="checkbox" name="fooby[43][]" id="idNao" value="Não">
                         <label>Não</label>
                </td>
                                <td>
                                <input type="checkbox" name="fooby[43][]" id="Na">
                                </td>
                                <td>
                                    <input type="text" name="observacoes" id="idObs">
                                </td>
                            </tr>
                    </tbody>

                </table>
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

                <button type="submit"> salvar </button>
    </form>
</body>















</html>