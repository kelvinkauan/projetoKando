<?php

require_once __DIR__ . "./../connection/connection.php";
require_once __DIR__ . "./../models/formInspecModel.php";


//$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT); colocar no models

class formInspecionarRepositoy {

    public PDO $conn;

    function __construct(){  

        $this->conn = Connection::getConnection();

    }


    public function carregarForm(FormInspecionarModel $form){
        try
        {   
        $query = "INSERT INTO formulario (NOS, empresa, diretoria, data_form, hora, atividade, endereco, Nempregados, bairro, cidade, inspetor, placaVeiculo, tipoContrato, responsavel, departamento, gerencia) VALUES (:nos, :empresa, :diretoria, :data_form, :hora, :atividade, :endereco, :empregados, :bairro, :cidade, :inspetor, :placa, :contrato, :responsavel, :departamento, :gerencia)";
        
        $prepare = $this->conn->prepare($query);

        $prepare->bindValue(":nos", $form->getNOS());
        $prepare->bindValue(":empresa", $form->getEmpresa());
        $prepare->bindValue(":diretoria", $form->getDiretoria());
        $prepare->bindValue(":data_form", $form->getData_form());
        $prepare->bindValue(":hora", $form->getHora());
        $prepare->bindValue(":atividade", $form->getAtividade());
        $prepare->bindValue(":endereco", $form->getEndereco());
        $prepare->bindValue(":empregados", $form->getNempregados());
        $prepare->bindValue(":bairro", $form->getBairro());
        $prepare->bindValue(":cidade", $form->getCidade());
        $prepare->bindValue(":inspetor", $form->getInspetor());
        $prepare->bindValue(":placa",$form->getPlacaVeiulo());
        $prepare->bindValue(":contrato", $form->getTipoContrato());
        $prepare->bindValue(":responsavel", $form->getResponsavel());
        $prepare->bindValue(":departamento", $form->getDepartamento());
        $prepare->bindValue(":gerencia", $form->getGerencia());
        
        $prepare->execute();

        return $this->conn->lastInsertId();


            
        }
        catch(Exception $e)
        {
            
            print("Erro ao salvar formulário no banco de dados!");

            }

        }

        public function findAll(): array 
        {

            $table = $this->conn->query("SELECT * FROM formulario"); 

            $usuario  = $table->fetchAll(PDO::FETCH_ASSOC);

            return $usuario;

        }
    


}

?>