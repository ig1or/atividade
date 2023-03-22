CREATE TABLE IF NOT EXISTS `contatos`(
	`id` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(45) NOT NULL,
    `sobrenome` VARCHAR(45) NOT NULL,
    `email` VARCHAR(110) NOT NULL,
    `observacoes` VARCHAR(110) NOT NULL,
    `telefone` INT NOT NULL,
    `dataNascimento` DATE NOT NULL,
    `idCidade` INT NOT NULL,
    `vivo` VARCHAR(45) NOT NULL,
    PRIMARY KEY(`id`)
);

CREATE TABLE IF NOT EXISTS `hobbies`(
	`id` INT NOT NULL AUTO_INCREMENT,
    `descricao` VARCHAR(45) NOT NULL,
    PRIMARY KEY(`id`)
);

CREATE TABLE IF NOT EXISTS `contato_hobbie`(
	`idContato` INT NOT NULL,
    `idHobbie` INT NOT NULL,
    PRIMARY KEY(`idContato`,`idHobbie`),
    constraint Contato_codigo_fk foreing key(idContato) REFERENCES contatos(id),
    constraint Hobbies_codigo_fk foreing key(idHobbie) REFERENCES hobbies(id)

);


CREATE TABLE IF NOT EXISTS `proposta`(
	`id` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(45) NOT NULL,
    `email` VARCHAR(110) NOT NULL,
    `observacoes` VARCHAR(110) NOT NULL,
    `salario` INT NOT NULL,
    PRIMARY KEY(`id`)
);