
CREATE TABLE products (
    id INT(6)  PRIMARY KEY,
    product_name VARCHAR(100) NOT NULL,
    product_description text NOT NULL,
    Price float NOT NULL
);


INSERT INTO products ("id", "product_name","product_description","Price") 
VALUES (1,'Iphone 6', '32GB', 339 );

