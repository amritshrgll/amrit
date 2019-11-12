<?php
/*
DDL: Data definition Language
DDL statements or commands are used to define and modify the database structure of your tables or schema. When you execute a DDL statement, it takes effect immediately

CREATE – to create table (objects) in the database
ALTER – alters the structure of the database
DROP – delete table from the database
TRUNCATE – remove all records from a table, including all spaces allocated for the records are removed
COMMENT – add comments to the data dictionary
RENAME – rename a table

CREATE :
The create table statement (query) to create a table is given below:
 
CREATE TABLE STUDENT ( StudID NUMBER, Name VARCHAR);
create table tutorials_tbl(
   tutorial_id INT NOT NULL AUTO_INCREMENT,
   tutorial_title VARCHAR(100) NOT NULL,
   tutorial_author VARCHAR(40) NOT NULL,
   submission_date DATE,
   PRIMARY KEY ( tutorial_id )
);


ALTER :
The alter table statement to make modifications to the table structure such as Key constraints, Column size, etc.
ALTER TABLE STUDENT ADD CONSTRAINT NOT NULL PRIMARY KEY (StudID)
ALTER TABLE STUDENT ADD COLUMN age INT;


The drop table statement (query) to delete a table:

DROP TABLE <table name>;
DROP TABLE STUDENT;
*/



?>