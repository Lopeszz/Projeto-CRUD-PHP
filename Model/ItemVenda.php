<?php

class ItemVenda
{

    private $id_ItemVenda;
    private $venda_id;
    private $produto_id;
    private $qtd;

    private $subtotal;




    public function __construct($id_ItemVenda = null, $venda_id = null, $produto_id = null, $qtd, $subtotal)
    {
        $this->id_ItemVenda = $id_ItemVenda;
        $this->venda_id = $venda_id;
        $this->produto_id = $produto_id;
        $this->qtd = $qtd;
        $this->subtotal = $subtotal;
    }

    /**
     * @return mixed
     */
    public function getId_ItemVenda()
    {
        return $this->id_ItemVenda;
    }

    /**
     * @param mixed $id_ItemVenda 
     * @return self
     */
    public function setId_ItemVenda($id_ItemVenda): self
    {
        $this->id_ItemVenda = $id_ItemVenda;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVenda_id()
    {
        return $this->venda_id;
    }

    /**
     * @param mixed $venda_id 
     * @return self
     */
    public function setVenda_id($venda_id): self
    {
        $this->venda_id = $venda_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProduto_id()
    {
        return $this->produto_id;
    }

    /**
     * @param mixed $produto_id 
     * @return self
     */
    public function setProduto_id($produto_id): self
    {
        $this->produto_id = $produto_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQtd()
    {
        return $this->qtd;
    }

    /**
     * @param mixed $qtd 
     * @return self
     */
    public function setQtd($qtd): self
    {
        $this->qtd = $qtd;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }

    /**
     * @param mixed $subtotal 
     * @return self
     */
    public function setSubtotal($subtotal): self
    {
        $this->subtotal = $subtotal;
        return $this;
    }
}
?>