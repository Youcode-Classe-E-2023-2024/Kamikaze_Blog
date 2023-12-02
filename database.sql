create DATABASE kamikaze_avito_db;

CREATE TABLE permissions (
    id INT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);




CREATE TABLE role (
    id INT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
    
);

CREATE TABLE permissions_role ( role_id INT,
 permission_id INT, 
 PRIMARY KEY (role_id, permission_id),
  FOREIGN KEY (role_id) REFERENCES role(id),
   FOREIGN KEY (permission_id) REFERENCES permissions(id) 
);


CREATE TABLE users (
    id INT PRIMARY KEY,
    fullName VARCHAR(255) NOT NULL,
    city VARCHAR(255),
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    imgUrl VARCHAR(255),
    roleId INT,
    FOREIGN KEY (roleId) REFERENCES role(id)
);


CREATE TABLE category (
    id INT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

CREATE TABLE publication (
    id INT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    imgUrl VARCHAR(255),
    prix DECIMAL(10, 2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NULL,
    category_Id INT,
    userId INT,
    FOREIGN KEY (category_Id) REFERENCES category(id),
    FOREIGN KEY (userId) REFERENCES users(id)
);

CREATE TABLE likes (
    idPublication INT,
    idUser INT,
    PRIMARY KEY (idPublication, idUser),
    FOREIGN KEY (idPublication) REFERENCES publication(id),
    FOREIGN KEY (idUser) REFERENCES users(id)
);