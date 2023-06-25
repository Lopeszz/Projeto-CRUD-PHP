<?php

class Venda
{
    private $id_venda;
    private $situacao;
    private $observacoes;
    private $data_venda;
    private $total_venda;
    private $funcionario_id;
    private $cliente_id;
    private $metodoPagamento_id;

    public function __construct($id_venda, $situacao, $observacoes, $data_venda, $total_venda, $funcionario_id = null, $cliente_id = null, $metodoPagamento_id = null)
    {
        $this->id_venda = $id_venda;
        $this->situacao = $situacao;
        $this->observacoes = $observacoes;
        $this->data_venda = $data_venda;
        $this->total_venda = $total_venda;
        $this->funcionario_id = $funcionario_id;
        $this->cliente_id = $cliente_id;
        $this->metodoPagamento_id = $metodoPagamento_id;
    }

    /**
     * @return mixed
     */
    public function getSituacao()
    {
        return $this->situacao;
    }

    /**
     * @param mixed $situacao 
     * @return self
     */
    public function setSituacao($situacao): self
    {
        $this->situacao = $situacao;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId_venda()
    {
        return $this->id_venda;
    }

    /**
     * @param mixed $id_venda 
     * @return self
     */
    public function setId_venda($id_venda): self
    {
        $this->id_venda = $id_venda;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getData_venda()
    {
        return $this->data_venda;
    }

    /**
     * @param mixed $data_venda 
     * @return self
     */
    public function setData_venda($data_venda): self
    {
        $this->data_venda = $data_venda;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFuncionario_id()
    {
        return $this->funcionario_id;
    }

    /**
     * @param mixed $funcionario_id 
     * @return self
     */
    public function setFuncionario_id($funcionario_id): self
    {
        $this->funcionario_id = $funcionario_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCliente_id()
    {
        return $this->cliente_id;
    }

    /**
     * @param mixed $cliente_id 
     * @return self
     */
    public function setCliente_id($cliente_id): self
    {
        $this->cliente_id = $cliente_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMetodoPagamento_id()
    {
        return $this->metodoPagamento_id;
    }

    /**
     * @param mixed $metodoPagamento_id 
     * @return self
     */
    public function setMetodoPagamento_id($metodoPagamento_id): self
    {
        $this->metodoPagamento_id = $metodoPagamento_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTotal_venda()
    {
        return $this->total_venda;
    }

    /**
     * @param mixed $total_venda 
     * @return self
     */
    public function setTotal_venda($total_venda): self
    {
        $this->total_venda = $total_venda;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getObservacoes()
    {
        return $this->observacoes;
    }

    /**
     * @param mixed $observacoes 
     * @return self
     */
    public function setObservacoes($observacoes): self
    {
        $this->observacoes = $observacoes;
        return $this;
    }
}
?>