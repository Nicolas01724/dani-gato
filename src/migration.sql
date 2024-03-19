CREATE TABLE gender (
    id INT PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(100)  
);

CREATE TABLE habitat (
    id INT PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(100),
    latitude FLOAT,
    longitude FLOAT
);

CREATE TABLE cat (
    id INT PRIMARY KEY AUTO_INCREMENT,
    pt_name VARCHAR(100),
    en_name VARCHAR(100),
    cientific_name VARCHAR(100),
    image_url VARCHAR(100),
    fact TEXT,
    habitat_id INT,
    gender_id INT,

    CONSTRAINT FK_habitat FOREIGN KEY (habitat_id) REFERENCES habitat(id),
    CONSTRAINT FK_gender FOREIGN KEY (gender_id) REFERENCES gender(id)
);