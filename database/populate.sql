PRAGMA foreign_keys = ON;

INSERT INTO user (user_id,username,passwd,joined_on) VALUES (1,"Ana Maggie","Golden_Biles99","2019-10-21");
INSERT INTO user (user_id,username,passwd,joined_on) VALUES (2,"Gonçalo Oliver","SuPErtUx4LiF","2019-10-21");
INSERT INTO user (user_id,username,passwd,joined_on) VALUES (3,"João Martens","picoCTF{p3nt3st1ng_4_n00bs_wefdw3e1}","2019-10-21");
INSERT INTO user (user_id,username,passwd,joined_on) VALUES (4,"Nadia Bradford","m004Q_L8uN","2019-10-29");
INSERT INTO user (user_id,username,passwd,joined_on) VALUES (5,"Casey Hawkins","GVr01LGNze","2019-11-01");
INSERT INTO user (user_id,username,passwd,joined_on) VALUES (6,"Edgar Gray","49oMSwShe3","2019-11-01");
INSERT INTO user (user_id,username,passwd,joined_on) VALUES (7,"Cain Hampton","AYZ2iR9w9j","2019-11-10");
INSERT INTO user (user_id,username,passwd,joined_on) VALUES (8,"Sean Clayton","T4p3zp0OYU","2019-11-05");
INSERT INTO user (user_id,username,passwd,joined_on) VALUES (9,"Omar Baird","I4KpcnMGtq","2019-11-08");
INSERT INTO user (user_id,username,passwd,joined_on) VALUES (10,"Zach Mccall","WzRV9sSniC","2019-11-15");

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

INSERT INTO habitation (hab_id,title,price_per_day,capacity,addr,location,region,description) VALUES (1,"Casa de Milhafre",50,4,"Rua Visconde de Vidente","Porto", "north","Proin viverra, tellus vitae varius aliquam, purus est viverra nibh, eu dapibus lorem nisl sit amet ligula. Nulla laoreet molestie gravida.");
INSERT INTO habitation (hab_id,title,price_per_day,capacity,addr,location,region,description) VALUES (2,"Quinta do Covelo",84,8,"Rua Dr. José Almeida Esteves", "Porto","north","Quisque accumsan enim id erat sodales, euismod commodo elit lobortis. Curabitur posuere, metus et gravida ultrices non fringilla justo ligula id est. Vivamus ac facilisis felis.");
INSERT INTO habitation (hab_id,title,price_per_day,capacity,addr,location,region,description) VALUES (3,"Apartamento T3 Mobilado",30,6,"Av. da França" ,"Porto","north","Aliquam mauris nisi, facilisis sed malesuada non, condimentum ut purus. In hac habitasse platea dictumst. Donec eu augue diam.");
INSERT INTO habitation (hab_id,title,price_per_day,capacity,addr,location,region,description) VALUES (4,"Quarto Privado Casal",15,2,"Rua das Flores","Porto", "north","Cras euismod fringilla suscipit. Vestibulum sed nibh pellentesque, fringilla neque quis, euismod diam. Duis vel purus nec risus sollicitudin bibendum.");
INSERT INTO habitation (hab_id,title,price_per_day,capacity,addr,location,region,description) VALUES (5,"Classy Studio",24,3,"Rua da Trindade","Porto","north","Praesent ac lectus ultrices, efficitur neque id, vehicula erat. Pellentesque finibus velit id urna faucibus venenatis. Etiam eu faucibus justo.");

INSERT INTO habitation (hab_id,title,price_per_day,capacity,addr,location,region,description) VALUES (6,"Apartamento T3 Mobilado",30,6,"Rua das Primas" ,"Viseu","center","Aliquam mauris nisi, facilisis sed malesuada non, condimentum ut purus. In hac habitasse platea dictumst. Donec eu augue diam.");
INSERT INTO habitation (hab_id,title,price_per_day,capacity,addr,location,region,description) VALUES (7,"Quarto Privado Casal",15,2,"Praça da Euforia","Guarda", "center","Cras euismod fringilla suscipit. Vestibulum sed nibh pellentesque, fringilla neque quis, euismod diam. Duis vel purus nec risus sollicitudin bibendum.");
INSERT INTO habitation (hab_id,title,price_per_day,capacity,addr,location,region,description) VALUES (8,"Classy Studio",24,3,"Travessa de Leitão","Aveiro","center","Praesent ac lectus ultrices, efficitur neque id, vehicula erat. Pellentesque finibus velit id urna faucibus venenatis. Etiam eu faucibus justo.");

INSERT INTO habitation (hab_id,title,price_per_day,capacity,addr,location,region,description) VALUES (9,"Apartamento T3 Mobilado",30,6,"Rua do Alpendre" ,"Algarve","south","Aliquam mauris nisi, facilisis sed malesuada non, condimentum ut purus. In hac habitasse platea dictumst. Donec eu augue diam.");
INSERT INTO habitation (hab_id,title,price_per_day,capacity,addr,location,region,description) VALUES (10,"Quarto Privado Casal",15,2,"Avenida das Alfaces","Lisboa", "south","Cras euismod fringilla suscipit. Vestibulum sed nibh pellentesque, fringilla neque quis, euismod diam. Duis vel purus nec risus sollicitudin bibendum.");
INSERT INTO habitation (hab_id,title,price_per_day,capacity,addr,location,region,description) VALUES (11,"Classy Studio",24,3,"Praça do Moscatel","Setúbal","south","Praesent ac lectus ultrices, efficitur neque id, vehicula erat. Pellentesque finibus velit id urna faucibus venenatis. Etiam eu faucibus justo.");

INSERT INTO habitation (hab_id,title,price_per_day,capacity,addr,location,region,description) VALUES (12,"Apartamento T3 Mobilado",30,6,"Rua do Açor" ,"Funchal","islands","Aliquam mauris nisi, facilisis sed malesuada non, condimentum ut purus. In hac habitasse platea dictumst. Donec eu augue diam.");
INSERT INTO habitation (hab_id,title,price_per_day,capacity,addr,location,region,description) VALUES (13,"Quarto Privado Casal",15,2,"Avenida Cristiano Ronaldo","Madeira", "islands","Cras euismod fringilla suscipit. Vestibulum sed nibh pellentesque, fringilla neque quis, euismod diam. Duis vel purus nec risus sollicitudin bibendum.");
INSERT INTO habitation (hab_id,title,price_per_day,capacity,addr,location,region,description) VALUES (14,"Classy Studio",24,3,"Praça Pauleta","Açores","islands","Praesent ac lectus ultrices, efficitur neque id, vehicula erat. Pellentesque finibus velit id urna faucibus venenatis. Etiam eu faucibus justo.");

INSERT INTO images (link,hab_id) VALUES ("../images/fancy_living_room.jpg",1);
INSERT INTO images (link,hab_id) VALUES ("../images/modern_living_room.jpg",1);
INSERT INTO images (link,hab_id) VALUES ("../images/spacey_living_room.jpg",1);
INSERT INTO images (link,hab_id) VALUES ("../images/minimal_kitchen.jpg",1);

INSERT INTO ownership (hab,owner,added_on) VALUES (1,3,"2019-10-21 15:17:42");
INSERT INTO ownership (hab,owner,added_on) VALUES (2,1,"2019-10-21 10:05:27");
INSERT INTO ownership (hab,owner,added_on) VALUES (3,2,"2019-10-21 19:24:08");
INSERT INTO ownership (hab,owner,added_on) VALUES (4,2,"2019-10-21 19:25:11");
INSERT INTO ownership (hab,owner,added_on) VALUES (5,3,"2019-10-28 09:31:03");

INSERT into reservation (res_id,hab,client,start_date,end_date) VALUES (1,1,6,"2019-11-01","2019-11-03");
INSERT into reservation (res_id,hab,client,start_date,end_date) VALUES (2,2,4,"2019-10-31","2019-11-01");
INSERT into reservation (res_id,hab,client,start_date,end_date) VALUES (3,3,7,"2019-11-10","2019-11-16");
INSERT into reservation (res_id,hab,client,start_date,end_date) VALUES (4,4,10,"2019-11-18","2019-11-19");
INSERT into reservation (res_id,hab,client,start_date,end_date) VALUES (5,5,8,"2019-11-05","2019-11-08");
INSERT into reservation (res_id,hab,client,start_date,end_date) VALUES (6,4,9,"2019-11-08","2019-11-10");