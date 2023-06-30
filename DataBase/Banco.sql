drop database gico;
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
	data_venda datetime,
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
	id_metodoPagamento integer auto_increment primary key,
    nome varchar(5000)
);

ALTER TABLE licitacao
add constraint FK_FuncionarioIDdaLicitacao FOREIGN KEY (funcionario_id) REFERENCES funcionario(id_funcionario),
add constraint FK_MetodoPagamenetoDaLicitacao FOREIGN KEY (MetodoPagamento_id) REFERENCES MetodoPagamento(id_metodoPagamento);

ALTER TABLE itemlicitacao
add constraint FK_licitacaoID FOREIGN KEY (licitacao_id) REFERENCES licitacao(id_licitacao),
add constraint FK_ProdutoIDdoItemLicitacao FOREIGN KEY (produto_id) REFERENCES produto(id_produto);
	
ALTER TABLE produto
add constraint FK_FornecedorID FOREIGN KEY (fornecedor_id) REFERENCES fornecedor(id_fornecedor);

ALTER TABLE subgrupodoproduto
add constraint FK_Grupodoproduto FOREIGN KEY (grupodoproduto_id) references grupodoproduto(id_grupodoproduto),
add constraint FK_ProdutoIDdoSubGrupo FOREIGN KEY (produto_id) references produto(id_produto);

ALTER TABLE venda
add constraint FK_MetodoPagamenetoDaVenda FOREIGN KEY (MetodoPagamento_id) REFERENCES MetodoPagamento(id_metodoPagamento),
add constraint FK_ClienteID FOREIGN KEY (cliente_id) REFERENCES cliente(id_cliente),
add constraint FK_FuncionarioIDdaVenda FOREIGN KEY (funcionario_id) REFERENCES funcionario(id_funcionario);

ALTER TABLE itemvenda
add constraint FK_VendaID FOREIGN KEY (venda_id) REFERENCES venda(id_venda),
add constraint FK_ProdutoIDdoItemVenda FOREIGN KEY (produto_id) REFERENCES produto(id_produto);

-- Inserções na tabela cliente
INSERT INTO cliente (nome, cpf, email, usuario, senha, celular, cep, rua, numero, complemento, bairro, cidade, estado, nivel_acesso)
VALUES
('Ana Oliveira', '111.222.333-44', 'ana@example.com', 'anaoliveira', 'senha456', '987654321', '12345-678', 'Rua C', 456, 'Apto 789', 'Centro', 'São Paulo', 'SP', 'Usuário'),
('Pedro Santos', '222.333.444-55', 'pedro@example.com', 'pedrosantos', 'senha789', '987654321', '54321-876', 'Rua D', 789, 'Loja 987', 'Centro', 'São Paulo', 'SP', 'Usuário'),
('Mariana Lima', '333.444.555-66', 'mariana@example.com', 'marianalima', 'senha123', '987654321', '12345-678', 'Rua E', 123, 'Apto 654', 'Centro', 'São Paulo', 'SP', 'Usuário'),
('Rafaela Costa', '444.555.666-77', 'rafaela@example.com', 'rafaelacosta', 'senha456', '987654321', '54321-876', 'Rua F', 789, 'Loja 321', 'Centro', 'São Paulo', 'SP', 'Usuário'),
('Gabriel Silva', '555.666.777-88', 'gabriel@example.com', 'gabrielsilva', 'senha789', '987654321', '12345-678', 'Rua G', 456, 'Apto 987', 'Centro', 'São Paulo', 'SP', 'Usuário');

-- Inserções na tabela funcionario
INSERT INTO funcionario (nome, cpf, email, usuario, senha, salario, celular, nivel_acesso)
VALUES
('Juliana Ferreira', '666.777.888-99', 'juliana@example.com', 'julianaferreira', 'senha123', '5000.00', '987654321', 'Administrador'),
('Lucas Rodrigues', '777.888.999-00', 'lucas@example.com', 'lucasrodrigues', 'senha456', '4500.00', '987654321', 'Usuário'),
('Larissa Gomes', '888.999.000-11', 'larissa@example.com', 'larissagomes', 'senha789', '4000.00', '987654321', 'Usuário'),
('Diego Almeida', '999.000.111-22', 'diego@example.com', 'diegoalmeida', 'senha123', '5500.00', '987654321', 'Administrador'),
('Camila Santos', '000.111.222-33', 'camila@example.com', 'camilasantos', 'senha456', '4800.00', '987654321', 'Usuário');

-- Inserções na tabela fornecedor
INSERT INTO fornecedor (nome, cnpj, email, usuario, senha, celular, cep, rua, numero, complemento, bairro, cidade, estado)
VALUES
('Fornecedor ABC', '23.456.789/0001-01', 'fornecedor@abc.com', 'fornecedorabc', 'senha123', '987654321', '12345-678', 'Rua H', 123, 'Apto 555', 'Centro', 'São Paulo', 'SP'),
('Fornecedor DEF', '34.567.890/0001-02', 'fornecedor@def.com', 'fornecedordef', 'senha456', '987654321', '54321-876', 'Rua I', 789, 'Loja 654', 'Centro', 'São Paulo', 'SP'),
('Fornecedor GHI', '45.678.901/0001-03', 'fornecedor@ghi.com', 'fornecedorghi', 'senha789', '987654321', '12345-678', 'Rua J', 456, 'Apto 321', 'Centro', 'São Paulo', 'SP'),
('Fornecedor JKL', '56.789.012/0001-04', 'fornecedor@jkl.com', 'fornecedorjkl', 'senha123', '987654321', '54321-876', 'Rua K', 789, 'Loja 789', 'Centro', 'São Paulo', 'SP'),
('Fornecedor MNO', '67.890.123/0001-05', 'fornecedor@mno.com', 'fornecedormno', 'senha456', '987654321', '12345-678', 'Rua L', 123, 'Apto 123', 'Centro', 'São Paulo', 'SP');

-- Inserções na tabela produto
INSERT INTO produto (nome, descricao, preco, qtd_estoque, fornecedor_id)
VALUES
('Produto B', 'Descrição do Produto B', 15.99, 50, 1),
('Produto C', 'Descrição do Produto C', 20.50, 80, 2),
('Produto D', 'Descrição do Produto D', 8.75, 100, 3),
('Produto E', 'Descrição do Produto E', 12.99, 70, 4),
('Produto F', 'Descrição do Produto F', 19.99, 60, 5);

-- Inserções na tabela MetodoPagamento
INSERT INTO MetodoPagamento (nome)
VALUES
('Cartão de Crédito'),
('Boleto Bancário'),
('Transferência Bancária'),
('Dinheiro'),
('Pix');

-- Inserções na tabela venda
INSERT INTO venda (situacao, observacoes, data_venda, total_venda, funcionario_id, cliente_id, metodoPagamento_id)
VALUES
(1, 'Observações da venda 2', '2023-06-29', 75.99, 1, 2, 1),
(1, 'Observações da venda 3', '2023-06-28', 100.50, 2, 3, 2),
(1, 'Observações da venda 4', '2023-06-27', 30.25, 3, 4, 1),
(1, 'Observações da venda 5', '2023-06-26', 50.99, 4, 5, 2),
(1, 'Observações da venda 6', '2023-06-25', 80.99, 5, 1, 1);

-- Inserções na tabela itemvenda
INSERT INTO itemvenda (venda_id, produto_id, qtd, subtotal)
VALUES
(1, 1, 3, 47.97),
(1, 2, 2, 41.00),
(2, 3, 5, 43.75),
(3, 4, 1, 12.99),
(4, 5, 4, 79.96);