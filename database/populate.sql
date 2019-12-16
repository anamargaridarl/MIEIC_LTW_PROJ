PRAGMA foreign_keys = ON;

INSERT INTO user (user_id,username,hash,joined_on, email) VALUES (1,"Ana Maggie", "$2y$10$0w.l.hGG2.mtodwkiuk02ePjwxgUv0GOFYIyx7UCtWtGJr5Rcaqam", "2019-10-21", "ana@mail.com");
INSERT INTO user (user_id,username,hash,joined_on, email) VALUES (2,"Gonçalo Oliver", "$2y$10$mArEARnsk1dK0PUSjVgihu0vOK/iOYJ/O.gkYZ3vlZsqjaMGsSU6e", "2019-10-21", "goncalo@mail.com");
INSERT INTO user (user_id,username,hash,joined_on, email) VALUES (3,"João Martens", "$2y$10$N2KBEL.IMqukR8oBP0UJieFBeteFSzfLULFVs.nxP0yz/klHlg6Cu", "2019-10-21", "joao@mail.com");
INSERT INTO user (user_id,username,hash,joined_on, email) VALUES (4,"Nadia Bradford", "$2y$10$O799MdRduy5SSPXbfYlv3e5Ng28s5NIFgdSiXgksQkfp/JwwzKvr2", "2019-10-29", "nbradford142@mail.co.uk");
INSERT INTO user (user_id,username,hash,joined_on, email) VALUES (5,"Casey Hawkins", "$2y$10$3WQJtfRWMc4qexWzyfgjgO9uAQI.lL2zk70lo.ArfMIv5oFDIENs2", "2019-11-01", "hawkcasey@mail.us");
INSERT INTO user (user_id,username,hash,joined_on, email) VALUES (6,"Edgar Gray", "$2y$10$xvZkXi8hcHfxT.DyIZlxleLHTKShyeHcQmIl3c8wIwHDipKXR6rx6", "2019-11-01", "grayedgar@edgar.me");
INSERT INTO user (user_id,username,hash,joined_on, email) VALUES (7,"Cain Hampton", "$2y$10$7VDUpnvushqUdvo3fD6dPuDnfJiLOyioSTV1F4raWcqSonOIwEqom", "2019-11-10", "hamptonc@bestfreeemail.com");
INSERT INTO user (user_id,username,hash,joined_on, email) VALUES (8,"Sean Clayton", "$2y$10$TFgqYa67piA80oDYpuxZoea0Yp35zdkKXODiZQL7tk5/qgPqhxvgS", "2019-11-05", "sc2778172@mail.co.nz");
INSERT INTO user (user_id,username,hash,joined_on, email) VALUES (9,"Omar Baird", "$2y$10$47NvUFdI8Xd8pgN48C8Si.x/WslK26sMexMzLhaCFZh5dwlBJKZiy", "2019-11-08", "omar@bai.rd");
INSERT INTO user (user_id,username,hash,joined_on, email) VALUES (10,"Zach Mccall", "$2y$10$Tyvw15h/Zdt2YBvMlzdypuuB/RhLF7skW5EX28HSjGQxD0p6UFra2", "2019-11-15", "makeamericagreatagain@mtrump2020.com");

INSERT INTO avatar (link,user_id) VALUES ("profile_pic.jpg",1);
INSERT INTO avatar (link,user_id) VALUES ("tux.jpg",2);
INSERT INTO avatar (link,user_id) VALUES ("vianetta.jpg",3);
INSERT INTO avatar (link,user_id) VALUES ("nadia.jpg",4);
INSERT INTO avatar (link,user_id) VALUES ("casey.jpg",5);
INSERT INTO avatar (link,user_id) VALUES ("edgar.jpg",6);
INSERT INTO avatar (link,user_id) VALUES ("cain.jpg",7);
INSERT INTO avatar (link,user_id) VALUES ("sean.jpg",8);
INSERT INTO avatar (link,user_id) VALUES ("omar.jpg",9);
INSERT INTO avatar (link,user_id) VALUES ("zach.jpg",10);

INSERT INTO client (client_id) VALUES (1);
INSERT INTO client (client_id) VALUES (2);
INSERT INTO client (client_id) VALUES (3);
INSERT INTO client (client_id) VALUES (4);
INSERT INTO client (client_id) VALUES (5);
INSERT INTO client (client_id) VALUES (6);
INSERT INTO client (client_id) VALUES (7);
INSERT INTO client (client_id) VALUES (8);
INSERT INTO client (client_id) VALUES (9);
INSERT INTO client (client_id) VALUES (10);

INSERT INTO owner (owner_id) VALUES (1);
INSERT INTO owner (owner_id) VALUES (2);
INSERT INTO owner (owner_id) VALUES (3);
INSERT INTO owner (owner_id) VALUES (4);
INSERT INTO owner (owner_id) VALUES (5);
INSERT INTO owner (owner_id) VALUES (6);
INSERT INTO owner (owner_id) VALUES (7);
INSERT INTO owner (owner_id) VALUES (8);
INSERT INTO owner (owner_id) VALUES (9);
INSERT INTO owner (owner_id) VALUES (10);

INSERT INTO habitation (hab_id,title,price_per_day,nr_rooms,nr_bathrooms,capacity,addr,location,region,description,active) VALUES (1,"Casa de Milhafre",92,2,1,4,"Rua Visconde de Setúbal","Porto", "North","This house offers you a splendid view of the ancient and rotten buildings of the beautiful city of Porto. Nothing like waking up to the sound of a car being towed for wrong parking. Come visit Porto!.",1);
INSERT INTO habitation (hab_id,title,price_per_day,nr_rooms,nr_bathrooms,capacity,addr,location,region,description,active) VALUES (2,"Quinta do Covelo",178,3,2,8,"Rua de Bolama", "Porto","North","Nothing makes you feel obnoxious and snob like having a huge room just for youself that belonged to some Duke or Viscount, or whatever. Come to Quinta do Covelo and try some of that Royal life.",1);
INSERT INTO habitation (hab_id,title,price_per_day,nr_rooms,nr_bathrooms,capacity,addr,location,region,description,active) VALUES (3,"Apartamento T3 Moderno",141,2,2,6,"Av. da França" ,"Porto","North","This apartament is really modern. The inner structures are from the 60's, but I swear I got that wardrobe from IKEA last month.",1);
INSERT INTO habitation (hab_id,title,price_per_day,nr_rooms,nr_bathrooms,capacity,addr,location,region,description,active) VALUES (4,"Quarto Privado Casal",63,1,1,2,"Rua das Flores","Porto", "North","Welcome to Porto! Plead your allegiance to F.C. Porto and São João and you are going to fit just right. This private room gives you just enough privacy so that your elderly neighbours don't snoop you, as long as you close the windows. Bibó Porto, carago.",1);
INSERT INTO habitation (hab_id,title,price_per_day,nr_rooms,nr_bathrooms,capacity,addr,location,region,description,active) VALUES (5,"Classy Studio",105,1,1,3,"Rua do Estêvão","Porto","North","If it has studio in it, it must be a spacious place. Just kidding, you need a space to sleep, right? Well, we give you just what you need. Nothing else. Literally.",1);
INSERT INTO habitation (hab_id,title,price_per_day,nr_rooms,nr_bathrooms,capacity,addr,location,region,description,active) VALUES (6,"Classic House",63,2,1,4,"Rua Vitória","Viseu","Center","This classic house gives you the perfect picture of the traditional Portugues house. It has a never ending smell of beer and chorizo that we never been able to remove. Some traditions just persist no matter what, oh well. Come visit us!",1);
INSERT INTO habitation (hab_id,title,price_per_day,nr_rooms,nr_bathrooms,capacity,addr,location,region,description,active) VALUES (7,"Quinta das Iguanas",87,3,2,8,"Rua Miguel Torga","Coimbra","Center","This place is full of adventures: from getting bitten by a strange animal, to find your car smelling weird after a night in. It really lives up to its name, come try!",1);
INSERT INTO habitation (hab_id,title,price_per_day,nr_rooms,nr_bathrooms,capacity,addr,location,region,description,active) VALUES (8,"Casa das Laranjas",103,1,1,3,"Avenida da Liberdade","Lisboa","Center","Have you ever eaten an orange? Like, really really taste one? Come experience a weekend or some vacations to this spot. Everything is about oranges, and no, we don't have a framed picture of Donald Trump...",1);
INSERT INTO habitation (hab_id,title,price_per_day,nr_rooms,nr_bathrooms,capacity,addr,location,region,description,active) VALUES (9,"Solar Acolhedor",87,1,1,3,"Rua da Madalena","Faro","South","'What the hell is a Solar?!', may you wonder. Well, we don't know either. It just looks good and makes the house empowered. It's just a house bigger than average. Come on and be elitist for some days!",1);
INSERT INTO habitation (hab_id,title,price_per_day,nr_rooms,nr_bathrooms,capacity,addr,location,region,description,active) VALUES (10,"Quinta das Alfarrobas",101,3,3,8,"Rua do Relógio","Almodovar","South","Welcome to Quinta das Alfarrobas! Here you have everything you need to relax and spend some quality time with your family, friends or just by yourself *coughs*ₗₒₛₑᵣ*coughs.",1);
INSERT INTO habitation (hab_id,title,price_per_day,nr_rooms,nr_bathrooms,capacity,addr,location,region,description,active) VALUES (11,"Viennetta House",125,2,1,3,"Rua de Altamira","Viana do Castelo","North","Hi there. Welcome to my house! Yes, I do live here. Yes, we will encounter every morning. Yes, I'm going to be using the same spaces as you. But I don't judge, so do whatever you want to, as long as you don't leave the milk packet outside the fridge, enjoy your stay.",1);
INSERT INTO habitation (hab_id,title,price_per_day,nr_rooms,nr_bathrooms,capacity,addr,location,region,description,active) VALUES (12,"Conde Mansions",121,2,1,3,"Avenida do Brasil","Vila do Conde","North","Have you ever wanted to sleep in a king size bed for a cheap price? Feel like royalty? Boss other people around? This is your chance to do all that, we have underpaid employees to serve your every need. Come try, we might join you and have all fun exploiting the working class, ahahaha...",1);
INSERT INTO habitation (hab_id,title,price_per_day,nr_rooms,nr_bathrooms,capacity,addr,location,region,description,active) VALUES (13,"Casa da Bolinha",103,2,1,3,"Rua Gil Eanes","Albufeira","South","Bolinha is our house owner, she is a 88 year old widow that occupies a part of the house. To be honest, we haven't heard from her in a while. If you come, would you mind to check up on her?...",1);

INSERT INTO images (link,hab_id) VALUES ("fancy_living_room.jpg",1);
INSERT INTO images (link,hab_id) VALUES ("modern_living_room.jpg",1);
INSERT INTO images (link,hab_id) VALUES ("spacey_living_room.jpg",1);
INSERT INTO images (link,hab_id) VALUES ("minimal_kitchen.jpg",1);

INSERT INTO images (link,hab_id) VALUES ("bed1.jpg",2);
INSERT INTO images (link,hab_id) VALUES ("kitchen1.jpeg",2);
INSERT INTO images (link,hab_id) VALUES ("room1.jpg",2);

INSERT INTO images (link,hab_id) VALUES ("bed2.jpeg",3);
INSERT INTO images (link,hab_id) VALUES ("kitchen2.jpeg",3);
INSERT INTO images (link,hab_id) VALUES ("room2.jpg",3);

INSERT INTO images (link,hab_id) VALUES ("bed3.jpeg",4);
INSERT INTO images (link,hab_id) VALUES ("room3.jpeg",4);

INSERT INTO images (link,hab_id) VALUES ("bed4.jpeg",5);
INSERT INTO images (link,hab_id) VALUES ("kitchen4.jpg",5);
INSERT INTO images (link,hab_id) VALUES ("room5.jpg",5);

INSERT INTO images (link,hab_id) VALUES ("bed5.jpg",6);
INSERT INTO images (link,hab_id) VALUES ("kitchen5.jpg",6);
INSERT INTO images (link,hab_id) VALUES ("room6.jpg",6);

INSERT INTO images (link,hab_id) VALUES ("bed6.jpg",7);
INSERT INTO images (link,hab_id) VALUES ("kitchen7.jpeg",7);
INSERT INTO images (link,hab_id) VALUES ("room7.jpg",7);

INSERT INTO images (link,hab_id) VALUES ("bed7.jpg",8);
INSERT INTO images (link,hab_id) VALUES ("kitchen8.jpeg",8);
INSERT INTO images (link,hab_id) VALUES ("room8.jpg",8);

INSERT INTO images (link,hab_id) VALUES ("bed9.jpg",9);
INSERT INTO images (link,hab_id) VALUES ("kitchen9.jpg",9);
INSERT INTO images (link,hab_id) VALUES ("room9.jpeg",9);

INSERT INTO images (link,hab_id) VALUES ("bed10.jpeg",10);
INSERT INTO images (link,hab_id) VALUES ("kitchen10.jpeg",10);
INSERT INTO images (link,hab_id) VALUES ("room10.jpeg",10);

INSERT INTO images (link,hab_id) VALUES ("bed11.jpeg",11);
INSERT INTO images (link,hab_id) VALUES ("kitchen11.jpeg",11);
INSERT INTO images (link,hab_id) VALUES ("room11.jpeg",11);

INSERT INTO images (link,hab_id) VALUES ("bed12.jpeg",12);
INSERT INTO images (link,hab_id) VALUES ("kitchen12.jpeg",12);
INSERT INTO images (link,hab_id) VALUES ("room12.jpg",12);

INSERT INTO images (link,hab_id) VALUES ("bed13.jpeg",13);
INSERT INTO images (link,hab_id) VALUES ("kitchen13.jpeg",13);
INSERT INTO images (link,hab_id) VALUES ("room13.jpg",13);

INSERT INTO ownership (hab,owner,added_on) VALUES (1,3,"2019-10-21");
INSERT INTO ownership (hab,owner,added_on) VALUES (2,1,"2019-10-21");
INSERT INTO ownership (hab,owner,added_on) VALUES (3,2,"2019-10-21");
INSERT INTO ownership (hab,owner,added_on) VALUES (4,2,"2019-10-21");
INSERT INTO ownership (hab,owner,added_on) VALUES (5,3,"2019-10-28");
INSERT INTO ownership (hab,owner,added_on) VALUES (6,4,"2019-10-28");
INSERT INTO ownership (hab,owner,added_on) VALUES (7,5,"2019-10-28");
INSERT INTO ownership (hab,owner,added_on) VALUES (8,6,"2019-10-28");
INSERT INTO ownership (hab,owner,added_on) VALUES (9,7,"2019-10-28");
INSERT INTO ownership (hab,owner,added_on) VALUES (10,8,"2019-10-28");
INSERT INTO ownership (hab,owner,added_on) VALUES (11,9,"2019-10-28");
INSERT INTO ownership (hab,owner,added_on) VALUES (12,10,"2019-10-28");
INSERT INTO ownership (hab,owner,added_on) VALUES (13,5,"2019-10-28");


INSERT into reservation (res_id,nr_guests,hab,client,start_date,end_date) VALUES (1,3,1,6,"2019-11-01","2019-11-03");
INSERT into reservation (res_id,nr_guests,hab,client,start_date,end_date) VALUES (2,6,2,2,"2019-10-31","2019-11-01");
INSERT into reservation (res_id,nr_guests,hab,client,start_date,end_date) VALUES (3,4,3,7,"2019-11-10","2019-11-16");
INSERT into reservation (res_id,nr_guests,hab,client,start_date,end_date) VALUES (4,2,4,10,"2019-11-18","2019-11-19");
INSERT into reservation (res_id,nr_guests,hab,client,start_date,end_date) VALUES (5,2,5,8,"2019-11-05","2019-11-08");
INSERT into reservation (res_id,nr_guests,hab,client,start_date,end_date) VALUES (6,2,4,9,"2019-11-08","2019-11-10");
