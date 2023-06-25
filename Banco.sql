create database gico;
use gico;

CREATE TABLE cliente (
  id_cliente integer auto_increment primary key,
  nome varchar(400),
  cpf varchar (20),
  email varchar(400),
  usuario varchar(400),
  senha varchar (500),
  celular varchar(400),
  cep varchar(400),
  rua varchar (255),
  numero integer,
  complemento varchar (200),		
  bairro varchar (100),
  cidade varchar (100),
  estado varchar (2), 
  nivel_acesso varchar(50)
);

CREATE TABLE funcionario (
  id_funcionario integer auto_increment primary key,
  nome varchar(400),
  cpf varchar (20),
  email varchar(50),
  usuario varchar(400),
  senha varchar(400),
  salario varchar(50),
  celular varchar(400),
  nivel_acesso varchar(50)
);
CREATE TABLE fornecedor (
  id_fornecedor integer auto_increment primary key,
  nome varchar(400),
  cnpj varchar (100),
  email varchar(400),
  usuario varchar(400),
  senha varchar(400),
  celular varchar(400),
  cep varchar(400),
  rua varchar (255),
  numero integer,
  complemento varchar (200),
  bairro varchar (100),
  cidade varchar (100),
  estado varchar (2) 
);

create table licitacao(
	id_licitacao integer auto_increment primary key,
	fornecedor_id integer,
	funcionario_id integer,
    MetodoPagamento_id integer,
	data_licitacao varchar(50),
	total_licitacao decimal (10,2),
	observacoes varchar(5000)
);

CREATE TABLE itemlicitacao (
	id_itemlicitacao integer auto_increment primary key,
	licitacao_id integer,
	produto_id integer,
	qtd integer,
	subtotal decimal (10,2)
); 

CREATE TABLE produto (
  id_produto integer auto_increment primary key,
  nome varchar(400),
  descricao varchar(400),
  preco decimal (10,2),
  qtd_estoque integer,
  fornecedor_id integer
);

create table grupodoproduto(
	id_GrupodoProduto integer not null auto_increment primary key,
	nome varchar(400) not null
);
create table subgrupodoproduto(
	id_subGrupodoProduto integer not null auto_increment primary key,
    GrupodoProduto_id integer not null,
    produto_id integer not null,
	nome varchar(400) not null
); 

CREATE TABLE venda (
	id_venda integer auto_increment primary key,
	situacao boolean,
	observacoes varchar(5000),
	data_venda varchar(400),
	total_venda decimal (10,2),
	funcionario_id integer,
	cliente_id integer,
  metodoPagamento_id integer
);
CREATE TABLE itemvenda (
	id_itemVenda integer auto_increment primary key,
	venda_id integer,
	produto_id integer,
	qtd integer,
	subtotal decimal (10,2)
); 

CREATE TABLE MetodoPagamento(
	id_MetodoPagamento integer auto_increment primary key,
    nome varchar(5000)
);

ALTER TABLE licitacao
add constraint FK_FuncionarioIDdaLicitacao FOREIGN KEY (funcionario_id) REFERENCES funcionario(id_funcionario),
add constraint FK_MetodoPagamenetoDaLicitacao FOREIGN KEY (MetodoPagamento_id) REFERENCES MetodoPagamento(id_MetodoPagamento);

ALTER TABLE itemlicitacao
add constraint FK_licitacaoID FOREIGN KEY (licitacao_id) REFERENCES licitacao(id_licitacao),
add constraint FK_ProdutoIDdoItemLicitacao FOREIGN KEY (produto_id) REFERENCES produto(id_produto);
	
ALTER TABLE produto
add constraint FK_FornecedorID FOREIGN KEY (fornecedor_id) REFERENCES fornecedor(id_fornecedor);

ALTER TABLE subgrupodoproduto
add constraint FK_Grupodoproduto FOREIGN KEY (grupodoproduto_id) references grupodoproduto(id_grupodoproduto),
add constraint FK_ProdutoIDdoSubGrupo FOREIGN KEY (produto_id) references produto(id_produto);

ALTER TABLE venda
add constraint FK_MetodoPagamenetoDaVenda FOREIGN KEY (MetodoPagamento_id) REFERENCES MetodoPagamento(id_MetodoPagamento),
add constraint FK_ClienteID FOREIGN KEY (cliente_id) REFERENCES cliente(id_cliente),
add constraint FK_FuncionarioIDdaVenda FOREIGN KEY (funcionario_id) REFERENCES funcionario(id_funcionario);

ALTER TABLE itemvenda
add constraint FK_VendaID FOREIGN KEY (venda_id) REFERENCES venda(id_venda),
add constraint FK_ProdutoIDdoItemVenda FOREIGN KEY (produto_id) REFERENCES produto(id_produto);




