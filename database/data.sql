<<<<<<< HEAD
insert into users values(default,'Rabe','Koto','2002-02-02','f','rabe@gmail.com','rb1','0','50','14.5');
insert into users values(default,'Rasoa','Mirana','1999-10-15','f','rasoa@gmail.com','rs1','0','50','14.5');
insert into users values(default,'Randria','soary','1985-06-14','g','soary@gmail.com','soary1','1','50','14.5');
insert into users values(default,'Randria','Sirra','2000-06-14','g','soary@gmail.com','sira','0','50','14.5');
=======
>>>>>>> base_de_donnees
insert into users values(default,'Rabe','Koto','2002-02-02','f','rabe@gmail.com','rb1','0','60','1.60');
insert into users values(default,'Rasoa','Mirana','1999-10-15','f','rasoa@gmail.com','rs1','0','78','1.70');
insert into users values(default,'Randria','soary','1985-06-14','g','soary@gmail.com','soary1','1','65','1.50');
insert into users values(default,'Rahary','Sirra','2000-06-14','g','ary@gmail.com','sira','0','1.90','125');
insert into users values(default,'Rakotoarison','Fetra','2005-01-11','g','fetra@gmail.com','fetra','0','1.80','65');



-- CATEGORIE INGREDIENTS
INSERT INTO categorie (nom)
VALUES
    ('Fruits'),
    ('Légumes'),
    ('Viande'),
    ('Produits laitiers');


-- INGREDIENTS
INSERT INTO ingredients (idCategorie, nom, unite,apport)
VALUES
    (1, 'Pomme', 'pièce',10),
    (1, 'Banane', 'pièce',20),
    (1, 'Orange', 'pièce',30),
    (1, 'Mangue', 'pièce',10),
    (1, 'Raisin', 'gramme',40),
    (1, 'Ananas', 'pièce',10),
    (1, 'Poire', 'pièce',20),
    (2, 'Carotte', 'pièce',10),
    (2, 'Brocoli', 'pièce',10),
    (2, 'Tomate', 'pièce',20),
    (2, 'Courgette', 'pièce',10),
    (2, 'Aubergine', 'pièce',20),
    (2, 'Salade', 'gramme',25),
    (3, 'Poulet', 'kg',23),
    (3, 'Bœuf', 'kg',35),
    (3, 'Porc', 'kg',45),
    (3, 'Agneau', 'kg',74),
    (3, 'Dinde', 'kg',56),
    (3, 'Canard', 'kg',54),
    (4, 'Lait', 'litre',50),
    (4, 'Fromage', 'gramme',15),
    (4, 'Yaourt', 'pot',5),
    (4, 'Crème fraîche', 'gramme',10);

-- PLAT------------------------------------------------
INSERT INTO Plat (nom, apport)
VALUES
    ('Salade de légumes', 250),
    ('Poulet grillé avec légumes sautés', 500),
    ('Omelette aux légumes', 400),
    ('Poisson grillé avec quinoa et légumes', 450),
    ('Salade de fruits frais', 200);



-- DETAILSPLAT------------------------------------------
INSERT INTO detailsPlat (idPlat, idIngredient)
VALUES
    (1,13),
    (1, 10),
    (1, 8),
    (2, 14),
    (2,11),
    (2,9),
    (3, 15),
    (3, 9),
    (3,11),
    (4, 16),
    (4, 17),
    (4,9),
    (5, 13),
    (5, 1),
    (5,2);


-- REGIME----------------------------------------------
insert into Regime values(default,'maigrissant_1',-1000);
insert into Regime values(default,'maigrissant_1',-1200);
insert into Regime values(default,'maigrissant_1',-1600);
insert into Regime values(default,'grossissant_1',1200);
insert into Regime values(default,'grossissant_2',2200);


-- DETAILSREGIME---------------------------------------
insert into DetailsRegime values(default,1,1);
insert into DetailsRegime values(default,2,5);
insert into DetailsRegime values(default,3,3);
insert into DetailsRegime values(default,4,2);
insert into DetailsRegime values(default,5,4);



-- CODE-----------------------------------
insert into code values(default,'AR0010000_1','10000',0);
insert into code values(default,'AR0010000_2','10000',0);
insert into code values(default,'AR0010000_3','10000',0);
insert into code values(default,'AR0010000_4','10000',0);
insert into code values(default,'AR0020000_1','20000',0);
insert into code values(default,'AR0020000_2','20000',0);
insert into code values(default,'AR0020000_3','20000',0);
insert into code values(default,'AR0020000_4','20000',0);
insert into code values(default,'AR0020000_5','20000',0);
insert into code values(default,'AR0005000_1','5000',0);
insert into code values(default,'AR0005000_2','5000',0);
insert into code values(default,'AR0005000_3','5000',0);
insert into code values(default,'AR0002000_1','2000',0);
insert into code values(default,'AR0002000_2','2000',0);
insert into code values(default,'AR0001000_1','1000',0);



-- ACTIVITE
insert into activite values(default,'Natation',-1000);
insert into activite values(default,'Musculation',1500);
insert into activite values(default,'Footing',700);
insert into activite values(default,'Vitesse',800);
insert into activite values(default,'Endurance',1300);



-- Details regime Sport 
insert into DetailsRegimeSport values(default,1,1);
insert into DetailsRegimeSport values(default,2,2);
insert into DetailsRegimeSport values(default,3,3);
insert into DetailsRegimeSport values(default,4,4);
insert into DetailsRegimeSport values(default,5,5);


-- PRIX REGIME 
insert into PrixRegime values(default,7,1,10000);


