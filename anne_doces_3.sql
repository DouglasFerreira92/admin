
create table tb_admin(

	idadmin int not null primary key auto_increment,
    desnome varchar(30) not null ,
    deslogin varchar(30) not null,
    dessenha varchar(256) not null,
    inadmin boolean not null
    
)ENGINE=INNODB DEFAULT CHARSET=UTF8;


create table tb_client(

	idclient int not null primary key auto_increment,
    desnome varchar(40) not null,
    destel varchar(14) not null,
    cdate DATETIME DEFAULT CURRENT_TIMESTAMP
    
)ENGINE=INNODB DEFAULT CHARSET=UTF8;


create table tb_ender(

	idender int not null auto_increment primary key,
    descidade varchar(30)not null,
    desrua varchar(30) not null,
    desnum varchar(10)
    
)ENGINE=INNODB DEFAULT CHARSET=UTF8;


ALTER TABLE tb_client 
ADD COLUMN fidender int ;

ALTER TABLE tb_client
ADD FOREIGN KEY (fidender)
REFERENCES tb_ender(idender);



create table tb_compra(

    idcompra int not null primary key auto_increment ,
    vdate DATE DEFAULT CURRENT_TIMESTAMP
    
)ENGINE=INNODB DEFAULT CHARSET=UTF8;


create table tb_product(

    idproduct int not null primary key auto_increment ,
    desnomeprod varchar(30) not null,
    descricao text,
    despreco varchar(5) not null,
    pdate DATE DEFAULT CURRENT_TIMESTAMP
    
)ENGINE=INNODB DEFAULT CHARSET=UTF8;


create table tb_item(

    iditem int not null primary key auto_increment ,
    desqnt varchar(10),
    desvalor varchar(10)
    
)ENGINE=INNODB DEFAULT CHARSET=UTF8;


ALTER TABLE tb_compra 
ADD COLUMN fidclient int ;

ALTER TABLE tb_compra 
ADD COLUMN fidproduct int ;

ALTER TABLE tb_compra 
ADD COLUMN fiditem int ;



ALTER TABLE tb_compra
ADD FOREIGN KEY (fidclient)
REFERENCES tb_client(idclient);


ALTER TABLE tb_compra
ADD FOREIGN KEY (fidproduct)
REFERENCES tb_product(idproduct);

ALTER TABLE tb_compra
ADD FOREIGN KEY (fiditem)
REFERENCES tb_item(iditem);

ALTER TABLE tb_product
CHANGE despreco despreco float;


ALTER TABLE tb_item
CHANGE desvalor desvalor float;