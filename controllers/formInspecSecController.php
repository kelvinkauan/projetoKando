<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require_once __DIR__."/../models/formInspecModel.php";
    require_once __DIR__."/../repository/formInspecRepository.php";
    require_once __DIR__ ."/../repository/formInspecSecRepository.php";
    require_once __DIR__."/../repository/UsuarioRepository.php";

     $form = new formInspecSecController();

     class formInspecSecController{

        function __construct()
        {
            session_start();
          
            if(isset($_POST["action"])){
                $action = $_POST["action"];
            }else if(isset($_GET["action"])){
                $action = $_GET["action"];
            }

            if(isset($action)){
                $this->callAction($action);
            }else{
                $this->loadView("/error/erro.php");
                $msg = "<h2>Nenhuma ação a ser processada...<h2>"; 
                print_r($msg);
            }

        }

        public function callAction(string $functionName = null){

            if (method_exists($this, $functionName)) {
                $this->$functionName();
            } else if(method_exists($this, "preventDefault")) {
                $met = "preventDefault";
                $this->$met();
            } else {
                throw new BadFunctionCallException("Usecase not exists");
            }

        }

        public function loadView(string $path, array $data = null, string $msg = null){

            $caminho = __DIR__."/../views/".$path;
          if(file_exists($caminho)){
            
                require $caminho;

          }else{
            echo ("<h2> Erro ao carregar a view<h2>"); 
          }

          
        }

        

        private function Salvar(){
            $form = new formInspecionarSecundarioRepositoy;
            $valor = 1 ;
            $value = 2;
            $val = 3;
            $contSim = $form ->contagemValor($valor);
            $contNao = $form ->contagemValor($value); 
            $contNa = $form ->contagemValor($val); 

                $dados = new formInspecionarRepositoy;
                $dadosModel =$dados->takeFormById();
                $data['formulario'] = $dadosModel;

           

            foreach($_POST["item"] as $etapa => $infoSubEtapa){
                foreach($infoSubEtapa as $subEtapa => $info){
                    
                    $model = new formInspecionarSecundarioModel;
                    $model -> setObservacao($info["observacao"]);
                    $model -> setNome($info["nome"]);
                    $model -> setValor($info["valor"]);
                    $model -> setEtapa($etapa);
                    $model -> setSubEtapa($subEtapa);

                    $formRepository = new formInspecionarSecundarioRepositoy;
            
                    $id = $formRepository -> salvar($model);
                }

            }
            if( $id){
                $this->loadView("charts.php", compact('contSim','contNao', 'contNa','data'));
            }
        

        }

     
        public function contarValor(){
            $form = new formInspecionarSecundarioRepositoy;
            $valor = 1 ;
            $value = 2;
            $val = 3;
            $contSim = $form ->contagemValor($valor);
            $contNao = $form ->contagemValor($value); 
            $contNa = $form ->contagemValor($val); 

            // var_dump($contSim , $contNao, $contNa);
            
            $this->loadView("charts.php", compact('contSim','contNao', 'contNa'));
        }
        
        
    
        






     }






?>