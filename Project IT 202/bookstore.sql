--David Villafranca
--IT 202-001
--Project Phase 3
--December 8, 2022

-- create and select the database
CREATE DATABASE bookstore;
USE bookstore;  -- MySQL command

-- create the tables
CREATE TABLE bookCategories (
  bookCategoryID     INT(11)        NOT NULL   AUTO_INCREMENT,
  bookCategoryName   VARCHAR(255)   NOT NULL,
  PRIMARY KEY (bookCategoryID)
);

CREATE TABLE books (
  bookID             INT(11)        NOT NULL   AUTO_INCREMENT,
  bookCategoryID     INT(11)        NOT NULL,
  bookCode           VARCHAR(10)    NOT NULL   UNIQUE,
  bookName           VARCHAR(255)   NOT NULL,
  description        TEXT           NOT NULL,
  price              DECIMAL(10,2)  NOT NULL,
  dateAdded          DATETIME       NOT NULL,
  PRIMARY KEY (bookID)
);

CREATE TABLE customers (
  customerID         INT            NOT NULL   AUTO_INCREMENT,
  firstName          VARCHAR(60)    NOT NULL,
  lastName           VARCHAR(60)    NOT NULL,
  emailAddress       VARCHAR(255)   NOT NULL   UNIQUE,
  streetAddress      VARCHAR(60)    NOT NULL,
  city               VARCHAR(40)    NOT NULL,
  state              VARCHAR(2)     NOT NULL,
  zipCode            VARCHAR(10)    NOT NULL,
  reference          VARCHAR(60)    NOT NULL,
  dateAdded          DATETIME       NOT NULL,
  PRIMARY KEY (customerID)
);