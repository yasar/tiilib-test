DROP TABLE IF EXISTS accounts;
CREATE TABLE accounts
	(	id INTEGER PRIMARY KEY ASC,
		login VARCHAR(20),
		password VARCHAR(20)
	);
	
INSERT INTO accounts 
	(login, password) VALUES
	('test','test')
	;