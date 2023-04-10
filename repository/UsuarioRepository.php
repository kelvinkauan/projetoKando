<?php
require_once __DIR__ . "./../connection/connection.php";
require_once __DIR__ . "./../models/UsuarioModel.php";


//$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT); colocar no models

class UsuarioRepository{

    public PDO $conn;

    function __construct(){  

        $this->conn = Connection::getConnection();

    }

    public function create(UsuarioModel $usuario){
        try
        {
            $query = "INSERT INTO usuario (user_name,senha ) VALUES (:username , :senha)";

            $prepare = $this->conn->prepare($query);
            
            $prepare->bindValue(":username", $usuario-> getUser_name());
            

            $prepare->bindValue(":senha", $usuario-> getSenha());

            $prepare->execute();

            return $this->conn->lastInsertId();
        }
        catch(Exception $e)
        {
            
            print("Erro ao inserir usuario no banco de dados!");

            }

        }


        public function findAll(): array 
        {

            $table = $this->conn->query("SELECT * FROM usuario"); 

            $usuario  = $table->fetchAll(PDO::FETCH_ASSOC);

            return $usuario;

        }


        public function loginUsuario($username, $senha)
        {
            try
            {
                $query = "SELECT idUsuario, user_name , senha FROM usuario WHERE user_name = :username AND senha = :senha";
                $prepare = $this -> conn -> prepare($query);
                $prepare ->bindValue(":username", $username);
                $prepare ->bindValue(":senha", $senha);
                $prepare -> execute();
                $result = $prepare->fetch();

                if(!$result)
                {
                    $msg = print("Usuario ou Senha estão incorretas");
                }
                else
                {
                    session_start();
                    $_SESSION['Logado'] = true;
                    $_SESSION['User'] = $result['idUsuario'];
                }
                return $result;

            }
            catch(Exception $e)
            {
                $e = print("Erro!");
            }
            $this->findAll($msg);


        }


        public function findUserByID():array{
            $query = "SELECT idUsuario, user_name, email,senha FROM usuario WHERE idUsuario = :id LIMIT 1";
            $prepare = $this->conn->prepare($query);
            $prepare->bindParam(":id",  $_SESSION['User'], PDO::PARAM_INT );
            $prepare->execute();

            if(($prepare) and ($prepare->rowCount() !=0)){
                $row = $prepare ->fetch(PDO::FETCH_ASSOC);  
            return $row;  
            }
        }
 


        public function findFormById():array{
            $query = "SELECT*FROM formulario WHERE idUsuario = :id LIMIT 1";
            $prepare = $this->conn->prepare($query);    
            $prepare->bindParam(":id", $_SESSION['User'], PDO::PARAM_INT);
            $prepare->execute();
            return $prepare->fetchAll(PDO::FETCH_ASSOC);

        

    }
    

    }




?>