<?php

class FormInspecionarModel{

    private $idFormulario;
    private $NOS;
    private $empresa;
    private $diretoria;
    private $data_form;
    private $hora; 
    private $atividade;
    private $endereco;
    private $Nempregados;
    private $bairro;
    private $cidade;
    private $inspetor;
    private $placaVeiulo;
    private $tipoContrato;
    private $responsavel;
    private $departamento;
    private $gerencia;






    
    public function getIdFormulario()
    {
        return $this->idFormulario;
    }

    
    public function setIdFormulario($idFormulario)
    {
        $this->idFormulario = $idFormulario;

        return $this;
    }

    
    public function getNOS()
    {
        return $this->NOS;
    }

    
    public function setNOS($nos)
    {
        $this->NOS = $nos;

        return $this;
    }

    
    public function getEmpresa()
    {
        return $this->empresa;
    }

   
    public function setEmpresa($empresa)
    {
        $this->empresa = $empresa;

        return $this;
    }

    
    public function getDiretoria()
    {
        return $this->diretoria;
    }

    
    public function setDiretoria($diretoria)
    {
        $this->diretoria = $diretoria;

        return $this;
    }


    
    public function getHora()
    {
        return $this->hora;
    }

    
    public function setHora($hora)
    {
        $this->hora = $hora;

        return $this;
    }

    
    public function getAtividade()
    {
        return $this->atividade;
    }

    
    public function setAtividade($atividade)
    {
        $this->atividade = $atividade;

        return $this;
    }

    
    public function getEndereco()
    {
        return $this->endereco;
    }

    
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }

     
    public function getNempregados()
    {
        return $this->Nempregados;
    }

     
    public function setNempregados($empregados)
    {
        $this->Nempregados = $empregados;

        return $this;
    }

     
    public function getBairro()
    {
        return $this->bairro;
    }

     
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;

        return $this;
    }

    
    public function getCidade()
    {
        return $this->cidade;
    }

     
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

     
    public function getInspetor()
    {
        return $this->inspetor;
    }

    
    public function setInspetor($inspetor)
    {
        $this->inspetor = $inspetor;

        return $this;
    }

    
    public function getPlacaVeiulo()
    {
        return $this->placaVeiulo;
    }

     
    public function setPlacaVeiulo($placa)
    {
        $this->placaVeiulo = $placa;

        return $this;
    }

    
    public function getTipoContrato()
    {
        return $this->tipoContrato;
    }

     
    public function setTipoContrato($contrato)
    {
        $this->tipoContrato = $contrato;

        return $this;
    }

     
    public function getResponsavel()
    {
        return $this->responsavel;
    }

    
    public function setResponsavel($responsavel)
    {
        $this->responsavel = $responsavel;

        return $this;
    }

     
    public function getDepartamento()
    {
        return $this->departamento;
    }

    
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;

        return $this;
    }

    
    public function getData_form()
    {
        return $this->data_form;
    }


    public function setData_form($data_form)
    {
        $this->data_form = $data_form;

        return $this;
    }

    
     
    public function getGerencia()
    {
        return $this->gerencia;
    }

    
    public function setGerencia($gerencia)
    {
        $this->gerencia = $gerencia;

        return $this;
    }
} 






?>

