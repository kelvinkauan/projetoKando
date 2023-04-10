<?php

require_once __DIR__ . "./../connection/connection.php";
require_once __DIR__."./../models/formInspecSecModel.php";

class formInspecionarSecundarioRepositoy {

    public PDO $conn;

    function __construct(){  

        $this->conn = Connection::getConnection();

    }


    public function salvar(formInspecionarSecundarioModel $model){
        try{

        $query ="INSERT INTO etapa (observacao, nome, valor, etapa, subEtapa, idUsuario) VALUES (:observacao, :nome, :valor, :etapa, :subEtapa, :idUser)";
        $prepare = $this->conn->prepare($query);
        $prepare -> bindValue(":observacao",$model->getObservacao());
        $prepare -> bindValue(":nome", $model->getNome());
        $prepare ->bindValue(":valor", $model->getValor());
        $prepare -> bindValue(":etapa", $model->getEtapa());
        $prepare -> bindValue(":subEtapa", $model->getSubEtapa());
        $prepare -> bindValue(":idUser", $_SESSION['User']);
        
        $prepare->execute();

        return $this->conn->lastInsertId();
            
        }
        catch(Exception $e)
        {
            
            print("Erro ao inserir no banco de dados!");

            }

        }

       

        public function contagemValor( $valor){
            $query = "SELECT COUNT(valor) as c FROM etapa WHERE valor = :valor AND idUsuario = :idUser ";
    
            $prepare = $this->conn->prepare($query);
            $prepare->bindValue(":valor", $valor );
            $prepare->bindValue(":idUser",$_SESSION['User']);
            $prepare->execute();
            $result = $prepare->fetch(PDO::FETCH_ASSOC);
            return $result;

            }
            







}






?>