INSERT INTO nif (numero, url)
VALUES
    ('12345I7890', 'https://example.com/nif/1234567890'),
    ('0987U54321', 'https://example.com/nif/0987654321'),
    ('135D908642', 'https://example.com/nif/1357908642'),
    ('T468135790', 'https://example.com/nif/2468135790');

INSERT INTO stat (numero, url)
VALUES
    ('123456789F', 'https://example.com/stat/1234567890'),
    ('09876G4321', 'https://example.com/stat/0987654321'),
    ('13R79086L2', 'https://example.com/stat/1357908642'),
    ('24681I5790', 'https://example.com/stat/2468135790');

INSERT INTO rcs (numero, url)
VALUES
    ('1R34Y6789F', 'https://example.com/rcs/1234Y67890'),
    ('0Y876G432P', 'https://example.com/rcs/0987O54321'),
    ('13R79T86L2', 'https://example.com/rcs/135KK08642'),
    ('A4681I57K0', 'https://example.com/rcs/24681I5790');

INSERT INTO exercice (datedebutexercice)
VALUES
    ('2022-01-01'),
    ('2021-07-01'),
    ('2023-04-01');

INSERT INTO devise (nom, valeur)
VALUES
    ('Euro', 0.84),
    ('Dollar', 0.73),
    ('Livre Sterling', 0.63),
    ('Yen', 0.0068);

INSERT INTO Societe values
    (default,'DIMPEX','Entreprise de Transport','Antanarivo',560000000,'2003-11-30',3,1,1,1,1);

INSERT into account values
    (default,'dimpex@gmail.com','dimpex2003',1);

INSERT INTO email values
    (default,'dimpex@gmail.com',1);

INSERT INTO telephone values
    (default,'0341040539',1);

INSERT INTO adresse values
    (default,'Cite Itaosy',1);


INSERT INTO compteTiers VALUES 
    (default,'JIRAMA','FRNS : JIRAMA',1),
    (default,'JOHN','FRNS : JOHN',1),
    (default,'LAMBERT','CLT : LAMBERT',2),
    (default,'LOVASOA','FRNS : LOVASOA',1),
    (default,'MENDRIKA','FRNS : MENDRIKA',1), 
    (default,'TELMA','FRNS : TELMA',1),
    (default,'RIAKA','CLT : RIAKA',2)
    ;

INSERT INTO codes_journaux VALUES 
    (default,'AC','ACHAT'),
    (default,'BN','BANQUE BNI'),
    (default,'AN','A NOUVEAU'),
    (default,'BO','BANQUE BOA'),
    (default,'CA','CAISSE'),
    (default,'OD','OPERATION DIVERSES'),
    (default,'VE','VENTE EXPORT'),
    (default,'VL','VENTE LOCALE')
    ;


INSERT INTO ecriture_journal VALUES
    (default,1,'2023-04-12','AC/0001','64512',null,'Achats Fournitures',24000,0),
    (default,1,'2023-04-12','FN/0002','40110',null,null,24000,24000),
    (default,1,'2023-04-12','BOA/0001','51200',null,'Chèque Banque',0,24000),
    (default,8,'2023-05-11','VT/0001','70110',null,'Ventes Telephones',0,12750),
    (default,8,'2023-05-11','CLT/0001','41110',null,'Achat des telephones',12750,12750),
    (default,8,'2023-05-11','BNI/0001','51202',null,'Chèque numéro',0,12750);

INSERT INTO ecriture_journal VALUES
    (default,1,'2023-08-30','AC/0002','64512',null,'Achats Fournitures',24000,0),
    (default,1,'2023-08-30','FN/0003','40110',null,null,24000,24000),
    (default,1,'2023-08-30','BOA/0002','51200',null,'Cheque Banque',0,24000);