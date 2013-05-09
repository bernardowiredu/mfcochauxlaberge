-- No Name Game
-- Initialization script
-- Marc-François Cochaux-Laberge (mfcochauxlaberge.ca)

SET NAMES utf8;

DROP TABLE posts IF EXISTS;
DROP TABLE tags IF EXISTS;
DROP TABLE users IF EXISTS;

-- TABLES

-- Users
CREATE TABLE users (
	id INT UNSIGNED NOT NULL AUTO INCREMENT,
	username VARCHAR(50) NOT NULL,
	password CHAR(50) NOT NULL,
	CONSTRAINT pk_users_id PRIMARY KEY (id)
)

-- Tags
CREATE TABLE tags (
	id INT UNSIGNED NOT NULL AUTO INCREMENT,
	name VARCHAR(50) NOT NULL,
	CONSTRAINT pk_tags_id PRIMARY KEY (id)
)

-- Posts
CREATE TABLE posts (
	id INT UNSIGNED NOT NULL AUTO INCREMENT,
	create_at DATETIME NOT NULL,
	updated_at DATETIME NOT NULL,
	name VARCHAR(40) NOT NULL,
	content TEXT NOT NULL DEFAULT '',
	language CHAR(2) NOT NULL DEFAULT 'en'
) ENGINE = innodb;