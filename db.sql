

CREATE TABLE users(
id INT AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(255) UNIQUE NOT NULL,
PASSWORD VARCHAR(255) NOT NULL
);
INSERT INTO users(email,PASSWORD) VALUES ("beate@ckc.lv" , "Parole123");

 