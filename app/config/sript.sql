Create DATABASE wiki;

CREATE TABLE roles(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name varchar(255)

);

CREATE TABLE users(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name varchar(255),
    email varchar(255),
    password varchar(255),
    role_id INT,
    FOREIGN KEY (role_id) REFERENCES roles(id)

);

CREATE TABLE categories(
    id INT AUTO_INCREMENT PRIMARY KEY,
    title varchar(255),
    submissionDate DATETIME
);

CREATE TABLE wikis(
    id INT AUTO_INCREMENT PRIMARY KEY,
    title varchar(255),
    content TEXT,
    imagePath varchar(255),
    submissionDate DATETIME,
    status BOOLEAN,
    category_id INT,
    FOREIGN KEY (category_id) REFERENCES categories(id)

);

CREATE TABLE tags(
    id INT AUTO_INCREMENT PRIMARY KEY,
    title varchar(255),
    submissionDate DATETIME
);

CREATE TABLE wiki_tag(
    wiki_id INT,
    tag_id INT,
    PRIMARY KEY (wiki_id, tag_id),
    FOREIGN KEY (wiki_id) REFERENCES wikis(id),
    FOREIGN KEY (tag_id) REFERENCES tags(id)


);