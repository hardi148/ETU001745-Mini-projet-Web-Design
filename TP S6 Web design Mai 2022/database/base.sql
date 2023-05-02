


create table articles(
idarticle serial primary key,
titre varchar(50),
contenu text,
resumer text,
auteur varchar(20),
img text,
datepublication timestamp default current_timestamp
);



INSERT INTO articles (titre, contenu, resumer, auteur, img)
VALUES
   ('Les bases de l apprentissage machine', 'Le terme apprentissage machine (machine learning) a été introduit en 1959 par le scientifique Arthur Samuel', 'Cet article explore les bases de l apprentissage machine, y compris la différence entre l apprentissage supervisé et non supervisé, ainsi que les techniques courantes utilisées en apprentissage machine.', 'John Doe', 'http://example.com/images/1.jpg'),
   ('Comment fonctionne un réseau de neurones', 'Les réseaux de neurones artificiels (RNA) sont une technique d apprentissage machine inspirée du fonctionnement du cerveau humain.', 'Cet article explique le fonctionnement des réseaux de neurones et explore leurs applications dans divers domaines.', 'Jane Smith', 'http://example.com/images/2.jpg');
   ('Les avantages et les limites de l apprentissage non supervisé', 'L apprentissage non supervisé est une technique d apprentissage machine qui ne nécessite pas de données étiquetées pour s entraîner.', 'Cet article explore les avantages et les limites de l apprentissage non supervisé et examine comment il peut être utilisé dans la pratique.', 'Alice Johnson', 'http://example.com/images/3.jpg'),
   ('L impact de l apprentissage machine sur l emploi', 'L apprentissage machine est en train de transformer de nombreux secteurs d''activité, ce qui peut avoir un impact sur l emploi.', 'Cet article examine comment l apprentissage machine peut affecter l emploi dans différents secteurs, ainsi que les mesures que les entreprises et les gouvernements peuvent prendre pour atténuer cet impact.', 'Bob Lee', 'http://example.com/images/4.jpg');
