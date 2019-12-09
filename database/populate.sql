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

INSERT INTO habitation (hab_id,title,price_per_day,nr_rooms,nr_bathrooms,capacity,addr,location,region,description) VALUES (1,"Casa de Milhafre",92,2,1,4,"Rua Visconde de Videne","Porto", "Norte","Proin viverra, tellus vitae varius aliquam, purus est viverra nibh, eu dapibus lorem nisl sit amet ligula. Nulla laoreet molestie gravida.");
INSERT INTO habitation (hab_id,title,price_per_day,nr_rooms,nr_bathrooms,capacity,addr,location,region,description) VALUES (2,"Quinta do Covelo",178,3,2,8,"Rua Dr. José Almeida Esteves", "Porto","Norte","Quisque accumsan enim id erat sodales, euismod commodo elit lobortis. Curabitur posuere, metus et gravida ultrices non fringilla justo ligula id est. Vivamus ac facilisis felis.");
INSERT INTO habitation (hab_id,title,price_per_day,nr_rooms,nr_bathrooms,capacity,addr,location,region,description) VALUES (3,"Apartamento T3 Moderno",141,2,2,6,"Av. da França" ,"Porto","Norte","Aliquam mauris nisi, facilisis sed malesuada non, condimentum ut purus. In hac habitasse platea dictumst. Donec eu augue diam.");
INSERT INTO habitation (hab_id,title,price_per_day,nr_rooms,nr_bathrooms,capacity,addr,location,region,description) VALUES (4,"Quarto Privado Casal",63,1,1,2,"Rua das Flores","Porto", "Norte","Cras euismod fringilla suscipit. Vestibulum sed nibh pellentesque, fringilla neque quis, euismod diam. Duis vel purus nec risus sollicitudin bibendum.");
INSERT INTO habitation (hab_id,title,price_per_day,nr_rooms,nr_bathrooms,capacity,addr,location,region,description) VALUES (5,"Classy Studio",105,1,1,3,"Rua da Trindade","Porto","Norte","Praesent ac lectus ultrices, efficitur neque id, vehicula erat. Pellentesque finibus velit id urna faucibus venenatis. Etiam eu faucibus justo.");
INSERT INTO habitation (hab_id,title,price_per_day,nr_rooms,nr_bathrooms,capacity,addr,location,region,description) VALUES (6,"Classic House",63,2,1,4,"Rua da Marlene","Viseu","Centro","Praesent ac lectus ultrices, efficitur neque id, vehicula erat. Pellentesque finibus velit id urna faucibus venenatis. Etiam eu faucibus justo.");
INSERT INTO habitation (hab_id,title,price_per_day,nr_rooms,nr_bathrooms,capacity,addr,location,region,description) VALUES (7,"Quinta das Iguanas",87,3,2,8,"Rua da Iguana","Coimbra","Centro","Praesent ac lectus ultrices, efficitur neque id, vehicula erat. Pellentesque finibus velit id urna faucibus venenatis. Etiam eu faucibus justo.");
INSERT INTO habitation (hab_id,title,price_per_day,nr_rooms,nr_bathrooms,capacity,addr,location,region,description) VALUES (8,"Casa das Laranjas",103,1,1,3,"Rua da Laranja","Lisboa","Centro","Praesent ac lectus ultrices, efficitur neque id, vehicula erat. Pellentesque finibus velit id urna faucibus venenatis. Etiam eu faucibus justo.");
INSERT INTO habitation (hab_id,title,price_per_day,nr_rooms,nr_bathrooms,capacity,addr,location,region,description) VALUES (9,"Solar Acolhedor",87,1,1,3,"Rua da Tanjerina","Faro","Sul","Praesent ac lectus ultrices, efficitur neque id, vehicula erat. Pellentesque finibus velit id urna faucibus venenatis. Etiam eu faucibus justo.");
INSERT INTO habitation (hab_id,title,price_per_day,nr_rooms,nr_bathrooms,capacity,addr,location,region,description) VALUES (10,"Quinta das Alfarrobas",101,3,3,8,"Rua da Alfarroba","Almodovar","Sul","Praesent ac lectus ultrices, efficitur neque id, vehicula erat. Pellentesque finibus velit id urna faucibus venenatis. Etiam eu faucibus justo.");
INSERT INTO habitation (hab_id,title,price_per_day,nr_rooms,nr_bathrooms,capacity,addr,location,region,description) VALUES (11,"Casa dos Pasteis",71,1,1,4,"Rua da Pasteleira","Portimao","Sul","Praesent ac lectus ultrices, efficitur neque id, vehicula erat. Pellentesque finibus velit id urna faucibus venenatis. Etiam eu faucibus justo.");
INSERT INTO habitation (hab_id,title,price_per_day,nr_rooms,nr_bathrooms,capacity,addr,location,region,description) VALUES (12,"Casa Moderna Centro",53,1,1,2,"Rua da Camisa","Lisboa","Centro","Praesent ac lectus ultrices, efficitur neque id, vehicula erat. Pellentesque finibus velit id urna faucibus venenatis. Etiam eu faucibus justo.");
INSERT INTO habitation (hab_id,title,price_per_day,nr_rooms,nr_bathrooms,capacity,addr,location,region,description) VALUES (13,"Casa da Bolinha",103,2,1,3,"Rua da BolaBerlim","Albufeira","Sul","Praesent ac lectus ultrices, efficitur neque id, vehicula erat. Pellentesque finibus velit id urna faucibus venenatis. Etiam eu faucibus justo.");

INSERT INTO images (link,hab_id) VALUES ("../images/fancy_living_room.jpg",1);
INSERT INTO images (link,hab_id) VALUES ("../images/modern_living_room.jpg",1);
INSERT INTO images (link,hab_id) VALUES ("../images/spacey_living_room.jpg",1);
INSERT INTO images (link,hab_id) VALUES ("../images/minimal_kitchen.jpg",1);

INSERT INTO images (link,hab_id) VALUES ("../images/fancy_living_room.jpg",2);
INSERT INTO images (link,hab_id) VALUES ("../images/modern_living_room.jpg",2);
INSERT INTO images (link,hab_id) VALUES ("../images/spacey_living_room.jpg",2);
INSERT INTO images (link,hab_id) VALUES ("../images/minimal_kitchen.jpg",2);

INSERT INTO images (link,hab_id) VALUES ("../images/fancy_living_room.jpg",3);
INSERT INTO images (link,hab_id) VALUES ("../images/modern_living_room.jpg",3);
INSERT INTO images (link,hab_id) VALUES ("../images/spacey_living_room.jpg",3);
INSERT INTO images (link,hab_id) VALUES ("../images/minimal_kitchen.jpg",3);

INSERT INTO images (link,hab_id) VALUES ("../images/fancy_living_room.jpg",4);
INSERT INTO images (link,hab_id) VALUES ("../images/modern_living_room.jpg",4);
INSERT INTO images (link,hab_id) VALUES ("../images/spacey_living_room.jpg",4);
INSERT INTO images (link,hab_id) VALUES ("../images/minimal_kitchen.jpg",4);

INSERT INTO images (link,hab_id) VALUES ("../images/fancy_living_room.jpg",5);
INSERT INTO images (link,hab_id) VALUES ("../images/modern_living_room.jpg",5);
INSERT INTO images (link,hab_id) VALUES ("../images/spacey_living_room.jpg",5);
INSERT INTO images (link,hab_id) VALUES ("../images/minimal_kitchen.jpg",5);

INSERT INTO images (link,hab_id) VALUES ("../images/fancy_living_room.jpg",6);
INSERT INTO images (link,hab_id) VALUES ("../images/modern_living_room.jpg",6);
INSERT INTO images (link,hab_id) VALUES ("../images/spacey_living_room.jpg",6);
INSERT INTO images (link,hab_id) VALUES ("../images/minimal_kitchen.jpg",6);

INSERT INTO images (link,hab_id) VALUES ("../images/fancy_living_room.jpg",7);
INSERT INTO images (link,hab_id) VALUES ("../images/modern_living_room.jpg",7);
INSERT INTO images (link,hab_id) VALUES ("../images/spacey_living_room.jpg",7);
INSERT INTO images (link,hab_id) VALUES ("../images/minimal_kitchen.jpg",7);

INSERT INTO images (link,hab_id) VALUES ("../images/fancy_living_room.jpg",8);
INSERT INTO images (link,hab_id) VALUES ("../images/modern_living_room.jpg",8);
INSERT INTO images (link,hab_id) VALUES ("../images/spacey_living_room.jpg",8);
INSERT INTO images (link,hab_id) VALUES ("../images/minimal_kitchen.jpg",8);

INSERT INTO images (link,hab_id) VALUES ("../images/fancy_living_room.jpg",9);
INSERT INTO images (link,hab_id) VALUES ("../images/modern_living_room.jpg",9);
INSERT INTO images (link,hab_id) VALUES ("../images/spacey_living_room.jpg",9);
INSERT INTO images (link,hab_id) VALUES ("../images/minimal_kitchen.jpg",9);

INSERT INTO images (link,hab_id) VALUES ("../images/fancy_living_room.jpg",10);
INSERT INTO images (link,hab_id) VALUES ("../images/modern_living_room.jpg",10);
INSERT INTO images (link,hab_id) VALUES ("../images/spacey_living_room.jpg",10);
INSERT INTO images (link,hab_id) VALUES ("../images/minimal_kitchen.jpg",10);

INSERT INTO images (link,hab_id) VALUES ("../images/fancy_living_room.jpg",11);
INSERT INTO images (link,hab_id) VALUES ("../images/modern_living_room.jpg",11);
INSERT INTO images (link,hab_id) VALUES ("../images/spacey_living_room.jpg",11);
INSERT INTO images (link,hab_id) VALUES ("../images/minimal_kitchen.jpg",11);

INSERT INTO ownership (hab,owner,added_on) VALUES (1,3,"2019-10-21 15:17:42");
INSERT INTO ownership (hab,owner,added_on) VALUES (2,1,"2019-10-21 10:05:27");
INSERT INTO ownership (hab,owner,added_on) VALUES (3,2,"2019-10-21 19:24:08");
INSERT INTO ownership (hab,owner,added_on) VALUES (4,2,"2019-10-21 19:25:11");
INSERT INTO ownership (hab,owner,added_on) VALUES (5,3,"2019-10-28 09:31:03");

INSERT into reservation (res_id,nr_guests,hab,client,start_date,end_date) VALUES (1,3,1,6,"2019-11-01","2019-11-03");
INSERT into reservation (res_id,nr_guests,hab,client,start_date,end_date) VALUES (2,6,2,4,"2019-10-31","2019-11-01");
INSERT into reservation (res_id,nr_guests,hab,client,start_date,end_date) VALUES (3,4,3,7,"2019-11-10","2019-11-16");
INSERT into reservation (res_id,nr_guests,hab,client,start_date,end_date) VALUES (4,2,4,10,"2019-11-18","2019-11-19");
INSERT into reservation (res_id,nr_guests,hab,client,start_date,end_date) VALUES (5,2,5,8,"2019-11-05","2019-11-08");
INSERT into reservation (res_id,nr_guests,hab,client,start_date,end_date) VALUES (6,2,4,9,"2019-11-08","2019-11-10");