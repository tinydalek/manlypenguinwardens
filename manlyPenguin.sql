
CREATE DATABASE manlypenguin;

Use manlypenguin;

-- from SQL tab, copy following and GO!
CREATE TABLE donation  (
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
donation_name VARCHAR (100),
donation_address VARCHAR (255),
donation_city VARCHAR (50),
donation_state CHAR(3),
donation_email VARCHAR(100),
donation_tel VARCHAR(25),
donation_amount INT,
Payment_type VARCHAR(20),
donation_comments VARCHAR(255)
);

CREATE TABLE contact (
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
contact_name VARCHAR (100),
contact_email VARCHAR(100),
enquiry_type VARCHAR(100),
contact_comments VARCHAR(255)
);

INSERT INTO donation VALUES (1, 'Tom', '123 Ultimo Rd', 'ultimo', 'NSW', 'tom@tmail.com', '1234543210', '20', 'Paypal', 'I am happy to donate');

-- from SQL tab, copy following and GO!
-- ALTER TABLE 'donation' ADD 'member_id' INT NULL AFTER 'id';
-- ALTER TABLE 'contact' ADD 'member_id' INT NULL AFTER 'id'; 
-- drop table donation; --delete data and table
-- drop table contact; --delete data and table

SELECT * FROM donation;
SELECT * FROM contact;