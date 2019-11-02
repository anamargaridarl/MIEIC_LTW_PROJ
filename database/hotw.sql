PRAGMA foreign_keys = ON;
BEGIN TRANSACTION;

DROP TABLE IF EXISTS user;
CREATE TABLE user (
  user_id PRIMARY KEY,
  username VARCHAR UNIQUE NOT NULL,
  passwd VARCHAR NOT NULL,
  joined_on DATE NOT NULL
  -- country perhaps?
);

DROP TABLE IF EXISTS tourist;
CREATE TABLE tourist (
  tourist_id PRIMARY KEY REFERENCES user ON DELETE CASCADE ON UPDATE CASCADE
  --points gained(through forum participation or number of rentals?)
);

DROP TABLE IF EXISTS owner;
CREATE TABLE owner (
  owner_id PRIMARY KEY REFERENCES user ON DELETE CASCADE ON UPDATE CASCADE
  --points gained(through forum participation or users feedback on rentals?)
);

DROP TABLE IF EXISTS habitation;
CREATE TABLE habitation (
  hab_id PRIMARY KEY,
  title TEXT NOT NULL,
  price REAL NOT NULL,
  location TEXT NOT NULL,
  description TEXT
  -- rate?
  -- comments?
);

DROP TABLE IF EXISTS reservation;
CREATE TABLE reservation (
  hab_id INT NOT NULL REFERENCES habitation ON DELETE RESTRICT ON UPDATE CASCADE,
  tourist_id INT NOT NULL REFERENCES tourist ON DELETE RESTRICT ON UPDATE CASCADE,
  start_date DATE NOT NULL,
  end_date DATE NOT NULL,
  UNIQUE (hab_id,tourist_id,start_date),
  CHECK (start_date < end_date)
  -- comments TEXT ?
  -- discount REAL ?
);

DROP TABLE IF EXISTS ownership;
CREATE TABLE ownership (
  hab_id INT NOT NULL REFERENCES habitation ON DELETE RESTRICT ON UPDATE CASCADE,
  owner_id INT NOT NULL REFERENCES owner ON DELETE RESTRICT ON UPDATE CASCADE,
  added_on DATE NOT NULL 
);

COMMIT TRANSACTION;