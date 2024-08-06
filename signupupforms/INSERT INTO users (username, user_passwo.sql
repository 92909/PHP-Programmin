INSERT INTO users (username, user_password, email) VALUES ('Kim Jackson', 'Kimj.jackson1', 'kimjackson9@gmail.com')

INSERT INTO users (username, user_password, email) VALUES ('Douglas Mwangi', 'Daggy1234', 'Daggym@gmail.com')
CREATE TABLE rating ( id INT(11) NOT NULL AUTO_INCREMENT, username VARCHAR(40) NOT NULL, password VARCHAR(50) NOT NULL, ratings BIGINT(100) NOT NULL, time_created DATETIME NOT NULL DEFAULT CURRENT_TIME, PRIMARY KEY (id) );
ALTER TABLE rating CHANGE COLUMN password user_password VARCHAR (50);
CREATE TABLE rating ( id INT(11) NOT NULL AUTO_INCREMENT, username VARCHAR(40) NOT NULL, password VARCHAR(50) NOT NULL, ratings BIGINT(100) NOT NULL, time_created DATETIME NOT NULL DEFAULT CURRENT_TIME, PRIMARY KEY (id) );
UPDATE users SET username = 'Douglas Mutegi', user_password = 'DaggyMutegegis'WHERE id = 2;
DELETE FROM rating WHERE id = 2;
INSERT INTO comments (username, comments, users_id) VALUES ('Kim Jackson', 'I propose Wycliff Kimani for President', 1); 
SELECT users.username, users.email, comments.comments, comments.commented_at FROM users INNER JOIN comments ON users.id = comments.id;
SELECT users.id, users.username, users.email, comments.comments FROM users INNER JOIN comments ON users.id = comments.users_id;

