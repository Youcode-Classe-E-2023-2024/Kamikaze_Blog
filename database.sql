create DATABASE kamikaze_avito_db;

CREATE TABLE permissions (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    module VARCHAR(255) NOT NULL
);




CREATE TABLE role (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL
    
);

CREATE TABLE permissions_role ( role_id INT,
 permission_id INT, 
 PRIMARY KEY (role_id, permission_id),
  FOREIGN KEY (role_id) REFERENCES role(id),
   FOREIGN KEY (permission_id) REFERENCES permissions(id) 
);


CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    fullName VARCHAR(255) NOT NULL,
    city VARCHAR(255),
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    is_confirmed INT  DEFAULT 0,
    confirmation_token INT NULL,
    reset_token_expires INT  NULL,
    imgUrl VARCHAR(255),
    roleId INT,
    FOREIGN KEY (roleId) REFERENCES role(id)
);


CREATE TABLE category (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL
);

INSERT INTO category (id, name)
VALUES('1', 'Motos'),
('2', 'Voitures');


CREATE TABLE city (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL
);

INSERT INTO city (id, name)
VALUES('1', 'Marrakech'),
('2', 'City');

CREATE TABLE publication (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    imgUrl VARCHAR(255),
    prix DECIMAL(10, 2) NOT NULL,
    cityId INT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NULL,
    category_Id INT,
    userId INT,
    FOREIGN KEY (category_Id) REFERENCES category(id),
    FOREIGN KEY (userId) REFERENCES users(id),
    FOREIGN KEY (cityId) REFERENCES city(id)
);

CREATE TABLE likes (
    idPublication INT ,
    idUser INT,
    PRIMARY KEY (idPublication, idUser),
    FOREIGN KEY (idPublication) REFERENCES publication(id),
    FOREIGN KEY (idUser) REFERENCES users(id)
);
CREATE TABLE team (
                      id int PRIMARY KEY AUTO_INCREMENT,
                      username varchar(255) NOT NULL,
                      role varchar(255) NOT NULL,
                      description varchar(255) NOT NULL
) ;

-- Insertion

INSERT INTO `role` (`id`, `name`) VALUES ('1', 'admin'), ('2', 'moderator'), ('3', 'client');;

INSERT INTO `permissions` (`id`, `name` , `module`) 
    VALUES ('1', 'canRead' , 'user'), 
            ('2', 'canCreate' , 'user'),
            ('3', 'canUpdate' , 'user'), 
            ('4', 'canDelete' , 'user');
    
INSERT INTO `permissions_role` (`role_id`, `permission_id`)
 VALUES ('1', '1'),
  ('1', '2'),
  ('1', '3'),
   ('1', '4');

INSERT INTO `permissions_role` (`role_id`, `permission_id`) 
VALUES ('2', '1'), 
('2', '2'),
('2', '3');

INSERT INTO `permissions_role` (`role_id`, `permission_id`) VALUES 
('3', '2')
, ('3', '1');
  

