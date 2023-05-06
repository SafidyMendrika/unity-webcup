insert into user values
(default,'mirija','mirija@gmail.com',MD5('mirija'),null);


insert into typereve values
(default,'reve'),
(default,'cauchemar');


insert into categorieprediction values
(default,'education'),
(default,'professionnel'),
(default,'amoureuse');

insert into motcle values
(default,'ecole'),
(default,'prof'),
(default,'examen'),
(default,'patron'),
(default,'bureau'),
(default,'augmentation'),
(default,'enferme'),
(default,'lune'),
(default,'voler');

insert into prediction values
-- education::ecole
(default,'vous allez vous remettre en question ou que vous allez vous intéresser à un nouveau domaine d études ou de compétences',1,1),
(default,'vous allez faire face à des défis dans votre vie professionnelle ou académique et que vous allez cherchez des moyens de y faire face',1,1),
(default,'cela peut également fournir des informations sur les problèmes émotionnels que vous pourriez être en train de traiter dans votre vie actuelle.',2,1),
-- education::prof
(default,'vous allez apprendre davantage sur un domaine spécifique, que ce soit en termes d acquérir de nouvelles connaissances ou de développer une meilleure compréhension d un sujet en particulier',1,1),
(default,'vous allez vous inspirer de votre professeur dans votre apprentissage et votre développement personnel',1,1),
(default,'vous allez vous remettre en question quant à vos propres normes et vos propres attentes',2,1),
-- education::examen
(default,'Vous allez vous amusez dans votre prochaine évaluation tellement vous avez tout réviser, ne vous inquiéter pas',1,1),
(default,'vous allez réussir votre prochain examen car vous êtes sûr de votre capacité',1,1),
(default,'vous allez être préoccupé par votre propre jugement ou que vous allez vous mettre trop de pression sur vous-même',2,1),


-- professionnel::patron
(default,'Le rêve peut également refléter une certaine admiration ou respect que vous avez pour votre patron',1,2),
(default,'cela pourrait être un signe que vous êtes préoccupé par votre relation avec votre patron ou par votre position dans votre entreprise ou votre travail',2,2),
(default,'Alternativement, cela peut indiquer que vous êtes préoccupé par la sécurité de votre emploi ou que vous vous sentez vulnérable dans votre position Dans tous les cas, il est important de prendre en compte les détails spécifiques de votre rêve ainsi que les circonstances de votre vie pour déterminer une signification personnelle plus précise. Si vous êtes confronté à des défis dans votre travail ou dans vos relations professionnelles, le rêve peut simplement refléter vos inquiétudes ou vos préparatifs pour gérer ces défis',2,2),
-- professionnel::bureau
(default,'Le rêve peut également refléter une certaine routine ou habitude que vous avez dans votre vie professionnelle.',1,2),
(default,'vous allez être dynamique et riche en énergie dans les semaines qui suivent',1,2),
(default,'cela peut indiquer que vous êtes préoccupé par l organisation de votre travail ou que vous alllez avoir des difficultés à gérer votre charge de travail.',2,2),
-- professionnel::augmentation
(default,'vous allez être tellement motivé à travail encore plus qu avant',1,2),
(default,'vous allez être stable financièrement car une augmentation se profil quelque part',1,2),
(default,'vous êtes anxieux quant à votre situation financière ou que vous avez des doutes sur vos compétences professionnelles.',2,2),


-- amoureuse::enferme
(default,'vous allez vous donnez du temps à vous même pour réfléchir à votre vie et à vos priorités.',1,3),
(default,'vous allez être anxieux quant à une situation ou que vous vous allez vous sentir prisonnier de vos propres pensées ou émotions',2,3),
(default,'le rêve peut simplement refléter vos sentiments de frustration ou votre désir de trouver une solution à vos problèmes.',2,3),
-- amoureuse::lune
(default,'vous allez désirer de vous connecter avec votre côté émotionnel ou intuitif',1,3),
(default,'vous allez vous sentir protéger et en sécurité dans votre prochaine relation amoureuse',1,3),
(default,'vous allez être confronté à des émotions fortes ou que vous allez vivre une période de confusion et d incertitude',2,3),
-- amoureuse::voler
(default,'Le rêve peut également représenter votre confiance en vous-même et votre capacité à surmonter les défis',1,3),
(default,'vous allez désirer de vous libérer de contraintes et de prendre le contrôle de votre vie.',1,3),
(default,'vous allez vous sentir déconnecté de la réalité ou que vous allez vivre une période d incertitude et de confusion.',2,3);

insert into prediction_motcle values
(1,1),
(1,2),
(1,3),

(2,4),
(2,5),
(2,6),

(3,7),
(3,8),
(3,9),

(4,10),
(4,11),
(4,12),

(5,13),
(5,14),
(5,15),

(6,16),
(6,17),
(6,18),

(7,19),
(7,20),
(7,21),

(8,22),
(8,23),
(8,24),

(9,25),
(9,26),
(9,27);
