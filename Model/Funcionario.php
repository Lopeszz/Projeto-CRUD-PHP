<?php

class Funcionario
{

	private $id_funcionario;

    private $nome;

	private $cpf;

	private $email;

	private $usuario;

	private $senha;

	private $salario;

    private $celular;

    private $nivel_acesso;


    public function __construct($nome, $cpf, $email, $usuario, $senha, $salario, $celular, $nivel_acesso, $id_funcionario = null)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->usuario = $usuario;
        $this->senha = $senha;
		$this->salario = $salario;
		$this->celular = $celular;
		$this->nivel_acesso = $nivel_acesso;
		$this->id_funcionario = $id_funcionario;
    }

	/**
	 * @return mixed
	 */
	public function getId_funcionario() {
		return $this->id_funcionario;
	}
	
	/**
	 * @param mixed $id_funcionario 
	 * @return self
	 */
	public function setId_funcionario($id_funcionario): self {
		$this->id_funcionario = $id_funcionario;
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
	public function getCpf() {
		return $this->cpf;
	}
	
	/**
	 * @param mixed $cpf 
	 * @return self
	 */
	public function setCpf($cpf): self {
		$this->cpf = $cpf;
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
	public function getSalario() {
		return $this->salario;
	}
	
	/**
	 * @param mixed $salario 
	 * @return self
	 */
	public function setSalario($salario): self {
		$this->salario = $salario;
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
	public function getNivel_acesso() {
		return $this->nivel_acesso;
	}
	
	/**
	 * @param mixed $nivel_acesso 
	 * @return self
	 */
	public function setNivel_acesso($nivel_acesso): self {
		$this->nivel_acesso = $nivel_acesso;
		return $this;
	}
}
?>