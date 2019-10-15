CREATE TABLE person
(
	id SERIAL PRIMARY KEY NOT NULL
	, person_name VARCHAR(50) NOT NULL
);

CREATE TABLE username
(
	id SERIAL PRIMARY KEY NOT NULL
	, username VARCHAR(50) UNIQUE NOT NULL
	, password VARCHAR(50) NOT NULL
	, name INT NOT NULL REFERENCES person(id)
);

CREATE TABLE bank_account
(
	id SERIAL PRIMARY KEY NOT NULL
	, bank_name VARCHAR(50) NOT NULL
	, debit_balance INT
	, available_credit INT
	, credit_balance INT
	, name INT NOT NULL REFERENCES person(id)
);

INSERT INTO person (person_name) VALUES ('Benjamin');
INSERT INTO person (person_name) VALUES ('John Doe');

INSERT INTO username (username, password, name) 
VALUES ('ben', 'pink', 1), ('johny', 'blue', 2);


/* Benjamin's account */
/*Account 1*/
INSERT INTO bank_account 
( bank_name, debit_balance, available_credit, credit_balance, name)
VALUES
( 'US Bank', 3560.99, 2450.00, 50.00, 1);

/*Account 2*/
INSERT INTO bank_account 
( bank_name, debit_balance, available_credit, credit_balance, name)
VALUES
( 'BeeHive', 2568.88, 235, 15.00, 1);

/*Account 3*/
INSERT INTO bank_account 
( bank_name, debit_balance, available_credit, credit_balance, name)
VALUES
( 'BSN', 1570.66, 0, 0, 1);

/* John Doe's account */
/*Account 1*/
INSERT INTO bank_account 
( bank_name, debit_balance, available_credit, credit_balance, name)
VALUES
( 'Zions Bank', 2400.00, 500.00, 0, 2);

/*Account 2*/
INSERT INTO bank_account 
( bank_name, debit_balance, available_credit, credit_balance, name)
VALUES
( 'Wells Fargo', 356.89, 400.00, 100.00, 2);

/*Account 3*/
INSERT INTO bank_account 
( bank_name, debit_balance, available_credit, credit_balance, name)
VALUES
( 'Bank of America', 1355.88, 980.00, 20, 2);