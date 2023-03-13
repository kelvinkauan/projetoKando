<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once __DIR__ ."/../repository/formInspecRepository.php";

     $form = new formInspecController();



    class formInspecController
    {
        
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

        private function carregarForm(){
            $form = new FormInspecionarModel;
            $form -> setNOS($_POST["nos"]);
            $form -> setEmpresa($_POST["empresa"]);
            $form -> setDiretoria($_POST["diretoria"]);
            $form -> setData_form($_POST["data_form"]);
            $form -> setHora($_POST["hora"]);
            $form -> setAtividade($_POST["atividade"]);
            $form -> setEndereco($_POST["endereco"]);
            $form -> setNempregados($_POST["empregados"]);
            $form -> setBairro($_POST["bairro"]);
            $form -> setCidade($_POST["cidade"]);
            $form -> setInspetor($_POST["inspetor"]);
            $form -> setPlacaVeiulo($_POST["placa"]);
            $form -> setTipoContrato($_POST["contrato"]);
            $form -> setResponsavel($_POST["responsavel"]);
            $form -> setDepartamento($_POST["departamento"]);
            $form -> setGerencia($_POST["gerencia"]);

            $formRepository = new formInspecionarRepositoy;
            
            $id = $formRepository -> carregarForm($form);

            if($id){
                $this->loadView("inspecao2.php");
              
            }

        }






    }
        ?>