DROP TABLE event;

CREATE TABLE event (
  id SERIAL PRIMARY KEY,
  title TEXT NOT NULL,
  description TEXT NOT NULL,
  time TEXT,
  enclosure TEXT
  );

INSERT INTO event (title, description, time, enclosure)
VALUES('Dance Lifts', 'Hart 204 Wrestling Room: Dance Lifts classes are open to all BYU-Idaho students, employees, and their dependents. Register in advance on IMLeagues.com. There is no fee for those who register before coming to class for the first time. BYU-Idaho-appropriate activity clothing is required.', '1:00 PM to 2:50 PM', 'http://calendar.byui.edu/imagewriter.aspx?imageId=7947');

INSERT INTO event (title, description, time, enclosure)
VALUES('Slacklining', 'BYU-Idaho Center Court 09: Slacklining is a balance sport which uses nylon webbing stretched tight between two anchor points. Its like walking on a tightrope, only closer to the ground. Slacklining is a great way to improve core body strength and balance while meeting new friends. No sign ups are necessary, drop in anytime.', '7:00 PM to 9:00 PM', 'http://calendar.byui.edu/imagewriter.aspx?imageId=7632');
