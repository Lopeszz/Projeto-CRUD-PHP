<?php

class Fornecedor
{

	private $id_fornecedor;

    private $nome;

	private $cnpj;

	private $email;

	private $usuario;

	private $senha;

	private $celular;

    private $cep;

    private $rua;

    private $numero;

    private $complemento;

    private $bairro;

    private $cidade;

    private $estado;

    public function __construct($nome, $cnpj, $email, $usuario, $senha, $celular, $cep, $rua, $numero, $complemento, $bairro, $cidade, $estado, $id_fornecedor = null)
    {
        $this->nome = $nome;
        $this->cnpj = $cnpj;
        $this->email = $email;
        $this->usuario = $usuario;
        $this->senha = $senha;
        $this->celular = $celular;
		$this->cep = $cep;
		$this->rua = $rua;
		$this->numero = $numero;
		$this->complemento = $complemento;
		$this->bairro = $bairro;
		$this->cidade = $cidade;
		$this->estado = $estado;
		$this->id_fornecedor = $id_fornecedor;
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
	public function getUsuario() {
		return $this->usuario;
	}
	
	/**
	 * @param mixed $usuario 
	 * @return self
	 */
	public function setUsuario($usuario): self {
		$this->usuario = $usuario;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getSenha() {
		return $this->senha;
	}
	
	/**
	 * @param mixed $senha 
	 * @return self
	 */
	public function setSenha($senha): self {
		$this->senha = $senha;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getEmail() {
		return $this->email;
	}
	
	/**
	 * @param mixed $email 
	 * @return self
	 */
	public function setEmail($email): self {
		$this->email = $email;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCelular() {
		return $this->celular;
	}
	
	/**
	 * @param mixed $celular 
	 * @return self
	 */
	public function setCelular($celular): self {
		$this->celular = $celular;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCep() {
		return $this->cep;
	}
	
	/**
	 * @param mixed $cep 
	 * @return self
	 */
	public function setCep($cep): self {
		$this->cep = $cep;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getRua() {
		return $this->rua;
	}
	
	/**
	 * @param mixed $rua 
	 * @return self
	 */
	public function setRua($rua): self {
		$this->rua = $rua;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getComplemento() {
		return $this->complemento;
	}
	
	/**
	 * @param mixed $complemento 
	 * @return self
	 */
	public function setComplemento($complemento): self {
		$this->complemento = $complemento;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getNumero() {
		return $this->numero;
	}
	
	/**
	 * @param mixed $numero 
	 * @return self
	 */
	public function setNumero($numero): self {
		$this->numero = $numero;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getBairro() {
		return $this->bairro;
	}
	
	/**
	 * @param mixed $bairro 
	 * @return self
	 */
	public function setBairro($bairro): self {
		$this->bairro = $bairro;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCidade() {
		return $this->cidade;
	}
	
	/**
	 * @param mixed $cidade 
	 * @return self
	 */
	public function setCidade($cidade): self {
		$this->cidade = $cidade;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getEstado() {
		return $this->estado;
	}
	
	/**
	 * @param mixed $estado 
	 * @return self
	 */
	public function setEstado($estado): self {
		$this->estado = $estado;
		return $this;
	}



	/**
	 * @return mixed
	 */
	public function getId_fornecedor() {
		return $this->id_fornecedor;
	}
	
	/**
	 * @param mixed $id_fornecedor 
	 * @return self
	 */
	public function setId_fornecedor($id_fornecedor): self {
		$this->id_fornecedor = $id_fornecedor;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCnpj() {
		return $this->cnpj;
	}
	
	/**
	 * @param mixed $cnpj 
	 * @return self
	 */
	public function setCnpj($cnpj): self {
		$this->cnpj = $cnpj;
		return $this;
	}
}
?>