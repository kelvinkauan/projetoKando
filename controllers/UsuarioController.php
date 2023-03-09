<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once __DIR__ ."/../repository/UsuarioRepository.php";

     $usuario = new UsuarioController();



    class UsuarioController
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
        private function loadForm(){ //loadFormNew
        
            $usuarioRepository = new UsuarioRepository();
            $usuario = $usuarioRepository->findAll();
            $data['titulo'] = "usuario";
            $data['usuario'] = $usuario;
            $this->loadView("login/index.php", $data);
    
        }

       

        private function create(){

            $usuario = new UsuarioModel();
            $usuario -> setUser_name($_POST["username"]);
            $usuario -> setEmail($_POST["email"]);
            $usuario -> setSenha($_POST["senha"]);

            $usuarioRepository = new UsuarioRepository();

            $id = $usuarioRepository -> create($usuario);
            if($id)
            {
                echo  "cadastrado com sucesso";
                $this->loadView("login/index.php"); 


           }
            

        }

        private function login(){
            $usuario= new UsuarioRepository();
            if(isset($_POST['login'])){
                $loginuser = $usuario -> loginUsuario($_POST['username'], $_POST['senha']);
            }if($loginuser){
                header("location: ./UsuarioController.php?action=PaginaPrincipal");
            }
            $this->loadView("login/index.php");
        }

        private function PaginaPrincipal(string $msg = null){

           
            if($_SESSION ["Logado"] == true){
               
                $dadosUser = new UsuarioRepository();
                $usuario= $dadosUser->findUserById();
                $data['usuario'] = $usuario; 


                $this->loadView("PaginaPrincipal.php", $data, $msg);
            } else {
                header("Location: ./UsuarioControllor.php?action=login");
            }
        
        }
        private function CarregarForm(string $msg =null){

            if($_SESSION["Logado"] == true){
                $dadosUser = new UsuarioRepository();
                $usuario= $dadosUser->findUserById();
                $data['usuario'] = $usuario; 


                $this->loadView("inspecao.php", $data, $msg);
            }
        }
       



    }


?>