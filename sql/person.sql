DROP TABLE person;

CREATE TABLE person (
  id SERIAL PRIMARY KEY,
  username TEXT NOT NULL,
  password varchar(100) NOT NULL
  );
