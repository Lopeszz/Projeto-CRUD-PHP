<?php

class MetodoPagamento
{
	private $id_metodoPagamento;

	private $nome;

	public function __construct($nome, $id_metodoPagamento = null)
	{
		$this->nome = $nome;
		$this->id_metodoPagamento = $id_metodoPagamento;
	}

	/**
	 * @return mixed
	 */
	public function getId_metodoPagamento()
	{
		return $this->id_metodoPagamento;
	}

	/**
	 * @param mixed $id_metodoPagamento
	 * @return self
	 */
	public function setId_metodoPagamento($id_metodoPagamento): self
	{
		$this->id_metodoPagamento = $id_metodoPagamento;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getNome()
	{
		return $this->nome;
	}

	/**
	 * @param mixed $nome
	 * @return self
	 */
	public function setNome($nome): self
	{
		$this->nome = $nome;
		return $this;
	}
}
?>