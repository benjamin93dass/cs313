CREATE TABLE person
(
	id SERIAL PRIMARY KEY NOT NULL
	, name VARCHAR(50) NOT NULL
);

CREATE TABLE user
(
	id SERIAL PRIMARY KEY NOT NULL
	, username VARCHAR(50) UNIQUE NOT NULL
	, password VARCHAR(50) NOT NULL
	, bank_name VARCHAR(50) references bank_account(bank_name)
);

CREATE TABLE bank_account
(
	id SERIAL PRIMARY KEY NOT NULL
	, bank_name VARCHAR(50) NOT NULL
	, account_name VARCHAR(50) references account_title(account)
)

CREATE TABLE account
(
	id SERIAL PRIMARY KEY NOT NULL
	, account_title VARCHAR(50) UNIQUE NOT NULL
	, account_value INT NOT NULL
)