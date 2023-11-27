drop database gico;
create database gico;
use gico;

SET SQL_SAFE_UPDATES = 0;


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
  usuario varchar(400) unique,
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
  usuario varchar(400) unique,
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
  qtd integer,
  fornecedor_id integer,
  id_imagem varchar(1000)
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
add constraint FK_FuncionarioIDdaLicitacao FOREIGN KEY (funcionario_id) REFERENCES funcionario(id_funcionario) ON DELETE CASCADE,
add constraint FK_MetodoPagamenetoDaLicitacao FOREIGN KEY (MetodoPagamento_id) REFERENCES MetodoPagamento(id_metodoPagamento) ON DELETE CASCADE;

ALTER TABLE itemlicitacao
add constraint FK_licitacaoID FOREIGN KEY (licitacao_id) REFERENCES licitacao(id_licitacao) ON DELETE CASCADE,
add constraint FK_ProdutoIDdoItemLicitacao FOREIGN KEY (produto_id) REFERENCES produto(id_produto) ON DELETE CASCADE;
	
ALTER TABLE produto
ADD CONSTRAINT FK_FornecedorID FOREIGN KEY (fornecedor_id) REFERENCES fornecedor(id_fornecedor) ON DELETE CASCADE;

ALTER TABLE subgrupodoproduto
ADD CONSTRAINT FK_Grupodoproduto FOREIGN KEY (grupodoproduto_id) REFERENCES grupodoproduto(id_grupodoproduto) ON DELETE CASCADE,
ADD CONSTRAINT FK_ProdutoIDdoSubGrupo FOREIGN KEY (produto_id) REFERENCES produto(id_produto) ON DELETE CASCADE;

ALTER TABLE venda
ADD CONSTRAINT FK_MetodoPagamenetoDaVenda FOREIGN KEY (MetodoPagamento_id) REFERENCES MetodoPagamento(id_metodoPagamento) ON DELETE CASCADE,
ADD CONSTRAINT FK_ClienteID FOREIGN KEY (cliente_id) REFERENCES cliente(id_cliente) ON DELETE CASCADE,
ADD CONSTRAINT FK_FuncionarioIDdaVenda FOREIGN KEY (funcionario_id) REFERENCES funcionario(id_funcionario) ON DELETE CASCADE;

ALTER TABLE itemvenda
ADD CONSTRAINT FK_VendaID FOREIGN KEY (venda_id) REFERENCES venda(id_venda) ON DELETE CASCADE,
ADD CONSTRAINT FK_ProdutoIDdoItemVenda FOREIGN KEY (produto_id) REFERENCES produto(id_produto) ON DELETE CASCADE;

-- Inserções na tabela cliente
INSERT INTO cliente (nome, cpf, email, usuario, senha, celular, cep, rua, numero, complemento, bairro, cidade, estado, nivel_acesso)
VALUES
('Ana Oliveira', '111.222.333-44', 'ana@example.com', '123', '123213121', '987654321', '12345-678', 'Rua C', 456, 'Apto 789', 'Centro', 'São Paulo', 'SP', 'Usuário'),
('Pedro Santos', '222.333.444-55', 'pedro@example.com', 'pedrosantos', 'senha789', '987654321', '54321-876', 'Rua D', 789, 'Loja 987', 'Centro', 'São Paulo', 'SP', 'Usuário'),
('Mariana Lima', '333.444.555-66', 'mariana@example.com', 'marianalima', 'senha123', '987654321', '12345-678', 'Rua E', 123, 'Apto 654', 'Centro', 'São Paulo', 'SP', 'Usuário'),
('Rafaela Costa', '444.555.666-77', 'rafaela@example.com', 'rafaelacosta', 'senha456', '987654321', '54321-876', 'Rua F', 789, 'Loja 321', 'Centro', 'São Paulo', 'SP', 'Usuário'),
('Gabriel Silva', '555.666.777-88', 'gabriel@example.com', 'gabrielsilva', 'senha789', '987654321', '12345-678', 'Rua G', 456, 'Apto 987', 'Centro', 'São Paulo', 'SP', 'Usuário');


-- Inserções na tabela funcionario
INSERT INTO funcionario (nome, cpf, email, usuario, senha, salario, celular, nivel_acesso)
VALUES
('Juliana Ferreira', '666.777.888-99', 'juliana@example.com', '1', '1', '5000.00', '987654321', 'Administrador'),
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
/*
INSERT INTO produto (nome, descricao, preco, qtd, fornecedor_id)
VALUES
('Produto B', 'Descrição do Produto B', 15.99, 50, 1),
('Produto C', 'Descrição do Produto C', 20.50, 80, 2),
('Produto D', 'Descrição do Produto D', 8.75, 100, 3),
('Produto E', 'Descrição do Produto E', 12.99, 70, 4),
('Short Praia', 'Descrição do Produto F', 19.99, 0, 5);
*/

-- Inserções na tabela MetodoPagamento
INSERT INTO MetodoPagamento (nome)
VALUES
('Cartão de Crédito'),
('Boleto Bancário'),
('Transferência Bancária'),
('Dinheiro'),
('Pix');

-- Inserções na tabela venda
/*
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
*/

-- Inserção na tabela licitacao
INSERT INTO licitacao (fornecedor_id, funcionario_id, MetodoPagamento_id, data_licitacao, total_licitacao, observacoes)
VALUES
(1, 1, 1, '2023-09-03', 5000.00, 'Observações da licitação 1'),
(1, 2, 2, '2023-09-02', 7500.00, 'Observações da licitação 2'),
(2, 3, 1, '2023-09-01', 3000.00, 'Observações da licitação 3'),
(2, 4, 2, '2023-08-30', 4500.00, 'Observações da licitação 4'),
(2, 5, 1, '2023-08-29', 6000.00, 'Observações da licitação 5');


DELIMITER //

CREATE TRIGGER trigger_atualiza_estoque
AFTER INSERT ON itemvenda
FOR EACH ROW
BEGIN
    UPDATE produto
    SET qtd = qtd - NEW.qtd
    WHERE id_produto = NEW.produto_id;
END //

DELIMITER ;

DELIMITER //

CREATE TRIGGER trigger_atualiza_estoque_apagar
AFTER DELETE ON itemvenda
FOR EACH ROW
BEGIN
    UPDATE produto
    SET qtd = qtd + OLD.qtd
    WHERE id_produto = OLD.produto_id;
END //

DELIMITER ;

DELIMITER //
CREATE TRIGGER trigger_que_limita_a_quantidade_do_produto
BEFORE INSERT ON produto
FOR EACH ROW
BEGIN
    IF NEW.qtd < 0 THEN SET NEW.qtd = 0;
    END IF;
END //
DELIMITER ;

CREATE VIEW view_funcionario_mais_vendeu AS
SELECT f.id_funcionario, f.nome, COUNT(v.id_venda) AS Quantidade_de_Vendas, SUM(v.total_venda) AS Total_de_Vendas
FROM venda v
INNER JOIN funcionario f ON v.funcionario_id = f.id_funcionario
GROUP BY f.id_funcionario
ORDER BY Total_de_Vendas DESC
LIMIT 1;
select * from view_funcionario_mais_vendeu;

CREATE VIEW view_cliente_mais_comprou AS
SELECT c.id_cliente, c.nome AS Cliente, SUM(v.total_venda) AS Total_de_Compras
FROM venda v
INNER JOIN cliente c ON v.cliente_id = c.id_cliente
GROUP BY c.id_cliente
ORDER BY Total_de_Compras DESC
LIMIT 1;
-- select * from view_cliente_mais_comprou;

CREATE VIEW view_produtos_sem_estoque AS
SELECT p.nome AS Produto
FROM produto p
WHERE p.qtd = 0;
-- select * from view_produtos_sem_estoque;


CREATE VIEW view_produtos_com_estoque AS
SELECT *
FROM produto p
WHERE p.qtd > 0;

select * from view_produtos_com_estoque;

CREATE VIEW view_fornecedores_mais_licitacoes AS
SELECT f.id_fornecedor, f.nome AS Fornecedor, COUNT(l.id_licitacao) AS Total_de_Licitacoes
FROM fornecedor f
LEFT JOIN licitacao l ON f.id_fornecedor = l.fornecedor_id
GROUP BY f.id_fornecedor
ORDER BY Total_de_Licitacoes DESC
LIMIT 1;
-- select * from view_fornecedores_mais_licitacoes;

DELIMITER //
CREATE PROCEDURE ConsultarClientePorID (IN cliente_id INT)
BEGIN
    SELECT * FROM cliente WHERE id_cliente = cliente_id;
END //
DELIMITER ;
call ConsultarClientePorID(1);

DELIMITER //
CREATE PROCEDURE ExcluirCliente (IN cliente_id INT)
BEGIN
    DELETE FROM cliente WHERE id_cliente = cliente_id;
END //
DELIMITER ;
-- call ExcluirCliente(1);

DELIMITER //
CREATE PROCEDURE AtualizarCliente (
    IN nome_cliente VARCHAR(400),
    IN cpf_cliente VARCHAR(20),
    IN email_cliente VARCHAR(400),
    IN usuario_cliente VARCHAR(400),
    IN senha_cliente VARCHAR(500),
    IN celular_cliente VARCHAR(400),
    IN cep_cliente VARCHAR(400),
    IN rua_cliente VARCHAR(255),
    IN numero_cliente INT,
    IN complemento_cliente VARCHAR(200),
    IN bairro_cliente VARCHAR(100),
    IN cidade_cliente VARCHAR(100),
    IN estado_cliente VARCHAR(2),
    IN nivel_acesso_cliente VARCHAR(50),
    IN cliente_id INT
)
BEGIN
    UPDATE cliente
    SET nome = nome_cliente, cpf = cpf_cliente, email = email_cliente, usuario = usuario_cliente, senha = senha_cliente,
        celular = celular_cliente, cep = cep_cliente, rua = rua_cliente, numero = numero_cliente, complemento = complemento_cliente,
        bairro = bairro_cliente, cidade = cidade_cliente, estado = estado_cliente, nivel_acesso = nivel_acesso_cliente
    WHERE id_cliente = cliente_id;
END //
DELIMITER ;
CALL AtualizarCliente('NovoNome', '98765432109', 'novoemail@example.com', 'novousuario1', 'novasenha', '987654321', '87654-321', 'Nova Rua', 456, 'Apto 2', 'Novo Bairro', 'Nova Cidade', 'RJ', 'Novo Nivel de Acesso', 1);

select * from cliente;
DELIMITER //
CREATE PROCEDURE InserirCliente (
    IN nome_cliente VARCHAR(400),
    IN cpf_cliente VARCHAR(20),
    IN email_cliente VARCHAR(400),
    IN usuario_cliente VARCHAR(400),
    IN senha_cliente VARCHAR(500),
    IN celular_cliente VARCHAR(400),
    IN cep_cliente VARCHAR(400),	
    IN rua_cliente VARCHAR(255),
    IN numero_cliente INT,
    IN complemento_cliente VARCHAR(200),
    IN bairro_cliente VARCHAR(100),
    IN cidade_cliente VARCHAR(100),
    IN estado_cliente VARCHAR(2),
    IN nivel_acesso_cliente VARCHAR(50)
)
BEGIN
    INSERT INTO cliente (nome, cpf, email, usuario, senha, celular, cep, rua, numero, complemento, bairro, cidade, estado, nivel_acesso)
    VALUES (nome_cliente, cpf_cliente, email_cliente, usuario_cliente, senha_cliente, celular_cliente, cep_cliente, rua_cliente, 
    numero_cliente, complemento_cliente, bairro_cliente, cidade_cliente, estado_cliente, nivel_acesso_cliente);
END //
DELIMITER ;





