CREATE DATABASE frugal_friend;

use frugal_friend;
create table users(
                      id int not null AUTO_INCREMENT PRIMARY KEY,
                      name varchar(255),
                      email varchar(255),
                      password varchar(255),
                      created_at timestamp,
                      updated_at timestamp
);

create table category(
                         id int not null AUTO_INCREMENT PRIMARY KEY,
                         name varchar(255),
                         created_at timestamp,
                         updated_at timestamp
);

INSERT INTO `category`(`id`, `name`, `created_at`, `updated_at`) VALUES (1,'Clothing',now(),now());
INSERT INTO `category`(`id`, `name`, `created_at`, `updated_at`) VALUES (2,'Education',now(),now());
INSERT INTO `category`(`id`, `name`, `created_at`, `updated_at`) VALUES (3,'Food',now(),now());
INSERT INTO `category`(`id`, `name`, `created_at`, `updated_at`) VALUES (4,'Gifts',now(),now());
INSERT INTO `category`(`id`, `name`, `created_at`, `updated_at`) VALUES (5,'Grocery',now(),now());
INSERT INTO `category`(`id`, `name`, `created_at`, `updated_at`) VALUES (6,'Home Utilities',now(),now());
INSERT INTO `category`(`id`, `name`, `created_at`, `updated_at`) VALUES (7,'Recharge',now(),now());
INSERT INTO `category`(`id`, `name`, `created_at`, `updated_at`) VALUES (8,'Rent',now(),now());
INSERT INTO `category`(`id`, `name`, `created_at`, `updated_at`) VALUES (9,'Health',now(),now());

create table transaction_type(
                                 id int not null AUTO_INCREMENT PRIMARY KEY,
                                 name varchar(255),
                                 created_at timestamp,
                                 updated_at timestamp
);

CREATE table income_expenses(
                                id int not null AUTO_INCREMENT PRIMARY KEY,
                                user_id int,
                                transaction_mode varchar (250),
                                date varchar(250),
                                category_id int,
                                transaction_id int,
                                amount int,
                                description longtext,
                                created_at timestamp,
                                updated_at timestamp,
                                FOREIGN KEY(user_id) REFERENCES users(id),
                                FOREIGN KEY(category_id) REFERENCES category(id),
                                FOREIGN KEY(transaction_id) REFERENCES transaction_type(id)
);