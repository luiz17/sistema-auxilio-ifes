CREATE DATABASE sistema_auxilio;
USE sistema_auxilio;

-- -----------------------------------------------------
-- Table curso
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS curso (
  curso_id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(45) NOT NULL,
  periodo INT NOT NULL,
  PRIMARY KEY (curso_id)
);


-- -----------------------------------------------------
-- Table turma
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS turma (
  turma_id INT NOT NULL AUTO_INCREMENT,
  nome CHAR(4) NOT NULL,
  ano INT NOT NULL,
  curso_id INT NOT NULL,
  PRIMARY KEY (turma_id),
  CONSTRAINT curso_id
    FOREIGN KEY (curso_id)
    REFERENCES curso (curso_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);


-- -----------------------------------------------------
-- Table ficha
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS ficha (
  ficha_id INT NOT NULL,
  procedencia CHAR(5) NULL,
  proveniencia CHAR(15) NULL,
  bolsa_estudos TINYINT(1) NULL,
  bolsa_estudos_porcentagem FLOAT NULL,
  renda FLOAT NULL,
  renda_percapita FLOAT NULL,
  acompanhamento TEXT NULL,
  hb_habitacao VARCHAR(50) NULL,
  hb_valor FLOAT NULL,
  hb_pessoa_responsavel VARCHAR(60) NULL,
  hb_telefone_contato INT NULL,
  hb_tipo_habitacao CHAR(10) NULL,
  hb_natureza_vinculo CHAR(10) NULL,
  hb_natureza_vinculo_valor FLOAT NULL,
  hb_qtd_comodos INT NULL,
  hb_computador TINYINT(1) NULL,
  hb_internet TINYINT(1) NULL,
  hb_gasto_agua FLOAT NULL,
  hb_gasto_luz FLOAT NULL,
  hb_gasto_telefone FLOAT NULL,
  hb_gasto_emprestimo FLOAT NULL,
  hb_gasto_prestacoes FLOAT NULL,
  hb_gasto_celular FLOAT NULL,
  hb_gasto_alimentacao FLOAT NULL,
  hb_gasto_mensalidades FLOAT NULL,
  hb_gasto_condominio FLOAT NULL,
  hb_gasto_internet FLOAT NULL,
  hb_gasto_outros FLOAT NULL,
  ep_atividade_complementar VARCHAR(50) NULL,
  ep_trabalha TINYINT(1) NULL,
  ep_trabalhou TINYINT(1) NULL,
  ep_vinculo_trabalhista CHAR(8) NULL,
  ep_funcao VARCHAR(20) NULL,
  ep_outras_rendas TINYINT(1) NULL,
  ep_procedencia CHAR(15) NULL,
  banco_conta INT NULL,
  banco_agencia INT NULL,
  banco_operacao INT NULL,
  banco_numero INT NULL,
  saude_convenio VARCHAR(50) NULL,
  saude_convenio_valor FLOAT NULL,
  saude_dificuldade_enxergar TINYINT(1) NULL,
  saude_oculos TINYINT(1) NULL,
  saude_recebe_medicamento TINYINT(1) NULL,
  saude_medicamento_gastos FLOAT NULL,
  PRIMARY KEY (ficha_id),
  UNIQUE INDEX ficha_id_UNIQUE (ficha_id ASC)
);


-- -----------------------------------------------------
-- Table aluno
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS aluno (
  aluno_id INT NOT NULL AUTO_INCREMENT,
  matricula INT NOT NULL,
  nome VARCHAR(70) NOT NULL,
  email VARCHAR(40) NOT NULL,
  senha VARCHAR(20) NOT NULL,
  rg INT NOT NULL,
  cpf INT NOT NULL,
  turma_id INT NOT NULL,
  data_nascimento DATE NOT NULL,
  sexo CHAR(2) NOT NULL,
  naturalidade VARCHAR(30) NOT NULL,
  etnia CHAR(8) NOT NULL,
  estado_civil CHAR(10) NOT NULL,
  endereco VARCHAR(50) NOT NULL,
  cidade VARCHAR(30) NOT NULL,
  bairro VARCHAR(30) NOT NULL,
  uf CHAR(3) NOT NULL,
  cep INT NOT NULL,
  ponto_referencia VARCHAR(30) NULL,
  telefone INT NOT NULL,
  telefone_trabalho INT NULL,
  celular INT NULL,
  ficha_id INT NOT NULL,
  acesso INT NULL,
  PRIMARY KEY (aluno_id),
  CONSTRAINT turma_id
    FOREIGN KEY (turma_id)
    REFERENCES turma (turma_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT ficha_id
    FOREIGN KEY (ficha_id)
    REFERENCES ficha (ficha_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);


-- -----------------------------------------------------
-- Table processo
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS processo (
  processo_id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(50) NOT NULL,
  data_inicial DATE NOT NULL,
  data_final DATE NOT NULL,
  edital VARCHAR(30) NULL,
  PRIMARY KEY (processo_id)
);


-- -----------------------------------------------------
-- Table inscricao
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS inscricao (
  aluno_id INT NOT NULL,
  processo_id INT NOT NULL,
  turma_id INT NOT NULL,
  entrevista_obs TEXT NULL,
  entrevista_data DATE NULL,
  entrevista_hora TIME NULL,
  inscricao_data DATE NOT NULL,
  PRIMARY KEY (aluno_id, processo_id),
  CONSTRAINT aluno_id
    FOREIGN KEY (aluno_id)
    REFERENCES aluno (aluno_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT processo_id
    FOREIGN KEY (processo_id)
    REFERENCES processo (processo_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT turma_id_fk
    FOREIGN KEY (turma_id)
    REFERENCES turma (turma_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);


-- -----------------------------------------------------
-- Table usuario
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS usuario (
  usuario_id INT NOT NULL,
  nome VARCHAR(60) NOT NULL,
  email VARCHAR(40) NOT NULL,
  senha VARCHAR(20) NOT NULL,
  cargo VARCHAR(30) NULL,
  acesso INT NOT NULL,
  PRIMARY KEY (usuario_id)
);


-- -----------------------------------------------------
-- Table mensagem
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS mensagem (
  mensagem_id INT NOT NULL AUTO_INCREMENT,
  usuario_id INT NOT NULL,
  nome VARCHAR(60) NOT NULL,
  email VARCHAR(40) NOT NULL,
  turma CHAR(3) NULL,
  telefone INT NOT NULL,
  assunto VARCHAR(100) NOT NULL,
  mensagem TEXT NOT NULL,
  mensagem_data DATE NOT NULL,
  PRIMARY KEY (mensagem_id),
  CONSTRAINT usuario_id
    FOREIGN KEY (usuario_id)
    REFERENCES usuario (usuario_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);


-- -----------------------------------------------------
-- Table parametro
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS parametro (
  parametro_id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(30) NULL,
  valor TEXT NULL,
  PRIMARY KEY (parametro_id)
);


-- -----------------------------------------------------
-- Table criterio
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS criterio (
  criterio_id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(45) NOT NULL,
  PRIMARY KEY (criterio_id)
);


-- -----------------------------------------------------
-- Table auxilio
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS auxilio (
  auxilio_id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(45) NOT NULL,
  PRIMARY KEY (auxilio_id)
);


-- -----------------------------------------------------
-- Table processo_auxilio
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS processo_auxilio (
  processo_id INT NOT NULL,
  auxilio_id INT NOT NULL,
  valor FLOAT NULL,
  data_fim DATE NOT NULL,
  data_inicio DATE NOT NULL,
  PRIMARY KEY (processo_id, auxilio_id),
  CONSTRAINT processo_id_fk
    FOREIGN KEY (processo_id)
    REFERENCES processo (processo_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT auxilio_id_fk
    FOREIGN KEY (auxilio_id)
    REFERENCES auxilio (auxilio_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);


-- -----------------------------------------------------
-- Table recurso
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS recurso (
  aluno_id INT NOT NULL,
  processo_id INT NOT NULL,
  auxilio_id INT NOT NULL,
  usuario_id INT NOT NULL,
  turma CHAR(5) NOT NULL,
  recurso_data DATE NOT NULL,
  justificativa TEXT NOT NULL,
  PRIMARY KEY (aluno_id, processo_id, auxilio_id),
  
  CONSTRAINT recurso_usuario_fk
    FOREIGN KEY (usuario_id)
    REFERENCES usuario (usuario_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,

  CONSTRAINT recurso_processo_fk
    FOREIGN KEY (processo_id , auxilio_id)
    REFERENCES processo_auxilio (processo_id , auxilio_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,

  CONSTRAINT recurso_aluno_fk
    FOREIGN KEY (aluno_id)
    REFERENCES aluno (aluno_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);


-- -----------------------------------------------------
-- Table auxilio_peso
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS auxilio_peso (
  criterio_id INT NOT NULL,
  auxilio_id INT NOT NULL,
  peso FLOAT NOT NULL,
  PRIMARY KEY (criterio_id, auxilio_id),
  CONSTRAINT auxilio_peso_criterio_fk
    FOREIGN KEY (criterio_id)
    REFERENCES criterio (criterio_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT auxilio_peso_auxilio_id_fk
    FOREIGN KEY (auxilio_id)
    REFERENCES auxilio (auxilio_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);


-- -----------------------------------------------------
-- Table banner
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS banner (
  banner_id INT NOT NULL AUTO_INCREMENT,
  titulo VARCHAR(50) NOT NULL,
  imagem VARCHAR(30) NOT NULL,
  status TINYINT(1) NULL,
  PRIMARY KEY (banner_id)
);


-- -----------------------------------------------------
-- Table faq
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS faq (
  faq_id INT NOT NULL AUTO_INCREMENT,
  pergunta TEXT NOT NULL,
  resposta TEXT NOT NULL,
  PRIMARY KEY (faq_id)
);


-- -----------------------------------------------------
-- Table aluno_auxilio
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS aluno_auxilio (
  aluno_auxilio_id INT NOT NULL AUTO_INCREMENT,
  aluno_id INT NOT NULL,
  processo_id INT NOT NULL,
  auxilio_id INT NOT NULL,
  resultado TINYINT(1) NULL,
  PRIMARY KEY (aluno_auxilio_id),
  CONSTRAINT aluno_auxilio_aluno_fk
    FOREIGN KEY (aluno_id)
    REFERENCES aluno (aluno_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT aluno_auxilio_processo_fk
    FOREIGN KEY (processo_id , auxilio_id)
    REFERENCES processo_auxilio (processo_id , auxilio_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);


-- -----------------------------------------------------
-- Table pagamento
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS pagamento (
  id INT NOT NULL AUTO_INCREMENT,
  aluno_auxilio_id INT NOT NULL,
  data DATE NOT NULL,
  valor FLOAT NOT NULL,
  PRIMARY KEY (id),
  CONSTRAINT pagamento_aluno_auxilio_fk
    FOREIGN KEY (aluno_auxilio_id)
    REFERENCES aluno_auxilio (aluno_auxilio_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);


-- -----------------------------------------------------
-- Table funcionalidade
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS funcionalidade (
  funcionalidade_id INT NOT NULL,
  nome CHAR(25) NOT NULL,
  PRIMARY KEY (funcionalidade_id)
);


-- -----------------------------------------------------
-- Table acesso
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS acesso (
  acesso_id INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (acesso_id)
);


-- -----------------------------------------------------
-- Table funcionalidade_acesso
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS funcionalidade_acesso (
  funcionalidade_id INT NOT NULL,
  acesso_id INT NOT NULL,
  PRIMARY KEY (funcionalidade_id, acesso_id),
  CONSTRAINT funcionalidade_fk
    FOREIGN KEY (funcionalidade_id)
    REFERENCES funcionalidade (funcionalidade_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT acesso_fk
    FOREIGN KEY (acesso_id)
    REFERENCES acesso (acesso_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);


-- -----------------------------------------------------
-- Table familiar
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS familiar (
  familiar_id INT NOT NULL AUTO_INCREMENT,
  aluno_id INT NOT NULL,
  nome VARCHAR(60) NOT NULL,
  data_nascimento DATE NOT NULL,
  estado_civil CHAR(10) NULL,
  parentesco CHAR(30) NULL,
  situacao CHAR(20) NULL,
  situacao_empregaticia CHAR(25) NULL,
  profissao VARCHAR(30) NULL,
  salario FLOAT NULL,
  pensao FLOAT NULL,
  tipo_escola CHAR(10) NULL,
  mensalidade FLOAT NULL,
  gastos VARCHAR(40) NULL,
  tipo_doenca VARCHAR(60) NULL,
  faz_tratamento TINYINT(1) NULL,
  usa_medicamento TINYINT(1) NULL,
  deficiente TINYINT(1) NULL,
  viciado TINYINT(1) NULL,
  gastos_medicamento FLOAT NULL,
  PRIMARY KEY (familiar_id),
  CONSTRAINT familiar_aluno_fk
    FOREIGN KEY (aluno_id)
    REFERENCES aluno (aluno_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);


-- -----------------------------------------------------
-- Table documento
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS documento (
  documento_id INT NOT NULL,
  aluno_id INT NOT NULL,
  nome VARCHAR(30) NOT NULL,
  PRIMARY KEY (documento_id),
  CONSTRAINT documento_aluno_fk
    FOREIGN KEY (aluno_id)
    REFERENCES aluno (aluno_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);


-- -----------------------------------------------------
-- Table aluno_peso
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS aluno_peso (
  aluno_id INT NOT NULL,
  criterio_id INT NOT NULL,
  peso FLOAT NOT NULL,
  PRIMARY KEY (aluno_id, criterio_id),
  CONSTRAINT ap_aluno_fk
    FOREIGN KEY (aluno_id)
    REFERENCES aluno (aluno_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT ap_criterio_fk
    FOREIGN KEY (criterio_id)
    REFERENCES criterio (criterio_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);