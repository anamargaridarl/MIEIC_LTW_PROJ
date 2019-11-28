.mode columns
.headers on
.nullvalue NULL

PRAGMA foreign_keys = ON;
BEGIN TRANSACTION;

DROP TABLE IF EXISTS user;
CREATE TABLE user (
  user_id PRIMARY KEY,
  username TEXT UNIQUE NOT NULL,
  passwd TEXT NOT NULL,
  joined_on DATE NOT NULL
  -- country perhaps?
  --points gained(through forum participation) ? 
);

DROP TABLE IF EXISTS client;
CREATE TABLE client (
  client_id PRIMARY KEY REFERENCES user ON DELETE CASCADE ON UPDATE CASCADE
  --points gained(number of rentals?)
);

DROP TABLE IF EXISTS owner;
CREATE TABLE owner (
  owner_id PRIMARY KEY REFERENCES user ON DELETE CASCADE ON UPDATE CASCADE
  --points gained(users feedback on rentals?)
);

DROP TABLE IF EXISTS habitation;
CREATE TABLE habitation (
  hab_id INTEGER PRIMARY KEY,
  title TEXT NOT NULL,
  price_per_day REAL NOT NULL,
  capacity INT NOT NULL,
  location TEXT NOT NULL,
  description TEXT
  -- rate?
  -- comments?
);

DROP TABLE IF EXISTS images;
CREATE TABLE images (
  link TEXT PRIMARY KEY,
  hab_id int REFERENCES habitation ON DELETE RESTRICT ON UPDATE CASCADE
);

DROP TABLE IF EXISTS ownership;
CREATE TABLE ownership (
  hab INT NOT NULL REFERENCES habitation ON DELETE RESTRICT ON UPDATE CASCADE,
  owner INT NOT NULL REFERENCES owner ON DELETE RESTRICT ON UPDATE CASCADE,
  added_on DATE NOT NULL 
);

DROP TABLE IF EXISTS reservation;
CREATE TABLE reservation (
  res_id AUTO PRIMARY KEY,
  hab INT NOT NULL REFERENCES habitation ON DELETE RESTRICT ON UPDATE CASCADE,
  client INT NOT NULL REFERENCES client ON DELETE RESTRICT ON UPDATE CASCADE,
  start_date DATE NOT NULL,
  end_date DATE NOT NULL,
  UNIQUE (hab,client,start_date),
  CHECK (start_date < end_date)
  -- discount REAL ?
  -- total price? derived attribute
);

-- Possible tables
-- - messages
-- - comments

COMMIT TRANSACTION;
