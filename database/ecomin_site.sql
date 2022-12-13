CREATE TABLE IF NOT EXISTS vendors(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    v_id VARCHAR(255) NOT NULL,
    firstname VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL ,
    password VARCHAR(255) NOT NULL,
    companyname VARCHAR(255) NOT NULL DEFAULT "shopping company.,Ltd",
    logo_img MEDIUMBLOB NULL,
    address TEXT NOT NULL DEFAULT "enter your address",
    account_no VARCHAR(255) NOT NULL DEFAULT "Enter Your payment account number",
    contact_number1 VARCHAR(255) NOT NULL,
    contact_number2 VARCHAR(255) NOT NULL,
    zipcode VARCHAR(255) NOT NULL DEFAULT "Enter your zip code",
    country VARCHAR(255) NOT NULL DEFAULT "Enter your Country",
    city VARCHAR(255) NOT NULL DEFAULT "Eenter Your city",
    region VARCHAR(255) NOT NULL DEFAULT "Enter Your region",
    message MEDIUMTEXT 
);

INSERT INTO vendors(v_id,firstname,lastname,email,password,companyname,logo_img,address,account_no,contact_number1,contact_number2,zipcode,country,city,region,message) 
VALUES ("v-001","Jame","leo","James@gmail.com","","","","","",09957092779,09751099740,"","","","","How are you"),
("v-002","Christopher","leo","christopher@gmail.com","vendor","Shopping Site","","bago","02873 2837 28736 0233",09957092779,09751099740,"08001","myanmar","bago","bago","How are you");


CREATE TABLE IF NOT EXISTS users (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    u_id VARCHAR(255) NOT NULL,
    firstname VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL ,
    password VARCHAR(255) NOT NULL,
    logo_img MEDIUMBLOB NULL,
    address TEXT NOT NULL DEFAULT "enter your address",
    account_no VARCHAR(255) NOT NULL DEFAULT "Enter Your payment account number",
    contact_number VARCHAR(255) NOT NULL, 
    zipcode VARCHAR(255) NOT NULL DEFAULT "Enter your zip code",
    country VARCHAR(255) NOT NULL DEFAULT "Enter your Country",
    city VARCHAR(255) NOT NULL DEFAULT "Eenter Your city",
    region VARCHAR(255) NOT NULL DEFAULT "Enter Your region",
    message MEDIUMTEXT 
);

INSERT INTO users (u_id,firstname,lastname,email,password,logo_img,address,account_no,contact_number,zipcode,country,city,region,message) VALUES 
("u-001","John","wick","johnwick@gmail.com","john","","yangon","0982 4432 9863 8753",09957092779,8001,"myanmar","bago","bago","hello I am john"),
("u-002","Johney","Walker","Johneywalker@gmail.com","walker","","","",09751099740,8801,"","","","hello I am walker");

CREATE TABLE IF NOT EXISTS menproduct (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    pm_code VARCHAR(255) NOT NULL DEFAULT "Enter Product Code",
    title VARCHAR(255) NOT NULL DEFAULT "Enter product title",
    price VARCHAR(255) NOT NULL DEFAULT "Enter product price",
    size CHAR(255) NOT NULL DEFAULT "Medium",
    category VARCHAR(255) NOT NULL DEFAULT "Men Product",
    stock MEDIUMINT NOT NULL DEFAULT 100,
    image MEDIUMBLOB NULL,
    description MEDIUMTEXT NOT NULL DEFAULT "Enter Product description"
);

INSERT INTO menproduct (pm_code,title,price,size,category,stock,image,description) VALUES
("pm-0001","shirt","45","md","man product","100","","sutible for summer"),
("pm-0002","pin","23","lg","man product","150","","for winter");

CREATE TABLE IF NOT EXISTS womenproduct (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    pw_code VARCHAR(255) NOT NULL DEFAULT "Enter Product Code",
    title VARCHAR(255) NOT NULL DEFAULT "Enter product title",
    price VARCHAR(255) NOT NULL DEFAULT "Enter product price",
    size CHAR(255) NOT NULL DEFAULT "Medium",
    category VARCHAR(255) NOT NULL DEFAULT "Men Product",
    stock MEDIUMINT NOT NULL DEFAULT 100,
    image MEDIUMBLOB NULL,
    description MEDIUMTEXT NOT NULL DEFAULT "Enter Product description"
);

INSERT INTO womenproduct (pw_code,title,price,size,category,stock,image,description) VALUES
("pw-0001","t shirt","15","sm","women product","100","","for swimming"),
("pw-0002","scart","10","md","women product","150","","for office");


CREATE TABLE IF NOT EXISTS accessorites (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    pa_code VARCHAR(255) NOT NULL DEFAULT "Enter Product Code",
    title VARCHAR(255) NOT NULL DEFAULT "Enter product title",
    price VARCHAR(255) NOT NULL DEFAULT "Enter product price",
    size CHAR(255) NOT NULL DEFAULT "Medium",
    category VARCHAR(255) NOT NULL DEFAULT "Men Product",
    stock MEDIUMINT NOT NULL DEFAULT 100,
    image MEDIUMBLOB NULL,
    description MEDIUMTEXT NOT NULL DEFAULT "Enter Product description"
);

INSERT INTO accessorites (pa_code,title,price,size,category,stock,image,description) VALUES
("pa-0001","shoe","29","md","shoe","100","","for walk"),
("pa-0002","wallet","50","sm","wallet","150","","for man");

CREATE TABLE IF NOT EXISTS orders (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    p_code VARCHAR(255) NOT NULL DEFAULT "Enter Product Code",
    title VARCHAR(255) NOT NULL DEFAULT "Enter product title",
    price VARCHAR(255) NOT NULL DEFAULT "Enter product price",
    size CHAR(255) NOT NULL DEFAULT "Medium",
    category VARCHAR(255) NOT NULL DEFAULT "Men Product",
    stock MEDIUMINT NOT NULL DEFAULT 100,
    image MEDIUMBLOB NULL,
    description MEDIUMTEXT NOT NULL DEFAULT "Enter Product description"
);

CREATE TABLE IF NOT EXISTS wishlists (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    p_code VARCHAR(255) NOT NULL DEFAULT "Enter Product Code",
    title VARCHAR(255) NOT NULL DEFAULT "Enter product title",
    price VARCHAR(255) NOT NULL DEFAULT "Enter product price",
    size CHAR(255) NOT NULL DEFAULT "Medium",
    category VARCHAR(255) NOT NULL DEFAULT "Men Product",
    stock MEDIUMINT NOT NULL DEFAULT 100,
    image MEDIUMBLOB NULL,
    description MEDIUMTEXT NOT NULL DEFAULT "Enter Product description"
);

CREATE TABLE IF NOT EXISTS cart (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    p_code VARCHAR(255) NOT NULL DEFAULT "Enter Product Code",
    title VARCHAR(255) NOT NULL DEFAULT "Enter product title",
    price VARCHAR(255) NOT NULL DEFAULT "Enter product price",
    size CHAR(255) NOT NULL DEFAULT "Medium",
    category VARCHAR(255) NOT NULL DEFAULT "Men Product",
    stock MEDIUMINT NOT NULL DEFAULT 100,
    image MEDIUMBLOB NULL,
    description MEDIUMTEXT NOT NULL DEFAULT "Enter Product description"
);

CREATE TABLE IF NOT EXISTS contacts (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message MEDIUMTEXT 
);

CREATE TABLE IF NOT EXISTS reviews (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    image MEDIUMBLOB NOT NULL,
    comment MEDIUMTEXT 
);