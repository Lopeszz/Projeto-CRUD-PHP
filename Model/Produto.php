<?php

class Produto
{
    private $id_produto;

    private $nome;

    private $descricao;

    private $preco;

    private $qtd;

	private $fornecedor_id;


    public function __construct($nome, $descricao, $preco, $qtd, $fornecedor_id = null, $id_produto = null,)
    {
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->qtd = $qtd;
		$this->fornecedor_id = $fornecedor_id;
		$this->id_produto = $id_produto;
    }


	/**
	 * @return mixed
	 */
	public function getId_produto() {
		return $this->id_produto;
	}
	
	/**
	 * @param mixed $id_produto 
	 * @return self
	 */
	public function setId_produto($id_produto): self {
		$this->id_produto = $id_produto;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getNome() {
		return $this->nome;
	}
	
	/**
	 * @param mixed $nome 
	 * @return self
	 */
	public function setNome($nome): self {
		$this->nome = $nome;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getDescricao() {
		return $this->descricao;
	}
	
	/**
	 * @param mixed $descricao 
	 * @return self
	 */
	public function setDescricao($descricao): self {
		$this->descricao = $descricao;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getPreco() {
		return $this->preco;
	}
	
	/**
	 * @param mixed $preco 
	 * @return self
	 */
	public function setPreco($preco): self {
		$this->preco = $preco;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getqtd() {
		return $this->qtd;
	}
	
	/**
	 * @param mixed $qtd 
	 * @return self
	 */
	public function setqtd($qtd): self {
		$this->qtd = $qtd;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getFornecedor_id() {
		return $this->fornecedor_id;
	}

	/**
	 * @param mixed $fornecedor_id 
	 * @return self
	 */
	public function setFornecedor_id($fornecedor_id): self {
		$this->fornecedor_id = $fornecedor_id;
		return $this;
	}
}

?>