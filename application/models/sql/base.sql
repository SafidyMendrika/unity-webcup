create table nif(
    id serial primary key ,
    numero varchar(50),
    url varchar(50)
);

create table RCS(
    id serial primary key ,
    numero varchar(50),
    url varchar(50)
);

create table stat(
     id serial primary key,
     numero varchar(50),
     url varchar(50)
);

create table exercice(
     id serial primary key,
     datedebutexercice date
);

create table devise(
   id serial primary key,
   nom varchar(30),
   valeur double precision
);


create table societe(
    id serial primary key,
    nomsociete varchar(50),
    objet text,
    siege text,
    capital double precision,
    datecreation date,
    idexercice int,
    idnif int,
    idrcs int,
    idstat int,
    iddevise int,
    FOREIGN KEY (idexercice) references exercice(id),
    FOREIGN KEY (iddevise) references devise(id),
    foreign key (idnif) references nif(id),
    foreign key (idrcs) references RCS(id),
    foreign key (idstat) references stat(id)
);


create table account(
    id serial primary key,
    email varchar(50),
    mdp varchar(50),
    idsociete int,
    FOREIGN KEY (idsociete) references societe(id)
);


create table email(
    id serial primary key,
    mail varchar(50),
    idsociete int,
    FOREIGN KEY (idsociete) references societe(id)
);

create table telephone(
    id serial primary key,
    telephone varchar(20),
    idsociete int,
    FOREIGN KEY (idsociete) references societe(id)
);

create table adresse(
    id serial primary key,
    adresse varchar(20),
    idsociete int,
    foreign key (idsociete) references societe(id)
);


create table compte(
    id serial primary key,
    numero varchar(5) not null unique,
    label text not null
);

CREATE TABLE compteTiers(
    id serial primary key,
    numero varchar(15) not null unique,
    label text not null,
    idCompte int REFERENCES compte(id)
);

CREATE TABLE codes_journaux(
    id SERIAL PRIMARY KEY,
    code VARCHAR(5),
    label text
);


create table ecriture_journal
(
    id               SERIAL primary key,
    idCodesJournaux  int REFERENCES codes_journaux (id),
    "date"           date        not null,
    reference_piece  varchar(50) not null,
    numCompte        varchar(5) REFERENCES compte (numero),
    numCompteTiers   varchar(15) REFERENCES compteTiers (numero),
    libelle_ecriture varchar(100),
    debit            DOUBLE PRECISION,
    credit           DOUBLE PRECISION

);





/*CREATE TABLE journal(
    id SERIAL PRIMARY KEY,
    idCodesJournaux int REFERENCES codes_journaux(id),
    idCompte int REFERENCES compte(id),
    idCompteTiers int REFERENCES compteTiers(id),
    jour date not null,
    n_piece int not null,
    reference_piece varchar(50) not null,
    libelle_ecriture varchar(100),
    idDevise INT REFERENCES devise(id),
    quantite DOUBLE PRECISION,
    debit DOUBLE PRECISION,
    credit DOUBLE PRECISION
);*/



/*
create or replace function checklogin(mail varchar(50) , motdepasse varchar(50))
RETURNS int
language plpgsql
AS $$
DECLARE
checking int;
    id int;
BEGIN
    checking:= (select count(*) from account a where a.email=mail and a.mdp=motdepasse);
    if checking = 1 then
        id:=(select a.idsociete from account a where a.email=mail and a.mdp=motdepasse);
return id;
END IF;
return checking;
END;
$$;


create or replace function saveaccount(mail varchar(50),mdp varchar(50))
RETURNS VOID
language plpgsql
AS $$
DECLARE
idS int;
BEGIN
    idS:=(select s.id from societe s order by s.id LIMIT 1);
INSERT INTO account values(mail, mdp,idS);
END;
$$;


create or replace function saveSociete(nomS varchar(50),objetS text,siegeS text,capitalS double precision,dateCS date,
exerciceS date, nifS varchar(30),rcsS varchar(30), statS varchar(30),idD int)
RETURNS VOID
language plpgsql
AS $$
DECLARE
idnif int;
    idrcs int;
    idexercice int;
    idstat int;
    iddevise int;
BEGIN
insert into exercice values(default,exerciceS);
insert into nif values (default,nifS,' ');
insert into rcs values (default,rcsS,' ');
insert into stat values  (default,statS,' ');
idnif :=(select n.id from nif n order by n.id DESC LIMIT 1);
    idrcs :=(select r.id from rcs r order by r.id DESC LIMIT 1);
    idexercice :=(select e.id from exercice e order by e.id DESC LIMIT 1);
    idstat :=(select s.id from stat s order by s.id DESC LIMIT 1);
    iddevise :=(select id from devise where id=idD);
insert into societe values (default,nomS,objetS,siegeS,capitalS,dateCS,idexercice,idnif,idrcs,idstat,iddevise);

END;
$$;
*/

