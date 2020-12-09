DROP TABLE IF EXISTS recette, fees;

CREATE TABLE recette (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description VARCHAR(100) NOT NULL,
    amount INT(50) NOT NULL,
    currency VARCHAR(100) NOT NULL,
    d_date DATE NOT NULL
);


CREATE TABLE fees (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    description VARCHAR(100) NOT NULL,
    amount INT(50) NOT NULL,
    currency VARCHAR(100) NOT NULL
)