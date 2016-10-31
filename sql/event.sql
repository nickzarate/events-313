DROP TABLE event;

CREATE TABLE event (
  id SERIAL PRIMARY KEY,
  title TEXT NOT NULL,
  time TEXT NOT NULL,
  location TEXT NOT NULL,
  description TEXT
  );
