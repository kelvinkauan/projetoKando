<?php
class Usuariomodel{
    private $idUsuario;
    private $user_name;
    private $email;
    private $senha;

 
    public function getIdUsuario():int
    {
        return $this->idUsuario;
    }

   
    public function setIdUsuario(int $id)
    {
        $this->idUsuario = $id;

        return $this;
    }

 
    public function getUser_name():string
    {
        return $this->user_name;
    }

   
    public function setUser_name(string $username)
    {
        $this->user_name = $username;

        return $this;
    }

   
    public function getEmail():string
    {
        return $this->email;
    }

   
    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
    }


    public function getSenha():string
    {
        return $this->senha;
    }

   
    public function setSenha(string $senha)
    {
        $this->senha = $senha;

        return $this;
    }
}





?>