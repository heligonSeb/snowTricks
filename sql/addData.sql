INSERT INTO snowtricks.`user` (username,roles,password,firstname,lastname,email,is_verified) VALUES
	 ('seb','[]','$2y$13$ZgT/tKhTcAEsU.dCmOhpeOha.jQ2q0No1oJWuA3g2FUuP9eE6s77u','seb','hel','seb@snowtricks.com',1);

INSERT INTO snowtricks.figure_group (name) VALUES
	 ('Les flips'),
	 ('Les grabs'),
	 ('Les rotations'),
	 ('Les rotations désaxées'),
	 ('Les slides'),
	 ('Les one foot tricks'),
	 ('Les Old school');
    
INSERT INTO snowtricks.figure (create_date,edit_date,name,description,figure_group_id) VALUES
	 ('2023-01-12 18:33:07.0','2023-03-20 18:43:00.0','test all','azdojzà',3),
	 ('2023-03-15 16:40:45.0','2023-03-15 16:41:57.0','mute','saisie de la carre frontside de la planche entre les deux pieds avec la main avant',4),
	 ('2023-03-15 16:46:00.0','2023-03-15 16:47:08.0','indy','saisie de la carre frontside de la planche, entre les deux pieds, avec la main arrière ;',4),
	 ('2023-03-15 16:54:41.0','2023-03-15 16:56:59.0','360','trois six pour un tour complet ;',5),
	 ('2023-03-15 17:00:41.0',NULL,'1080','ou big foot pour trois tours',5),
	 ('2023-03-15 17:03:16.0','2023-03-15 17:03:40.0','front flip','Un flip est une rotation verticale. On distingue les front flips, rotations en avant',3),
	 ('2023-03-15 17:06:05.0',NULL,'back flips','Un flip est une rotation verticale. On distingue les back flips, rotations en arrière.',3),
	 ('2023-03-15 17:10:16.0',NULL,'cork','le cork est une rotation hors axe, ressemblant un peu à un tire-bouchon. L''astuce nécessite que le snowboarder tourne à la fois à l''envers et en angle. Le rider ne sera donc jamais directement vertical ou horizontal.',6),
	 ('2023-03-15 17:13:49.0',NULL,'nose slide','l''avant de la planche est sur la barre,',7),
	 ('2023-03-15 17:15:42.0',NULL,'tail slide','l''arrière de la planche est sur la barre',7);
INSERT INTO snowtricks.figure (create_date,edit_date,name,description,figure_group_id) VALUES
	 ('2023-03-15 17:20:47.0',NULL,'Method Air','Method est l''un des tricks les plus emblématiques du snowboard qui ne se démode jamais. C''est l''une des saisies les plus difficiles à exécuter car elle implique une combinaison de différentes techniques. C''est une prise Melon ajustée derrière votre dos combinée à un Backside Shifty.',9);

INSERT INTO snowtricks.picture (name,folder,figure_id) VALUES
	 ('f87532c6304049440b7d57b484ae3624.jpeg','tricks',14),
	 ('d634fa0f95c8ee0b16aca4166bd76cbf.jpeg','tricks',15),
	 ('ac5b7c963086ff062b26e4ae4bf3875f.jpeg','tricks',15),
	 ('572ca6e482e42f964d1aff691542a628.jpeg','tricks',16),
	 ('d42a90626faeb555c0f9f571495667fa.jpeg','tricks',16),
	 ('2207966e28503d69caef69bb53cd74e8.jpeg','tricks',16),
	 ('465f4307648be958dd150e16446de080.jpeg','tricks',17),
	 ('054ac62cc76d151bcceb5b1160ce5be3.jpeg','tricks',18),
	 ('fba797ace3f02bbd3c2026a32cab7059.jpeg','tricks',18),
	 ('2dfd88567c0c4d5a32ce7c48eee4d8c4.jpeg','tricks',19);
INSERT INTO snowtricks.picture (name,folder,figure_id) VALUES
	 ('c2e98be0cb580c7e6cfa680eb68474f1.jpeg','tricks',19),
	 ('1971f6f621be18f7bb04f80fcfb8c2cb.jpeg','tricks',19),
	 ('3f6a3085d1c27bc875748a0e77e32447.jpeg','tricks',20),
	 ('bd82b7cc7bc66ac2605c09710bde8aa4.jpeg','tricks',20),
	 ('dba40980b9565f2277f403ea42f96042.jpeg','tricks',21),
	 ('3a1e99e523b0eb7e8120a9041a31af89.jpeg','tricks',22),
	 ('83a6ad4624bee1c4c93e5b891d531a80.jpeg','tricks',22),
	 ('82951cb4cac042d9311f8a1d33b54478.jpeg','tricks',23),
	 ('b076000ef3fee121877c8341618fe288.jpeg','tricks',24);

INSERT INTO snowtricks.movie (balise,figure_id) VALUES
	 ('<iframe width="560" height="315" src="https://www.youtube.com/embed/eGJ8keB1-JM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',14),
	 ('<iframe width="560" height="315" src="https://www.youtube.com/embed/jm19nEvmZgM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',15),
	 ('<iframe width="560" height="315" src="https://www.youtube.com/embed/6yA3XqjTh_w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',16),
	 ('<iframe width="560" height="315" src="https://www.youtube.com/embed/iKkhKekZNQ8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',16),
	 ('<iframe width="560" height="315" src="https://www.youtube.com/embed/hUQ3eKS13co" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',17),
	 ('<iframe width="560" height="315" src="https://www.youtube.com/embed/3XxfClLqjg4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',18),
	 ('<iframe width="560" height="315" src="https://www.youtube.com/embed/eGJ8keB1-JM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',19),
	 ('<iframe width="560" height="315" src="https://www.youtube.com/embed/W853WVF5AqI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',20),
	 ('<iframe width="560" height="315" src="https://www.youtube.com/embed/FMHiSF0rHF8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',21),
	 ('<iframe width="560" height="315" src="https://www.youtube.com/embed/oAK9mK7wWvw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',22);
INSERT INTO snowtricks.movie (balise,figure_id) VALUES
	 ('<iframe width="560" height="315" src="https://www.youtube.com/embed/ZWZGE9yp5hA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',24);

INSERT INTO snowtricks.comment (create_date,message,user_id,figure_id) VALUES
	 ('2023-02-02 19:24:24.0','test',21,14),
	 ('2023-02-02 19:33:53.0','toto',21,14),
	 ('2023-02-02 19:36:41.0','btn',21,14),
	 ('2023-02-02 19:47:15.0','btn 2',21,14),
	 ('2023-02-02 19:49:18.0','test redirect',21,14),
	 ('2023-02-08 10:59:40.0','tata',21,14),
	 ('2023-02-08 10:59:47.0','titi',21,14),
	 ('2023-02-08 10:59:54.0','tutu',21,14),
	 ('2023-02-08 11:00:11.0','tete',21,14),
	 ('2023-02-09 19:40:01.0','test comment',21,14);
INSERT INTO snowtricks.comment (create_date,message,user_id,figure_id) VALUES
	 ('2023-03-20 18:28:07.0','the best one',21,24),
	 ('2023-03-20 18:50:45.0','hello',21,14);

