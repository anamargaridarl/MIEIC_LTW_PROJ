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

INSERT INTO habitation (hab_id,title,price_per_day,nr_rooms,nr_bathrooms,capacity,addr,location,region,description,active) VALUES (1,"Casa de Milhafre",92,2,1,4,"Rua Visconde de Setúbal","Porto", "north","Proin viverra, tellus vitae varius aliquam, purus est viverra nibh, eu dapibus lorem nisl sit amet ligula. Nulla laoreet molestie gravida.",1);
INSERT INTO habitation (hab_id,title,price_per_day,nr_rooms,nr_bathrooms,capacity,addr,location,region,description,active) VALUES (2,"Quinta do Covelo",178,3,2,8,"Rua de Bolama", "Porto","north","Quisque accumsan enim id erat sodales, euismod commodo elit lobortis. Curabitur posuere, metus et gravida ultrices non fringilla justo ligula id est. Vivamus ac facilisis felis.",1);
INSERT INTO habitation (hab_id,title,price_per_day,nr_rooms,nr_bathrooms,capacity,addr,location,region,description,active) VALUES (3,"Apartamento T3 Moderno",141,2,2,6,"Av. da França" ,"Porto","north","Aliquam mauris nisi, facilisis sed malesuada non, condimentum ut purus. In hac habitasse platea dictumst. Donec eu augue diam.",1);
INSERT INTO habitation (hab_id,title,price_per_day,nr_rooms,nr_bathrooms,capacity,addr,location,region,description,active) VALUES (4,"Quarto Privado Casal",63,1,1,2,"Rua das Flores","Porto", "north","Cras euismod fringilla suscipit. Vestibulum sed nibh pellentesque, fringilla neque quis, euismod diam. Duis vel purus nec risus sollicitudin bibendum.",1);
INSERT INTO habitation (hab_id,title,price_per_day,nr_rooms,nr_bathrooms,capacity,addr,location,region,description,active) VALUES (5,"Classy Studio",105,1,1,3,"Rua do Estêvão","Porto","north","Praesent ac lectus ultrices, efficitur neque id, vehicula erat. Pellentesque finibus velit id urna faucibus venenatis. Etiam eu faucibus justo.",1);
INSERT INTO habitation (hab_id,title,price_per_day,nr_rooms,nr_bathrooms,capacity,addr,location,region,description,active) VALUES (6,"Classic House",63,2,1,4,"Rua Vitória","Viseu","center","Praesent ac lectus ultrices, efficitur neque id, vehicula erat. Pellentesque finibus velit id urna faucibus venenatis. Etiam eu faucibus justo.",1);
INSERT INTO habitation (hab_id,title,price_per_day,nr_rooms,nr_bathrooms,capacity,addr,location,region,description,active) VALUES (7,"Quinta das Iguanas",87,3,2,8,"Rua Miguel Torga","Coimbra","center","Praesent ac lectus ultrices, efficitur neque id, vehicula erat. Pellentesque finibus velit id urna faucibus venenatis. Etiam eu faucibus justo.",1);
INSERT INTO habitation (hab_id,title,price_per_day,nr_rooms,nr_bathrooms,capacity,addr,location,region,description,active) VALUES (8,"Casa das Laranjas",103,1,1,3,"Avenida da Liberdade","Lisboa","center","Praesent ac lectus ultrices, efficitur neque id, vehicula erat. Pellentesque finibus velit id urna faucibus venenatis. Etiam eu faucibus justo.",1);
INSERT INTO habitation (hab_id,title,price_per_day,nr_rooms,nr_bathrooms,capacity,addr,location,region,description,active) VALUES (9,"Solar Acolhedor",87,1,1,3,"Rua da Madalena","Faro","south","Praesent ac lectus ultrices, efficitur neque id, vehicula erat. Pellentesque finibus velit id urna faucibus venenatis. Etiam eu faucibus justo.",1);
INSERT INTO habitation (hab_id,title,price_per_day,nr_rooms,nr_bathrooms,capacity,addr,location,region,description,active) VALUES (10,"Quinta das Alfarrobas",101,3,3,8,"Rua do Relógio","Almodovar","south","Praesent ac lectus ultrices, efficitur neque id, vehicula erat. Pellentesque finibus velit id urna faucibus venenatis. Etiam eu faucibus justo.",1);
INSERT INTO habitation (hab_id,title,price_per_day,nr_rooms,nr_bathrooms,capacity,addr,location,region,description,active) VALUES (11,"Casa dos Pasteis",71,1,1,4,"Rua das Comunicações","Portimao","south","Praesent ac lectus ultrices, efficitur neque id, vehicula erat. Pellentesque finibus velit id urna faucibus venenatis. Etiam eu faucibus justo.",1);
INSERT INTO habitation (hab_id,title,price_per_day,nr_rooms,nr_bathrooms,capacity,addr,location,region,description,active) VALUES (12,"Casa Moderna Centro",53,1,1,2,"Rua da Camisa","Lisboa","center","Praesent ac lectus ultrices, efficitur neque id, vehicula erat. Pellentesque finibus velit id urna faucibus venenatis. Etiam eu faucibus justo.",1);
INSERT INTO habitation (hab_id,title,price_per_day,nr_rooms,nr_bathrooms,capacity,addr,location,region,description,active) VALUES (13,"Casa da Bolinha",103,2,1,3,"Rua Gil Eanes","Albufeira","south","Praesent ac lectus ultrices, efficitur neque id, vehicula erat. Pellentesque finibus velit id urna faucibus venenatis. Etiam eu faucibus justo.",1);
INSERT INTO habitation (hab_id,title,price_per_day,nr_rooms,nr_bathrooms,capacity,addr,location,region,description,active) VALUES (14,"Casa do Quadradinho",105,2,1,3,"Rua Bartolomeu Dias","Albufeira","south","Praesent ac lectus ultrices, efficitur neque id, vehicula erat. Pellentesque finibus velit id urna faucibus venenatis. Etiam eu faucibus justo.",1);
INSERT INTO habitation (hab_id,title,price_per_day,nr_rooms,nr_bathrooms,capacity,addr,location,region,description,active) VALUES (15,"Casa do Triangulozinho",113,2,1,3,"Rua Fernão de Magalhães","Albufeira","south","Praesent ac lectus ultrices, efficitur neque id, vehicula erat. Pellentesque finibus velit id urna faucibus venenatis. Etiam eu faucibus justo.",1);
INSERT INTO habitation (hab_id,title,price_per_day,nr_rooms,nr_bathrooms,capacity,addr,location,region,description,active) VALUES (16,"Comporta Luxury Homes",1250,2,1,3,"Rua da Fraternidade","Comporta","south","Praesent ac lectus ultrices, efficitur neque id, vehicula erat. Pellentesque finibus velit id urna faucibus venenatis. Etiam eu faucibus justo.",1);
INSERT INTO habitation (hab_id,title,price_per_day,nr_rooms,nr_bathrooms,capacity,addr,location,region,description,active) VALUES (17,"Casa do Forno",102,2,1,3,"Rua do Forno","Vide","center","Praesent ac lectus ultrices, efficitur neque id, vehicula erat. Pellentesque finibus velit id urna faucibus venenatis. Etiam eu faucibus justo.",1);
INSERT INTO habitation (hab_id,title,price_per_day,nr_rooms,nr_bathrooms,capacity,addr,location,region,description,active) VALUES (18,"Bridge Appartments",136,2,1,3,"Avenida António Feijó","Ponte de Lima","north","Praesent ac lectus ultrices, efficitur neque id, vehicula erat. Pellentesque finibus velit id urna faucibus venenatis. Etiam eu faucibus justo.",1);
INSERT INTO habitation (hab_id,title,price_per_day,nr_rooms,nr_bathrooms,capacity,addr,location,region,description,active) VALUES (19,"Viennetta House",125,2,1,3,"Rua de Altamira","Viana do Castelo","north","Praesent ac lectus ultrices, efficitur neque id, vehicula erat. Pellentesque finibus velit id urna faucibus venenatis. Etiam eu faucibus justo.",1);
INSERT INTO habitation (hab_id,title,price_per_day,nr_rooms,nr_bathrooms,capacity,addr,location,region,description,active) VALUES (20,"Casa do Caminho",137,2,1,3,"Avenida Manuel Xavier","Caminha","north","Praesent ac lectus ultrices, efficitur neque id, vehicula erat. Pellentesque finibus velit id urna faucibus venenatis. Etiam eu faucibus justo.",1);
INSERT INTO habitation (hab_id,title,price_per_day,nr_rooms,nr_bathrooms,capacity,addr,location,region,description,active) VALUES (21,"Conde Mansions",121,2,1,3,"Avenida do Brasil","Vila do Conde","north","Praesent ac lectus ultrices, efficitur neque id, vehicula erat. Pellentesque finibus velit id urna faucibus venenatis. Etiam eu faucibus justo.",1);


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
INSERT INTO ownership (hab,owner,added_on) VALUES (14,4,"2019-10-28");
INSERT INTO ownership (hab,owner,added_on) VALUES (15,1,"2019-10-28");
INSERT INTO ownership (hab,owner,added_on) VALUES (16,7,"2019-10-28");
INSERT INTO ownership (hab,owner,added_on) VALUES (17,8,"2019-10-28");
INSERT INTO ownership (hab,owner,added_on) VALUES (18,5,"2019-10-28");
INSERT INTO ownership (hab,owner,added_on) VALUES (19,7,"2019-10-28");
INSERT INTO ownership (hab,owner,added_on) VALUES (20,9,"2019-10-28");
INSERT INTO ownership (hab,owner,added_on) VALUES (21,6,"2019-10-28");


INSERT into reservation (res_id,nr_guests,hab,client,start_date,end_date) VALUES (1,3,1,6,"2019-11-01","2019-11-03");
INSERT into reservation (res_id,nr_guests,hab,client,start_date,end_date) VALUES (2,6,2,2,"2019-10-31","2019-11-01");
INSERT into reservation (res_id,nr_guests,hab,client,start_date,end_date) VALUES (3,4,3,7,"2019-11-10","2019-11-16");
INSERT into reservation (res_id,nr_guests,hab,client,start_date,end_date) VALUES (4,2,4,10,"2019-11-18","2019-11-19");
INSERT into reservation (res_id,nr_guests,hab,client,start_date,end_date) VALUES (5,2,5,8,"2019-11-05","2019-11-08");
INSERT into reservation (res_id,nr_guests,hab,client,start_date,end_date) VALUES (6,2,4,9,"2019-11-08","2019-11-10");
