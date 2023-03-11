<?php
class formInspecionarSecundarioModel{
    private $idEtapa;
    private $observacao;
    private $nome;
    private $valor;
    private $etapa;
    private $subEtapa;   

    /**
     * Get the value of idEtapa
     */ 
    public function getIdEtapa()
    {
        return $this->idEtapa;
    }

    /**
     * Set the value of idEtapa
     *
     * @return  self
     */ 
    public function setIdEtapa($idEtapa)
    {
        $this->idEtapa = $idEtapa;

        return $this;
    }

    /**
     * Get the value of observacao
     */ 
    public function getObservacao()
    {
        return $this->observacao;
    }

    /**
     * Set the value of observacao
     *
     * @return  self
     */ 
    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;

        return $this;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of valor
     */ 
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     *
     * @return  self
     */ 
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get the value of etapa
     */ 
    public function getEtapa()
    {
        return $this->etapa;
    }

    /**
     * Set the value of etapa
     *
     * @return  self
     */ 
    public function setEtapa($etapa)
    {
        $this->etapa = $etapa;

        return $this;
    }

    /**
     * Get the value of subEtapa
     */ 
    public function getSubEtapa()
    {
        return $this->subEtapa;
    }

    /**
     * Set the value of subEtapa
     *
     * @return  self
     */ 
    public function setSubEtapa($subEtapa)
    {
        $this->subEtapa = $subEtapa;

        return $this;
    }
}








?>