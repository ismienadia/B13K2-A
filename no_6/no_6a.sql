CREATE TABLE product(
	id int(5) NOT NULL AUTO_INCREMENT,
	name varchar(20) NOT NULL,
	price int(20) NOT NULL,
	id_category int(5) NOT NULL,
	id_cashier int(5) NOT NULL,
	PRIMARY KEY (id);
);

CREATE TABLE category(
	id_cashier int(5) NOT NULL AUTO_INCREMENT,
	name varchar(20) NOT NULL,
	PRIMARY KEY (id_category);
);

CREATE TABLE cashier(
	id_category int(5) NOT NULL AUTO_INCREMENT,
	name varchar(20) NOT NULL,
	PRIMARY KEY (id_cashier);
);

ALTER TABLE product
ADD CONSTRAINT FKProductCategory
FOREIGN KEY (id_category) REFERENCES category (id_category);

ALTER TABLE product
ADD CONSTRAINT FKProductCashier
FOREIGN KEY (id_cashier) REFERENCES cashier (id_cashier);

INSERT INTO product ('id', 'name', 'price', 'id_category', 'id_cashier') VALUES 
(1, 'Latte', 10000, 2, 1),
(2, 'Cake', 20000, 1, 2),
(3, 'Pizza', 50000, 2, 3);

INSERT INTO category ('id', 'name') VALUES 
(1, 'Food'),
(2, 'Drink');

INSERT INTO cashier ('id', 'name') VALUES 
(1, 'Pevita Pearce'),
(2, 'Raisa Andriana'),
(3, 'Ismie Nadia Zulfa');

SELECT cashier.name, product.name, category.name, product.price
FROM category
JOIN ON product ON category.id_category = product.id_category
JOIN ON cashier ON product.id_cashier = cashier.id_cashier
GROUP BY cashier.id_cashier
ORDER BY cashier.name DESC;